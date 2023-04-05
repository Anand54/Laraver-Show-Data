<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\memberController; 
// use App\Http\Controllers\memberController is from memberController

Route::get('/', function () {
    return view('welcome');
});

Route::get('showMember',[memberController::class,'showList']);
