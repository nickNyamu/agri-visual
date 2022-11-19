<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Produce;
use App\Models\Production;
use App\Models\Region;
use Illuminate\Support\Facades\DB;

class homeController extends Controller
{
    //
    function produces(){

        $produces = Produce::all();
        return view('homeProduces', compact('produces')) ->with('i', (request()->input('page', 1) -1) *5);
    }
    function productions(){

        return view('homeProduction');
    }
    function reports(){

        return view('homeReports');
    }
}
