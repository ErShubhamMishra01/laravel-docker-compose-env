<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\UserController;


Route::get("/demo",[DemoController::class,'index']);

Route::resource("/user",UserController::class);

Route::get('/test/{name}/{age?}',function($name,$age=5){
    echo "Hello ".$name." your age ".$age."<br/>";
    $data=compact('name','age');
    print_r($data);
    return view('hello')->with($data);
});

Route::get('/hi',function(){
    return view("hello");
});

Route::get('/home',function(){
    return view("home");
});
Route::get('/about',function(){
    return view("about");
});
