<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produce;
use App\Models\Production;
use App\Models\Region;
use App\Models\Population;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Charts\detailedChart;

class produceController extends Controller
{
    //
    function create(Request $request){
        $request -> validate([
            'name' => 'required',
            'description' => 'required',
            'category' => 'required',
        ]);
        
        Produce::create($request->all());

        return redirect()->route('user.addproduce');
    }
    function showProduces(){
        $produces = Produce::all();
        return view('viewProduce', compact('produces')) ->with('i', (request()->input('page', 1) -1) *5);
    }
    function edit($id){
        $produce = Produce::find($id);
        return view('editProduce', ['produce' => $produce]);
    }
    function update(Request $request){
        $produce = Produce::find($request->id);

        $produce->name = $request->name;
        $produce->description = $request->description;
        $produce->category = $request->category;
        $produce->save();

        return redirect()->route('user.viewProduce');
    }
    function delete($id){
        $produce = Produce::find($id);
        $produce->delete();
        return redirect()->route('user.viewProduce');
    }

    function multiply(){
        $year1Sum = DB::table("populations")->where("year",">=","2019-1-1")->where("year","<=","2019-12-31")->sum("population");

        $produces = Produce::All();
            return view('performance', compact('year1Sum', 'produces'))->with('i', (request()->input('page', 1) -1) *5);
    }
    function multiply1(){
        $year2Sum = DB::table("populations")->where("year",">=","2020-1-1")->where("year","<=","2020-12-31")->sum("population");
        
        $produces = Produce::All();
            return view('performance1', compact('year2Sum','produces'))->with('i', (request()->input('page', 1) -1) *5);
    }
    function multiply2(){
        $year3Sum = DB::table("populations")->where("year",">=","2021-1-1")->where("year","<=","2021-12-31")->sum("population");

        $produces = Produce::All();

            return view('performance2', compact('year3Sum','produces'))->with('i', (request()->input('page', 1) -1) *5);
    }
    function multiply3(){
        $year4Sum = DB::table("populations")->where("year",">=","2022-1-1")->where("year","<=","2022-12-31")->sum("population");

        $produces = Produce::All();
            return view('performance3', compact('year4Sum','produces'))->with('i', (request()->input('page', 1) -1) *5);
    }
    // function producee(){

    // //     $productions = DB::table('productions')
    // //     ->leftjoin('produces', 'produces.id', '=', 'productions.produce_id')
    // //     ->select('productions.*', 'produces.name as Produce')
    // //     ->groupBy('productions.produce_id')
    // //    //->where('produces.name', '=', 'produces.name')
    // //    ->get(); 
    // //    return $productions;

    //     $productions = DB::table('productions')
    //     ->select('productions.*', 'produces.name as Produce')//, DB::raw('GROUP_CONCAT(productions.quantity SEPARATOR ',') as "grand_quantity" '))
    //     ->leftjoin('produces', 'produces.id', '=', 'productions.produce_id')
        
    //     ->get()->groupBy('productions.produce_id');

    //      return $productions;
    //     return view('detailedProduction');
    // }
    function produces(){
        $produces = Produce::All();


        return view('detailedProduction', compact('produces'))->with('i', (request()->input('page', 1) -1) *5);
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
 
        $chart3 = new detailedChart;
        $chart3->labels(['2019', '2020', '2021', '2022', '2023']);
        $chart3->dataset('Production', 'bar', [$productions19, $productions20, $productions21, $productions22, $productions23])->backgroundColor('#FF6384');

        return view('detailedData', compact('productions22', 'productions21', 'productions20',
         'productions19','year1Sum', 'year2Sum','year3Sum','year4Sum', 'produce','chart3'));
    }

}


// SELECT GROUP_CONCAT(productions.quantity SEPARATOR ',') AS grand_quantity, productions.produce_id, produces.name FROM `productions` LEFT JOIN produces ON (produces.id = productions.produce_id) GROUP BY (productions.produce_id);
// $stuff = explode(",", $grand_quantity);
// $array_sum($grand_quantity)