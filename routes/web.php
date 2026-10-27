<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin',function(){
    return view('admin.main');
});

Route::get('/his',function(){
    return view('his.main');
});

Route::get('/bot',function(){
    return view('bot.main');
});
