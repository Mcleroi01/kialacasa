<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Owner\Dashboard as OwnerDashboard;
use App\Livewire\Owner\Establishment\Create as CreateEstablishment;

Route::middleware(['auth', 'role:owner'])->prefix('owner')->group(function () {
    Route::get('/', OwnerDashboard::class)->name('owner.dashboard');
   
});

 Route::get('/owner/establishments/create', CreateEstablishment::class)->name('owner.establishments.create');