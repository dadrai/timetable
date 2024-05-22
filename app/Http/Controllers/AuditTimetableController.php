<?php

namespace App\Http\Controllers;

use App\Models\Timetable;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class AuditTimetableController extends Controller
{
    public function index(){

        $audits = DB::table('tgputimetable')->select('Аудитория')
            ->distinct()->orderBy('Аудитория', 'asc')->get();
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

        return view( 'aydit',['audits'=>$audits, 'data'=>$today, 'week'=>$week,
        'pon'=>$pon, 'vt'=>$vt, "sr"=>$sr, "cht"=>$cht,"pt"=>$pt,"sb"=>$sb, 'gr'=>$gr_n ]);
    }
    public function show($ay_n){
        $today = date('Y-m-j 00:00:00');

        $week = date('W') +18;

//        $timetable = Timetable::all()
//            ->where('ТипНедели', '=',$week)
//            ->where('Группа', '=',$gr_n);

        return $this->extracted($week, $ay_n, $today);
    }
    public function pred_week($ay_n,$week) {
        $today = date('Y-m-j 00:00:00');


        return $this->extracted($week-1, $ay_n, $today);
    }

    /**
     * @param $week
     * @param $ay_n
     * @param $today
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function extracted($week, $ay_n, $today)
    {
        $pon = DB::table('tgputimetable')->select()->where('ТипНедели', '=', $week)
            ->where('ДеньНедели', '=', 1)
            ->where('Аудитория', '=', $ay_n)->orderBy('ВремяПо', 'asc')->get();

        $vt = DB::table('tgputimetable')->select()->where('ТипНедели', '=', $week)
            ->where('ДеньНедели', '=', 2)
            ->where('Аудитория', '=', $ay_n)->orderBy('ВремяПо', 'asc')->get();
        $sr = DB::table('tgputimetable')->select()->where('ТипНедели', '=', $week)
            ->where('ДеньНедели', '=', 3)
            ->where('Аудитория', '=', $ay_n)->orderBy('ВремяПо', 'asc')->get();
        $cht = DB::table('tgputimetable')->select()->where('ТипНедели', '=', $week)
            ->where('ДеньНедели', '=', 4)
            ->where('Аудитория', '=', $ay_n)->orderBy('ВремяПо', 'asc')->get();
        $pt = DB::table('tgputimetable')->select()->where('ТипНедели', '=', $week)
            ->where('ДеньНедели', '=', 5)
            ->where('Аудитория', '=', $ay_n)->orderBy('ВремяПо', 'asc')->get();
        $sb = DB::table('tgputimetable')->select()->where('ТипНедели', '=', $week)
            ->where('ДеньНедели', '=', 6)
            ->where('Аудитория', '=', $ay_n)->orderBy('ВремяПо', 'asc')->get();

        $audits = DB::table('tgputimetable')->select('Аудитория')
            ->distinct()->orderBy('Аудитория', 'asc')->get();

        return view('aydit',['audits'=>$audits, 'data' => $today, 'week' => $week,
            'pon' => $pon, 'vt' => $vt, "sr" => $sr, "cht" => $cht, "pt" => $pt, "sb" => $sb ]);
    }

}
