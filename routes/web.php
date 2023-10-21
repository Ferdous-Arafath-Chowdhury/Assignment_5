<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProfileController;

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

Route::get('/', function () {
    return view('home');
});

Route::get('/experience' ,[ProfileController::class , 'experience'])->name('experience');
Route::get('/projects' ,[ProfileController::class , 'projects'])->name('projects');
Route::get('/projects/{id}' ,[ProfileController::class , 'project_details'])->name('projects_details');
