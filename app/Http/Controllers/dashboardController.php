<?php

namespace App\Http\Controllers;

use App\Models\Production;
use Illuminate\Http\Request;
use App\Models\Produce;
use App\Models\Region;
use App\Models\Population;
use Illuminate\Support\Facades\DB;

use App\Charts\ProductionChart;

class dashboardController extends Controller
{
    //
    function index(){
       
        $year1Sum = DB::table("populations")->where("year",">=","2019-1-1")->where("year","<=","2019-12-31")->sum("population");
        $year2Sum = DB::table("populations")->where("year",">=","2020-1-1")->where("year","<=","2020-12-31")->sum("population");
        $year3Sum = DB::table("populations")->where("year",">=","2021-1-1")->where("year","<=","2021-12-31")->sum("population");
        $year4Sum = DB::table("populations")->where("year",">=","2022-1-1")->where("year","<=","2022-12-31")->sum("population");
        //$year1Sum = Population::where("year", "=" ,"2019.%.%")->sum("population");
        //return $year1Sum;

        $chart = new ProductionChart;
        $chart->labels(['2019', '2020', '2021', '2022']);
        $chart->dataset('Year', 'bar', [$year1Sum, $year2Sum, $year3Sum, $year4Sum]);

        //Table
        

        return view('dashboard', compact('chart'));
    }
}
