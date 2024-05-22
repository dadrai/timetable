<?php

namespace App\Http\Controllers;

use App\Models\Timetable;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

class PrepodController extends Controller
{
    public function index(){

        $prepods = DB::table('tgputimetable')
            ->select('Преподаватель','Фамилия', 'Имя','Отчество')
            ->where('Фамилия', '!=' ,'')
            ->distinct()->orderBy('Фамилия', 'asc')->get();

        $short_pr =DB::table('tgputimetable')
            ->select('Преподаватель', 'Фамилия')->where('Преподаватель', '!=' ,'')
            ->distinct()->orderBy('Преподаватель', 'asc')->get();

        return view( 'prepod',[ 'prepods'=>$prepods, 'sh_pr'=>$short_pr]);
    }
    public function show($fio){

        $prepods = DB::table('tgputimetable')
            ->select('Преподаватель','Фамилия', 'Имя','Отчество' )
            ->where('Преподаватель', '=' ,$fio)
            ->distinct()->orderBy('Фамилия', 'asc')->get();

        $short_pr =DB::table('tgputimetable')
            ->select('Преподаватель', 'Фамилия')->where('Преподаватель', '!=' ,'')
            ->distinct()->orderBy('Преподаватель', 'asc')->get();
        return view( 'prepod',[ 'prepods'=>$prepods, 'sh_pr'=>$short_pr]);

    }

}
