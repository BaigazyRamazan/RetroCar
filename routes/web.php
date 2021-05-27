<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FeedbackController;

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

Route::redirect('','en/index');

Route::group(['prefix' => '{language}'],function(){
    Route::view('index','index')->name('index');
    Route::view('model','model')->name('model');
    Route::view('contact','contact')->name('contact');

    Route::post('feedback',[FeedbackController::class,'store'])->name('feedback');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
