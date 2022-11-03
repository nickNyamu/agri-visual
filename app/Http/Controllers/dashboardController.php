<?php

namespace App\Http\Controllers;

use App\Models\Production;
use Illuminate\Http\Request;
use App\Models\Produce;
use App\Models\Region;
use Illuminate\Support\Facades\DB;

use App\Charts\ProductionChart;

class dashboardController extends Controller
{
    //
    function index(){
       
        $chart = new ProductionChart;
        $chart->labels(['One', 'Two', 'Three', 'Four']);
        $chart->dataset('My dataset', 'line', [1, 2, 3, 4]);
        $chart->dataset('My dataset 2', 'line', [4, 3, 2, 1]);



        return view('dashboard', compact('chart'));
    }
}
