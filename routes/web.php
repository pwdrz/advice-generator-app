<?php

use App\Http\Controllers\AdviceController;
use Illuminate\Support\Facades\Route;

Route::get('/', [AdviceController::class, 'index'])->name('index');
