<?php

namespace App\Http\Controllers;

use App\Models\Production;
use Illuminate\Http\Request;
use App\Models\Produce;
use App\Models\Region;
use Illuminate\Support\Facades\DB;

class productionController extends Controller
{   
    function pullData(){
        $produces = Produce::all();
        $regions = Region::all();
        return view('production', compact('produces', 'regions'));
    }

    function create(Request $request){     
        $request -> validate([
            'produce_id' => 'required',
            'region_id' => 'required',
            'quantity' => 'required',
            'units' => 'required',
            'year' => 'required',
        ]);
        Production::create($request->all()); 
       
        return redirect()->back()->with('success','Production Level added successfully!');
    }

    function viewProduction(){
        $productions = DB::table('productions')
                     ->select('productions.*', 'produces.name as Produce','regions.county as Region')
                    ->leftjoin('produces', 'produces.id', '=', 'productions.produce_id')
                    ->leftjoin('regions', 'regions.id', '=', 'productions.region_id')
                    ->get(); 
      
        return view('viewProduction', compact('productions')) ->with('i', (request()->input('page', 1) -1) *5);
        /*
          $productions = DB::table('productions')
                    ->join('produces', 'produces.id', '=', 'productions.produce_id')
                    ->join('regions', 'regions.id', '=', 'productions.region_id')
                    ->select('produces.name as Produce', 'regions.county as Region', 'productions.quantity as Quantity', 'productions.units as Unit', 'productions.year as Year')
                    ->get(); 
        
        return view('viewProduction', compact('productions')) ->with('i', (request()->input('page', 1) -1) *5);*/
    } 

      function delete($id){
        $production = Production::find($id);
        $production->delete();
        return redirect()->route('user.viewProduction', compact('production'));
    }
}
