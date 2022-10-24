<?php

use App\Http\Controllers\MailController;
Route::get('mail/test', [MailController::class, 'test']);

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
Log::info('Loading welcome page');
    return view('welcome');
});

use Illuminate\Support\Facades\Log;
 
Route::get('/', function () {
   Log::info('Loading welcome page');
   return view('welcome');
});
