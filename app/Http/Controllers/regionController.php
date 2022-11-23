<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Region;
use Illuminate\Support\Facades\Auth;

class regionController extends Controller
{
    //
    function create(Request $request){
        $request -> validate([
            'county' => 'required|unique:regions,county',
            'area' => 'required',
            'units' => 'required',
        ]);
        
        Region::create($request->all());

        return redirect()->back()->with('success','Region added successfully!');
    }
    function edit($id){
        $region = Region::find($id);
        return view('editregion', ['region' => $region]);
    }
    function showRegion(){
        $regions = Region::all();
        return view('viewRegion', compact('regions')) ->with('i', (request()->input('page', 1) -1) *5);
    }
    function update(Request $request){
        $region = Region::find($request->id);

        $region->county = $request->county;
        $region->area = $request->area;
        $region->save();

        return redirect()->route('user.viewRegion');
    }
    function delete($id){
        $region = Region::find($id);
        $region->delete();
        return redirect()->route('user.viewRegion');
    }
    function pullRegion(){
        $regions = Region::all();

        return view('population', compact('regions'));
    }
}
