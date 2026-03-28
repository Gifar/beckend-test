<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SkillTestController;

Route::get('/', [SkillTestController::class, 'dashboard'])->name('dashboard');

Route::match(['get', 'post'], '/string-compression', [SkillTestController::class, 'compressionString'])->name('string-compression');

Route::match(['get', 'post'], '/sorting-manual', [SkillTestController::class, 'sortingManual'])->name('sorting-manual');

Route::match(['get', 'post'], '/discount-calculator', [SkillTestController::class, 'discountCalculator'])->name('discount-calculator');
