<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;

Route::get('/', function () {
    // $users = User::all();
    $users = User::where('settings->emails_enabled', true)->get();
    
    return view('welcome', [
        'users' => $users
    ]);
});
