<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewController;
use App\Http\Controllers\Admin\NewController as AdminNewController;
use App\Http\Controllers\СategoryController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\RegistretionController;
use App\Http\Controllers\EddNewsController;
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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function(){
    Route::resource('/news',AdminNewController::class );
});
//?categoryId={categoryId}
Route::get('/news', [ NewController::class, 'index'])
    ->name('news.index');
Route::get('/news/{id}', [ NewController::class, 'show'])
    ->where( 'id', '\d+')
    ->name('news.show');

Route::get('/category', [ СategoryController::class, 'index'])
    ->name('category.index');

Route::get('/', [ MainController::class, 'index'])
    ->name('main');

Route::get('/registretion', [ RegistretionController::class, 'index'])
    ->name('main');

Route::get('/eddNews', [ EddNewsController::class, 'index'])
    ->name('main');

