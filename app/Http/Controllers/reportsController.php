<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Yajra\Datatables\Facades\Datatables;

class reportsController extends Controller
{
    //
    function reports(Request $request){
        if($request->ajax()){
            $reports = DB::table('productions')
            ->select('productions.*', 'produces.name as Produce','regions.county as Region')
            ->leftjoin('produces', 'produces.id', '=', 'productions.produce_id')
            ->leftjoin('regions', 'regions.id', '=', 'productions.region_id');
            return datatables($reports)->make(true);
        }
        
        return view('reports');
    }
}
