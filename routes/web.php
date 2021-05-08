<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Student_C;
use App\Http\Controllers\Marks_C;

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
    return view('welcome');
});
Route::get('/student/entry', [Student_C::class, 'enter']);
Route::get('/student/delete/{id}', [Student_C::class, 'delete_user']);
Route::get('/student/edit/{id}', [Student_C::class, 'edit']);
Route::get('/student/view', [Student_C::class, 'student_view']);
Route::post('/student/insert', [Student_C::class, 'create']);
Route::post('/student/update', [Student_C::class, 'update']);
Route::post('/marks/insert', [Marks_C::class, 'create']);
Route::get('/marks/entry', [Marks_C::class, 'mark_enter']);
Route::get('/marks/view', [Marks_C::class, 'marks']);
Route::get('/mark/delete/{id}', [Marks_C::class, 'delete_mark']);
Route::get('/mark/edit/{id}', [Marks_C::class, 'edit']);
Route::post('/mark/update', [Marks_C::class, 'update']);


