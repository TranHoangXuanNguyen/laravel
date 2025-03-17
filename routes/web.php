<?php
use Illuminate\Support\Facades\Route;


use App\Http\Controllers\CreatetableController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\DatabaseController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ExampleController;
use App\Http\Controllers\CaculateController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TestApiController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShopeeController;
use App\Http\Controllers\PageController;



Route::get('/', function () {
    return view('welcome');
})->name('welcome');
Route::get('/caculate', function () {
    return view('caculate');
});
Route::post('/caculate', [CaculateController::class, 'caculate']);
Route::get('/blablabla', [ExampleController::class, 'index']);
Route::get('/blablabla1', [ExampleController::class, 'index2']);
Route::get('/api', [TestApiController::class, 'index']);
Route::resource('blabla', PostController::class);
Route::get('/students', [StudentController::class, 'index']);
Route::post('/students', [StudentController::class, 'storeData']);
Route::resource('products', ProductController::class);
Route::apiResource('product', ProductsController::class);

Route::group(['prefix' => 'app'], function () {
    Route::get('/', [AppController::class, 'index']);

});

Route::group(['prefix' => 'shoppe'], function () {
    Route::get('/', [ShopeeController::class, 'index']);
});

Route::get('/init', function (){
    Schema::create('blabla',function ($table){

    });
});

Route::get('/initDb', [DatabaseController::class, 'CreateDatabase']);


Route::get('/createtable',[CreatetableController::class,'table']);

Route::get('/trangchu',[PageController::class,'index']);





Route::get('/type/{id}', [PageController::class, 'getLoaiSp']);
Route::get('/type/{id}', [PageController::class, 'getLoaiSp']);

Route::get('/contract',[PageController::class,'getContract']);
Route::get('/about',[PageController::class,'getAbout']);

Route::get('/detail/{id}',[PageController::class,'getDetail']);


Route::get('/admin', [PageController::class, 'getIndexAdmin']);
Route::get('/admin-add-form', [PageController::class, 'getAdminAdd'])->name('add-product');
Route::post('/admin-add-form', [PageController::class, 'postAdmin']);
Route::get('/admin-edit-form/{id}', [PageController::class, 'getAdminEdit']);
Route::post('admin-edit', [PageController::class, 'postAdminEdit'])->name('admin.edit');
Route::post('/admin-delete/{id}', [PageController::class, 'postAdminDelete']);

Route::get('/about', function(){
    return view('pages.about');
});
Route::get('/contact', function(){
    return view('pages.lienhe');
});
