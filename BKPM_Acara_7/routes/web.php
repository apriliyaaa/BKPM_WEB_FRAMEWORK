<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::group(['namespace' => 'Frontend']); function()
{
    Route::resource('home', 'HomeController');
};