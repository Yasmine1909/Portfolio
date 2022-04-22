<?php

use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\AwardController;
use App\Http\Controllers\ShowController;
use Illuminate\Support\Facades\Auth;
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

//Cette ligne est pour pouvoir sécuriser le site 
//on ne peut pas y accéder si on n'est pas connecté
Route::group(['middleware'=>'auth'],function(){

    
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

//Profile
Route::get('admin.create_profile',[ProfileController::class,'create_profile']);
Route::post('admin.store_profile',[ProfileController::class,'store_profile']);
Route::delete('admin.destroy_profile/{id}',[ProfileController::class,'destroy_profile']);
Route::get('admin.show_profile/{id}',[ProfileController::class,'show_profile']);
Route::put('admin.update_profile/{id}',[ProfileController::class,'update_profile']);

});
//Pour Accéder au Register ou Login il faut mettre
//admin_khatib_yasmine_123/login pour y accéder
//on met un préfixe spécifique et long comme ça
//Personne ne pourra s'autentifier

Route::group(['prefix'=>'admin_khatib_yasmine_123'],function(){
    
    Auth::routes();
    
});


