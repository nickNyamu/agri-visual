<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\produceController;
use App\Http\Controllers\regionController;
use App\Http\Controllers\populationController;
use App\Http\Controllers\productionController;
use App\Http\Controllers\reportsController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\homeController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/master', function () {
    return view('master');
});*/
Route::get('/', function () {
    return view('home');
});

Route::get('hProduces',[homeController::class, 'produces'])->name('hProduces');
Route::get('hProduction',[homeController::class, 'productions'])->name('hProduction');
Route::get('hProduction/{id}',[homeController::class, 'detailedProduction'])->name('hProductionn');
Route::get('hRegions',[homeController::class, 'regions'])->name('hRegions');
Route::get('hRegions/{id}',[homeController::class, 'regionss'])->name('hRegionss');
Route::get('hregion',[homeController::class, 'homeregion'])->name('hregion');
Route::get('hReports',[homeController::class, 'reports'])->name('hReports');



Route::prefix('user')->name('user.')->group(function(){

    Route::middleware(['guest:web', 'PreventBackHistory'])->group(function(){
        Route::view('/login', 'layout.login')->name('login');
        Route::post('/check', [UserController::class, 'check'])->name('check');

    });

    Route::middleware(['auth:web', 'PreventBackHistory'])->group(function(){
        //Route::view('/dashboard', 'dashboard')->name('dashboard');
        Route::post('/logout', [UserController::class, 'logout'])->name('logout');
        Route::get('/home', [dashboardController::class, 'index'])->name('home');
        Route::view('/adduser', 'users')->name('adduser');
        Route::view('/addproduce', 'produce')->name('addproduce');
        Route::view('/analytics', 'analytics')->name('analytics');
        Route::get('/performance', [produceController::class, 'multiply'])->name('performance');
        Route::get('/performance1', [produceController::class, 'multiply1'])->name('performance1');
        Route::get('/performance2', [produceController::class, 'multiply2'])->name('performance2');
        Route::get('/performance3', [produceController::class, 'multiply3'])->name('performance3');
        Route::get('/detailedProduction', [produceController::class, 'produces'])->name('detailedProduction');
        Route::get('/detailedProduction/{id}', [produceController::class, 'detailedProduction'])->name('detailedProductionn');
        Route::get('/updateProduction', [produceController::class, 'updateProduction'])->name('updateProduction');
        Route::get('/viewUser', [UserController::class, 'showUsers'])->name('viewUser');
        Route::post('/createUser', [UserController::class, 'create'])->name('createUser');
        Route::view('/addregion', 'region')->name('addregion');
        Route::get('/addPopulation', [regionController::class, 'pullRegion'])->name('addPopulation');
        Route::get('/edituser/{id}', [UserController::class, 'edit'])->name('edituser');
        Route::post('/updateuser', [UserController::class, 'update'])->name('updateuser');
        Route::get('/deleteuser/{id}', [UserController::class, 'delete'])->name('deleteuser');
        Route::post('/createProduce', [produceController::class, 'create'])->name('createProduce');
        Route::get('/viewProduce', [produceController::class, 'showProduces'])->name('viewProduce');
        Route::get('/editProduce/{id}', [produceController::class, 'edit'])->name('editProduce');
        Route::post('/updateProduce', [produceController::class, 'update'])->name('updateProduce');
        Route::get('/deleteProduce/{id}', [produceController::class, 'delete'])->name('deleteProduce');
        Route::post('/createRegion', [regionController::class, 'create'])->name('createRegion');
        Route::get('/editRegion/{id}', [regionController::class, 'edit'])->name('editRegion');
        Route::get('/viewRegion', [regionController::class, 'showRegion'])->name('viewRegion');
        Route::post('/updateRegion', [regionController::class, 'update'])->name('updateRegion');
        Route::get('/deleteRegion/{id}', [regionController::class, 'delete'])->name('deleteRegion');
        Route::post('/createPopulation', [populationController::class, 'create'])->name('createPopulation');
        Route::get('/viewPopulation', [populationController::class, 'showPopulation'])->name('viewPopulation');
        Route::get('/populationReport', [reportsController::class, 'populationReports'])->name('populationReport');
        Route::get('/editPopulation/{id}', [populationController::class, 'edit'])->name('editPopulation');
        Route::post('/updatePopulation', [populationController::class, 'update'])->name('updatePopulation');
        Route::get('/deletePopulation/{id}', [populationController::class, 'delete'])->name('deletePopulation');
        Route::get('/addProduction',  [productionController::class, 'pullData'])->name('addProduction');
        Route::post('/createProduction', [productionController::class, 'create'])->name('createProduction');
        Route::get('/viewProduction', [productionController::class, 'viewProduction'])->name('viewProduction');
        Route::get('/deleteProduction/{id}', [productionController::class, 'delete'])->name('deleteProduction');
        Route::get('/reports', [reportsController::class, 'reports'])->name('reports');


    });
});
