<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produce;
use App\Models\Production;
use App\Models\Region;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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
    function producee(){

        $productions = DB::table('productions')
        ->select('productions.*', 'produces.name as Produce')
       ->leftjoin('produces', 'produces.id', '=', 'productions.produce_id')
       //->where('Produce', '=', 'Produce')->sum('quantity')
       ->get(); 
       //return $productions;
       
        return view('detailedProduction');
    }
}
