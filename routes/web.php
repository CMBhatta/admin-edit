<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AboutController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[FrontendController::class,'index']);
Route::get('/service',[FrontendController::class,'service']);
Route::get('/about',[FrontendController::class,'about']);
Route::get('/project',[FrontendController::class,'project']);
Route::get('/testimonial',[FrontendController::class,'testimonial']);
Route::get('/contact',[FrontendController::class,'contact']);
Route::post('/contact',[FrontendController::class,'submitForm'])->name('contact');
Route::get('/login',[FrontendController::class, 'showLogin'])->name('login');
Route::post('/login',[FrontendController::class,'login']);

Route::get('/dashboard',[FrontendController::class, 'dashboard'])->name('dashboard');
Route::post('/logout',[FrontendController::class,'logout']);

// Route::resource('services', ServiceController::class);
// Route::get('/teams', function () {
//     return "Hello, this is a simple route !";
// })->name('teams');
Route::get('/teams',[ServiceController::class,'homeService'])->name('teams.home');
Route::get('/teams/create',[ServiceController::class,'create'])->name('teams.create');
Route::post('/teams/store',[ServiceController::class,'store'])->name('teams.store');
Route::get('/teams/{id}edit',[ServiceController::class,'edit'])->name('teams.edit');
Route::put('/teams/{id}/update',[ServiceController::class,'update'])->name('teams.update');
Route::delete('/teams/{id}/delete',[ServiceController::class,'delete'])->name('teams.delete');

Route::get('/aboutus',[AboutController::class,'index'])->name('aboutus.index');
Route::get('/aboutus/create',[AboutController::class,'create'])->name('aboutus.create');
Route::post('/aboutus/store',[AboutController::class,'store'])->name('aboutus.store');
Route::get('/aboutus/{id}edit',[AboutController::class,'edit'])->name('aboutus.edit');
Route::put('/aboutus/{id}update',[AboutController::class,'update'])->name('aboutus.update');
Route::delete('/aboutus/{id}delete',[AboutController::class,'delete'])->name('aboutus.delete');




