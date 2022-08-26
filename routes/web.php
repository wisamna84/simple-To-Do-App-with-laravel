<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\todoCOntroller;

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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/',[todoCOntroller::class, 'index']);
Route::get('/add-task',[todoCOntroller::class, 'create']);
Route::post('/store-task',[todoCOntroller::class, 'store']);
Route::get('edit-task/{id}',[todoCOntroller::class,'edit']);
Route::put('update-task/{id}',[todoCOntroller::class,'update']);
Route::delete('del-task/{id}',[todoCOntroller::class,'destroy']);

