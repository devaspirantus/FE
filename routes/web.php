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

Route::get('/basic',function(){
    return view('basic.main');
});

Route::get('/basix',function(){
    return view('basix.main');
})->name('basix.main');

Route::get('/ai',function(){
    return view('AI.main');
})->name('AI.main');

Route::get('/ai/dash',function(){
    return view('AI.dash');
})->name('AI.dash');