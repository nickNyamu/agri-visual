<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Population;
use App\Models\Region;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class PopulationController extends Controller
{
    //
    function create(Request $request){
        $request -> validate([
            'region_id' => 'required',
            'population' => 'required',
            'year' => 'required',
        ]);
        
        Population::create($request->all());

        return redirect()->route('user.addPopulation');
    }
    function showPopulation(){
        $populations = Population::leftJoin('regions', 'regions.id', '=', 'populations.region_id')
                                 ->select('populations.id','regions.county as County', 'populations.population', 'populations.year')
                                 ->get();
        

        
        
        //DB::table('populations')
                //        ->leftJoin('regions', 'regions.id', '=', 'populations.region_id')
                 //       ->select('regions.county as County', 'population', 'year')
                  //      ->get();
           

        return view('viewPopulation', compact('populations')) ->with('i', (request()->input('page', 1) -1) *5);
    }
    function edit($id){
        $population = Population::find($id);
        $regions = Region::all();
        $county = Population::where('populations.id', '=', $id)
                                ->leftJoin('regions', 'regions.id', '=', 'populations.region_id')
                                ->select('regions.county')
                                ->get();
       
        return view('editPopulation', compact('population', 'regions', 'county'));
    }
    
    function update(Request $request){
        $population = Population::find($request->id);

        $population->name = $request->region_id;
        $population->description = $request->population;
        $population->category = $request->year;
        $population->save();

        return redirect()->route('user.viewPopulation');
    }
    function delete($id){
        $population = Population::find($id);
        $population->delete();
        return redirect()->route('user.viewPopulation');
    }
    function pullRegion(){
        $regions = Region::all();

        return view('population', compact('regions'));
    }
}
