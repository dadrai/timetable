<?php

namespace App\Http\Controllers;

use App\Models\Timetable;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class GroupTimetableController extends Controller
{
    public function index(){

        $groups = DB::table('tgputimetable')->select('Группа')
            ->distinct()->orderBy('Группа', 'asc')->get();
       // $pon=null; $vt=null; $sr=null; $cht=null; $pt=null; $sb=null;

        $today = date('Y-m-j 00:00:00');

        $week = date('W') +18;

        $pon = DB::table('tgputimetable')->select() ->where('ТипНедели', '=',$week)
            ->where('ДеньНедели','=', 1)
            ->where('Группа', '=',493)->get();

        $vt = DB::table('tgputimetable')->select() ->where('ТипНедели', '=',$week)
            ->where('ДеньНедели','=', 2)
            ->where('Группа', '=',493)->get();
        $sr = DB::table('tgputimetable')->select() ->where('ТипНедели', '=',$week)
            ->where('ДеньНедели','=', 3)
            ->where('Группа', '=',493)->get();
        $cht = DB::table('tgputimetable')->select() ->where('ТипНедели', '=',$week)
            ->where('ДеньНедели','=', 4)
            ->where('Группа', '=',493)->get();
        $pt = DB::table('tgputimetable')->select()->where('ТипНедели', '=',$week)
            ->where('ДеньНедели','=', 5)
            ->where('Группа', '=',493)->get();
        $sb = DB::table('tgputimetable')->select() ->where('ТипНедели', '=',$week)
            ->where('ДеньНедели','=', 6)
            ->where('Группа', '=',493)->get();

        $gr_n = 493;

        return view( 'group',['groups'=>$groups, 'data'=>$today, 'week'=>$week,
        'pon'=>$pon, 'vt'=>$vt, "sr"=>$sr, "cht"=>$cht,"pt"=>$pt,"sb"=>$sb, 'gr'=>$gr_n ]);
    }
    public function show($gr_n){
        $today = date('Y-m-j 00:00:00');

        $week = date('W') +18;

//        $timetable = Timetable::all()
//            ->where('ТипНедели', '=',$week)
//            ->where('Группа', '=',$gr_n);

        return $this->extracted($week, $gr_n, $today);
    }
    public function pred_week($gr_n, $week) {
        $today = date('Y-m-j 00:00:00');


        return $this->extracted($week, $gr_n, $today);
    }

    /**
     * @param $week
     * @param $gr_n
     * @param $today
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function extracted($week, $gr_n, $today)
    {
        $pon = DB::table('tgputimetable')->select()->where('ТипНедели', '=', $week)
            ->where('ДеньНедели', '=', 1)
            ->where('Группа', '=', $gr_n)->get();

        $vt = DB::table('tgputimetable')->select()->where('ТипНедели', '=', $week)
            ->where('ДеньНедели', '=', 2)
            ->where('Группа', '=', $gr_n)->get();
        $sr = DB::table('tgputimetable')->select()->where('ТипНедели', '=', $week)
            ->where('ДеньНедели', '=', 3)
            ->where('Группа', '=', $gr_n)->get();
        $cht = DB::table('tgputimetable')->select()->where('ТипНедели', '=', $week)
            ->where('ДеньНедели', '=', 4)
            ->where('Группа', '=', $gr_n)->get();
        $pt = DB::table('tgputimetable')->select()->where('ТипНедели', '=', $week)
            ->where('ДеньНедели', '=', 5)
            ->where('Группа', '=', $gr_n)->get();
        $sb = DB::table('tgputimetable')->select()->where('ТипНедели', '=', $week)
            ->where('ДеньНедели', '=', 6)
            ->where('Группа', '=', $gr_n)->get();

        $groups = DB::table('tgputimetable')->select('Группа')
            ->distinct()->orderBy('Группа', 'asc')->get();

        return view('group', ['groups' => $groups, 'data' => $today, 'week' => $week,
            'pon' => $pon, 'vt' => $vt, "sr" => $sr, "cht" => $cht, "pt" => $pt, "sb" => $sb , 'gr'=>$gr_n]);
    }

}
