<?php

use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;

Route::inertia('/', 'welcome', [
    'canRegister' => Features::enabled(Features::registration()),
])->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::inertia('dashboard', 'dashboard')->name('dashboard');
});

Route::domain('{account}.subdomains.test')->group(function () {
    Route::get('/test', function (string $account) {
        $data = ['account' => $account];

        return inertia('welcome', $data);
    })->name('test.index');
});

require __DIR__.'/settings.php';
