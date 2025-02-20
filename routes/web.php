<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/home', 'home.index')->name('home');
Route::view('/service', 'service.index')->name('service');
Route::view('/team', 'team.index')->name('team');
Route::view('/project', 'project.index')->name('project');