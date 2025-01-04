<?php

use Illuminate\Support\Facades\Route;

/**
 * Wildcard Subdomain
 * @param string $account
 * mymultisite.test -> static domain
 */
Route::domain('{account}.mymultisite.test')
    ->group(function () {
        Route::get('/', function (string $account) {
            return view('welcome', compact('account'));
        });
    });

/**
 * Anda juga dapat menggunakan kode di bawah ini apabila ingin menggunakan wildcard subdomain
 * @param string $account
 * Kode berikut memungkinan anda melakukan konfigurasi ulang apabila di sisi production
 * karena domain akan diambil dari config('app.url')
 */

// Route::domain('{account}.' . str()->replace(['https://', 'http://'], '', config('app.url')))
//     ->group(function () {
//         Route::get('/', function (string $account) {
//             return view('welcome', compact('account'));
//         });
//     });