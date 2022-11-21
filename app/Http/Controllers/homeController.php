<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Produce;
use App\Models\Production;
use App\Models\Region;
use App\Charts\homeChart;
use Illuminate\Support\Facades\DB;

class homeController extends Controller
{
    //
    function produces(){

        $produces = Produce::all();
        return view('homeProduces', compact('produces')) ->with('i', (request()->input('page', 1) -1) *5);
    }
    function productions(){

        $produces = Produce::All();


        return view('homeProduction', compact('produces'))->with('i', (request()->input('page', 1) -1) *5);
    }

    function detailedProduction($id){
        $produce = Produce::find($id);
        $productions23 = Production::All()->where('produce_id', '=', $id)
        ->where("year",">=","2023-1-1")->where("year","<=","2023-12-31")->sum('quantity');
        $productions22 = Production::All()->where('produce_id', '=', $id)
        ->where("year",">=","2022-1-1")->where("year","<=","2022-12-31")->sum('quantity');
        $productions21 = Production::All()->where('produce_id', '=', $id)
        ->where("year",">=","2021-1-1")->where("year","<=","2021-12-31")->sum('quantity');
        $productions20 = Production::All()->where('produce_id', '=', $id)
        ->where("year",">=","2020-1-1")->where("year","<=","2020-12-31")->sum('quantity');
        $productions19 = Production::All()->where('produce_id', '=', $id)
        ->where("year",">=","2019-1-1")->where("year","<=","2019-12-31")->sum('quantity');

        $year1Sum = DB::table("populations")->where("year",">=","2019-1-1")->where("year","<=","2019-12-31")->sum("population");
        $year2Sum = DB::table("populations")->where("year",">=","2020-1-1")->where("year","<=","2020-12-31")->sum("population");
        $year3Sum = DB::table("populations")->where("year",">=","2021-1-1")->where("year","<=","2021-12-31")->sum("population");
        $year4Sum = DB::table("populations")->where("year",">=","2022-1-1")->where("year","<=","2022-12-31")->sum("population");
 
        $chart4 = new homeChart;
        $chart4->labels(['2019', '2020', '2021', '2022', '2023']);
        $chart4->dataset('Year', 'bar', [$productions19, $productions20, $productions21, $productions22, $productions23])->backgroundColor('#FF6384');

        return view('homeReports', compact('productions22', 'productions21', 'productions20',
         'productions19','year1Sum', 'year2Sum','year3Sum','year4Sum', 'produce','chart4'));
    }
    function reports(){

        return view('homeReports');
    }

    
    function regions(){
        $regions = Region::All();


        return view('homeRegions', compact('regions'))->with('i', (request()->input('page', 1) -1) *5);
    } 
    function regionss($id){
        $region = Region::find($id);
        
        // $test1  = DB::table('productions')
        // ->where('region_id', '=', $id)->where("year",">=","2022-1-1")->where("year","<=","2022-12-31")
        // ->select('productions.*','regions.county as Region',  'produces.name as Produce')
        // ->leftjoin('regions', 'regions.id', '=', 'productions.region_id')
        // ->leftjoin('produces', 'produces.id', '=', 'productions.produce_id')
        // ->get(); 
        // return $test1;

        $county23  = DB::table('productions')
        ->where('region_id', '=', $id)->where("year",">=","2023-1-1")->where("year","<=","2023-12-31")
        ->select('productions.*','regions.county as Region',  'produces.name as Produce')
        ->leftjoin('regions', 'regions.id', '=', 'productions.region_id')
        ->leftjoin('produces', 'produces.id', '=', 'productions.produce_id')
        //->groupBy('produce_id')
        ->sum('quantity'); 

        $county22  = DB::table('productions')
        ->where('region_id', '=', $id)->where("year",">=","2022-1-1")->where("year","<=","2022-12-31")
        ->select('productions.*','regions.county as Region',  'produces.name as Produce')
        ->leftjoin('regions', 'regions.id', '=', 'productions.region_id')
        ->leftjoin('produces', 'produces.id', '=', 'productions.produce_id')
        //->groupBy('produce_id')
        ->sum('quantity'); 
        
        $county21  = DB::table('productions')
        ->where('region_id', '=', $id)->where("year",">=","2021-1-1")->where("year","<=","2021-12-31")
        ->select('productions.*','regions.county as Region',  'produces.name as Produce')
        ->leftjoin('regions', 'regions.id', '=', 'productions.region_id')
        ->leftjoin('produces', 'produces.id', '=', 'productions.produce_id')
        //->groupBy('produce_id')
        ->sum('quantity'); 
        
        $county20  = DB::table('productions')
        ->where('region_id', '=', $id)->where("year",">=","2020-1-1")->where("year","<=","2020-12-31")
        ->select('productions.*','regions.county as Region',  'produces.name as Produce')
        ->leftjoin('regions', 'regions.id', '=', 'productions.region_id')
        ->leftjoin('produces', 'produces.id', '=', 'productions.produce_id')
        //->groupBy('produce_id')
        ->sum('quantity'); 
        
        $county19  = DB::table('productions')
        ->where('region_id', '=', $id)->where("year",">=","2019-1-1")->where("year","<=","2019-12-31")
        ->select('productions.*','regions.county as Region',  'produces.name as Produce')
        ->leftjoin('regions', 'regions.id', '=', 'productions.region_id')
        ->leftjoin('produces', 'produces.id', '=', 'productions.produce_id')
        //->groupBy('produce_id')
        ->sum('quantity'); 
        
        $chart5 = new homeChart;
        $chart5->labels(['2019', '2020', '2021', '2022', '2023']);
        $chart5->dataset('Production', 'bar', [$county19, $county20, $county21, $county22, $county23])->backgroundColor('#FF6384');
        return view('hRegion',compact('region','county23','county22','county21','county20','county19','chart5'));
    }
    function homeregion(){
        return view('hRegion');
    }
}
