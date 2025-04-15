<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Models\Monster;

Route::get('/', function () {
    return Inertia::render('welcome');
})->name('home');

Route::get('/monsters', function () {

    $monsters = Monster::getAllMonsters();

    return Inertia::render('monsters', [
        'monsters' => $monsters,
    ]);
})->name('monsters');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', function () {
        return Inertia::render('dashboard');
    })->name('dashboard');
});

require __DIR__.'/settings.php';
require __DIR__.'/auth.php';
