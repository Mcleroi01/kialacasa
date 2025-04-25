<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Admin\Dashboard as AdminDashboard;

Route::middleware(['auth', 'role:admin'])->prefix('admin')->group(function () {
Route::get('/', AdminDashboard::class)->name('admin.dashboard');
});