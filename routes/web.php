<?php
use App\App\Users\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

Route::resource('users',UsersController::class);
//Route::resource('/crear',function (){
//    return view("create");
//});
Route::get('/crear',function (){
    return view("users.create");
});
