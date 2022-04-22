<?php

use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\AwardController;
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

//Experience
Route::get('admin.create_experience',[ExperienceController::class,'create_experience']);
Route::post('store_experience',[ExperienceController::class,'store_experience']);
Route::delete('destroy_experience/{id}',[ExperienceController::class,'destroy_experience']);
Route::get('admin.show_experience/{id}',[ExperienceController::class,'show_experience']);
Route::put('admin.update_experience/{id}',[ExperienceController::class,'update_experience']);


//Education
Route::get('admin.create_education',[EducationController::class,'create_education']);
Route::post('admin.store_education',[EducationController::class,'store_education']);
Route::delete('admin.destroy_education/{id}',[EducationController::class,'destroy_education']);
Route::get('admin.show_education/{id}',[EducationController::class,'show_education']);
Route::put('admin.update_education/{id}',[EducationController::class,'update_education']);

//Award
Route::get('admin.create_award',[AwardController::class,'create_award']);
Route::post('admin.store_award',[AwardController::class,'store_award']);
Route::delete('admin.destroy_award/{id}',[AwardController::class,'destroy_award']);
Route::get('admin.show_award/{id}',[AwardController::class,'show_award']);
Route::put('admin.update_award/{id}',[AwardController::class,'update_award']);