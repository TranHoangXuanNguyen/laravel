<?php

use App\Http\Controllers\ExampleController;
use App\Http\Controllers\CaculateController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\StudentController;




use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/caculate', function () {
    return view('caculate');
});

Route::post('/caculate', [CaculateController::class, 'caculate']);
Route::get('/blablabla', [ExampleController::class, 'index']);
Route::get('/blablabla1', [ExampleController::class, 'index2']);


Route::resource('blabla', PostController::class);

Route::get('/students', [StudentController::class, 'index']);
Route::post('/students', [StudentController::class, 'displayInfor']);
