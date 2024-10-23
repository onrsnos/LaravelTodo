<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnalysisController;
use App\Http\Controllers\GorevlerController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;




Route::middleware('auth')->group(function () {
    Route::get('/', [AnalysisController::class, 'index'])->middleware('auth');

    Route::get('/index_data', [AnalysisController::class, 'index_data']);

    Route::get('/gorevler' , [GorevlerController::class, 'index']);
    Route::get('/gorevler/create' , [GorevlerController::class, 'create']);
    Route::POST('/gorevler/store' , [GorevlerController::class, 'store']);
    Route::get('/gorevler/edit/{id}' , [GorevlerController::class, 'edit']);
    Route::POST('/gorevler/update' , [GorevlerController::class, 'update']);
    Route::get('/gorevler/destroy/{id}' , [GorevlerController::class, 'destroy']);
    Route::get('/gorevler/index_data', [GorevlerController::class, 'index_data']);


    Route::get('/users' , [UserController::class, 'index']);
    Route::get('/users/create' , [UserController::class, 'create']);
    Route::POST('/users/store' , [UserController::class, 'store']);
    Route::get('/users/edit/{id}' , [UserController::class, 'edit']);
    Route::POST('/users/update' , [UserController::class, 'update']);
    Route::get('/users/destroy/{id}' , [UserController::class, 'destroy']);
    Route::get('/users/index_data', [UserController::class, 'index_data']);

});



// Route::get('/', function () {
//     return view('welcome');
// });




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
