<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CLHGPDFController;

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

Route::get("/pdf",[CLHGPDFController::class,"showBanglaPdf"])->name("showBanglaPdf");


Route::get('/', function () {
    return view('welcome');
});
