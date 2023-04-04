<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ResumeController;


Route::prefix('')->name('resume.')->group(function() {
    Route::get('/', [ResumeController::class, 'index'])->name('index');
    Route::get('/experience', [ResumeController::class, 'experience'])->name('experience');
    Route::get('/education', [ResumeController::class, 'education'])->name('education');
    Route::get('/skills', [ResumeController::class, 'skills'])->name('skills');
    Route::get('/interests', [ResumeController::class, 'interests'])->name('interests');
    Route::get('/awards', [ResumeController::class, 'awards'])->name('awards');
});
