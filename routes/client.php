<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Client\Dashboard as ClientDashboard;

Route::middleware(['auth', 'role:client'])->prefix('client')->group(function () {
    Route::get('/', ClientDashboard::class)->name('client.dashboard');
});