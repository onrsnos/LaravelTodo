<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnalysisController;
use App\Http\Controllers\GorevlerController;




Route::get('/', [AnalysisController::class, 'index']);
Route::get('/index_data', [AnalysisController::class, 'index_data']);

Route::get('/gorevler' , [GorevlerController::class, 'index']);
Route::get('/gorevler/create' , [GorevlerController::class, 'create']);
Route::POST('/gorevler/store' , [GorevlerController::class, 'store']);
Route::get('/gorevler/edit/{id}' , [GorevlerController::class, 'edit']);
Route::POST('/gorevler/update' , [GorevlerController::class, 'update']);
Route::get('/gorevler/destroy/{id}' , [GorevlerController::class, 'destroy']);
Route::get('/gorevler/index_data', [GorevlerController::class, 'index_data']);


// Route::get('/', function () {
//     return view('welcome');
// });



