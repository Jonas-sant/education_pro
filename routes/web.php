<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClassesController;
use App\Http\Controllers\WorkshopController;
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

Route::get('/', [WorkshopController::class,'index'])->middleware(['auth'])->name('index');
Route::get('/dashboard/v={id}',[WorkshopController::class, 'classVideo'])->middleware(['auth'])->name('class.video');


Route::post('/createWorkshop',[WorkshopController::class,'insert'])->name('insert.workshop');
Route::delete('/deleteWorkshop/{id}',[WorkshopController::class,'delete'])->name('delete.workshop');
Route::get('/editWorkshop/{id}',[WorkshopController::class,'edit'])->name('edit.workshop');
Route::put('/updateWorkshop/{id}',[WorkshopController::class,'update'])->name('update.workshop');

Route::post('/createClass',[ClassesController::class,'insert'])->name('create.class');
Route::delete('/deleteClass/{id}',[ClassesController::class,'delete'])->name('delete.class');
Route::get('/editClass/{id}',[ClassesController::class,'edit'])->name('edit.class');
Route::put('/updateWorkshop/{id}',[ClassesController::class,'update'])->name('update.class');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
