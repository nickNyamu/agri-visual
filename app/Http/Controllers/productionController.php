<?php

namespace App\Http\Controllers;

use App\Models\Production;
use Illuminate\Http\Request;
use App\Models\Region;
use Illuminate\Support\Facades\DB;

class productionController extends Controller
{   
    function create(Request $request){
        $regions = Region::all();
        
        $request -> validate([
            'produce_id' => 'required',
            'region_id' => 'required',
            'quantity' => 'required',
            'units' => 'required',
            'year' => 'required',
        ]);
        
        Population::create($request->all());

       

        return redirect()->route('user.addProduction', compact('regions'));
    }

    function viewProduction(){
        $productions = DB::table('productions')
                    ->join('produces', 'produces.id', '=', 'productions.produce_id')
                    ->join('regions', 'regions.id', '=', 'productions.region_id')
                    ->select('regions.county as Region', 'produces.name as Produce', 'productions.quantity as Quantity', 'productions.units as Unit', 'productions.year as Year')
                    ->get();
        
    
        return $productions;

        return view('viewProduction');
    } 
}
