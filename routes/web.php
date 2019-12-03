<?php

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

use App\Facades\Postcards as PostcardsAlias;
use Illuminate\Support\Str;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pay',"PayOrderController@store");

Route::get('channels',"ChannelController@index");

Route::get('postcards' , function (){
    $postcardService = new \App\Services\PostcardSendingService('us' , 4 , 6);
    $postcardService->hello("hello world" , "zooeymoon1989@gmail.com");
});

Route::get('facade' , function (){
    PostcardsAlias::hello('hello from facade!','abc@123.com');
});

Route::get('macros' , function (){

    $a["foo"] ??= "delete";

//    dd(Str::partNumber(123456789));
    dd(Str::prefixNumber(123456789 , "FooBar-"));
});


Route::get('/pipeline','PipelineController@index');
