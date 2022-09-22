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
            'county' => 'required',
            'area' => 'required',
            'units' => 'required',
        ]);
        
        Region::create($request->all());

        return redirect()->route('user.addregion');
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

        $region->county = $request->name;
        $region->area = $request->area;
        $produce->save();

        return redirect()->route('');
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
