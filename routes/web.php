<?php

use App\Http\Controllers\Web\PageController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/', [PageController::class,'welcome'])->name(name:'welcome');

Route::group(['middleware'=>['auth:sanctum', 'verified']],function(){
  Route::get('/dashboard',[PageController::class,'dashboard'])->name(name:'dashboard');
  Route::get('/chat',[PageController::class,'chat'])->name(name:'chat');
});
