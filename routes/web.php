<?php

use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\ShowController;
use Illuminate\Support\Facades\Route;

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


Route::get('/',[ShowController::class,'show']);


Route::get('create_experience',[ExperienceController::class,'create_experience']);
Route::post('store_experience',[ExperienceController::class,'store_experience']);
Route::delete('destroy_experience/{id}',[ExperienceController::class,'destroy_experience']);