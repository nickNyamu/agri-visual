<?php

namespace App\Http\Controllers;

use App\Models\Production;
use Illuminate\Http\Request;
use App\Models\Produce;
use App\Models\Region;
use App\Models\User;
use App\Models\Population;
use Illuminate\Support\Facades\DB;

use App\Charts\ProductionChart;
use App\Charts\usersChart;

class dashboardController extends Controller
{
    //
    function index(){
       
        $year1Sum = DB::table("populations")->where("year",">=","2019-1-1")->where("year","<=","2019-12-31")->sum("population");
        $year2Sum = DB::table("populations")->where("year",">=","2020-1-1")->where("year","<=","2020-12-31")->sum("population");
        $year3Sum = DB::table("populations")->where("year",">=","2021-1-1")->where("year","<=","2021-12-31")->sum("population");
        $year4Sum = DB::table("populations")->where("year",">=","2022-1-1")->where("year","<=","2022-12-31")->sum("population");

        $chart = new ProductionChart;
        $chart->labels(['2019', '2020', '2021', '2022']);
        $chart->dataset('Year', 'bar', [$year1Sum, $year2Sum, $year3Sum, $year4Sum])->backgroundColor('#FF6384');


        $managers = User::where('role','=','Manager')->count();
        $admins = User::where('role','=','Admin')->count();
        $county = Region::count();
        //Pie Chart
        $chart2 = new usersChart;
        $chart2->labels(['Admin','Manager']);
        $chart2->dataset('Year', 'pie', [$admins, $managers])->backgroundColor(["#FF6384", "#36A2EB"]);

        $users = User::All()->count();
        
        $produce = Produce::All()->count();
        return view('dashboard', compact('chart','chart2','users','produce','county'));
    }
}
