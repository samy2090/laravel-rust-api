<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Auth::routes();

Route::resource('/posts', 'App\Http\Controllers\api\PostController');
