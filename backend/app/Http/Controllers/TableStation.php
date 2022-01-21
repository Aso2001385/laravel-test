<?php

namespace App\Http\Controllers;
use App\Services\TableStationLogic as Logic;
use Illuminate\Support\Facades\Schema;
use Illuminate\Http\Request;

class TableStation extends Controller
{


    public function index()
    {

        $tables = [ 'movies' , 'users' ];

        $datas = Logic::get_base_list($tables);

        return view('table_station.index')->with(['datas' => $datas]);

    }

    public function detail(Request $request)
    {

        $table = $request['table'];

        $datas = Logic::get_table_List($table);

        return view('table_station.detail')->with(['datas' => $datas,'table' => $table]);

    }

    public function record(Request $request){
        
        $table = $request['table'];

        $datas = Logic::get_record($table,$request['id']);

        return view('table_station.record')->with(['datas' => $datas,'table' => $table]);
    }
    
}
