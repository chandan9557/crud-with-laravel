<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[StudentController::class,'index'])->name('/index');
Route::post('/',[StudentController::class,'create']);
Route::get('/edit/{id}',[StudentController::class,'edit']);
Route::put('/edit/{id}',[StudentController::class,'update']);
Route::get('/delete/{id}',[StudentController::class,'destroy']);