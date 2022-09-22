<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produce;
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
}
