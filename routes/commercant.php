<?php

Route::get('/home', function () {
    $users[] = Auth::user();
    $users[] = Auth::guard()->user();
    $users[] = Auth::guard('commercant')->user();

    //dd($users);

    return view('commercant.home');
})->name('home');

