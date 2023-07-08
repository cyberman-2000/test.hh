<?php

use App\Http\Controllers\HomeController;
use App\Notifications\Telegram;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Notification;



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

Route::get('/',[HomeController::class,'index']);
Route::post('/store',[HomeController::class,'store'])->name('store');
Route::get('/orders',[HomeController::class,'orders']);
Route::get('/getpdf',[HomeController::class,'getpdf']);
Route::get('sendpdf',[HomeController::class,'sendpdf']);
// 913356860 is your Telegram id
Route::get('/tg',function (){
    Notification::route('telegram', '913356860')
        ->notify(new Telegram);
})->name('send_to_telegram');


