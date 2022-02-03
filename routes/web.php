<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

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
    //return view('welcome');
    //$data = ['name'=>'Rohit Namdeo'];
    // Mail::send([], [], function($msg){
    //     $msg->to('namdeo.madhi50@gmail.com', 'Rohit Namdeo')
    //         ->subject('Testing mail')
    //         ->setBody('Hi, this is working fine');
    // });

    Mail::to("namdeo.madhi99@gmail.com")->send(new SendMail());
    

    echo "mail sent";
});
