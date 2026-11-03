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

Route::get('/bots',function(){
    return view('bot.main');
})->name('bot.main');

Route::get('/builder',function(){
    return view('builder.main');
})->name('builder.main');

Route::get('/basix',function(){
    return view('basix.main');
})->name('basix.main');

Route::get('/basix/dash',function(){
    return view('basix.dash');
})->name('basix.dash');

Route::get('/ai',function(){
    return view('AI.main');
})->name('AI.main');

Route::get('/ai/dash',function(){
    return view('AI.dash');
})->name('AI.dash');