<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('home');
});

Route::resource('quizzes', QuizController::class);

Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/candidates', [CandidateController::class, 'index'])->name('candidates');
    Route::get('/quizzes', [QuizController::class, 'index'])->name('quizzes');
    Route::get('/schedule', [ScheduleController::class, 'index'])->name('schedule');
    Route::get('/staff', [StaffController::class, 'index'])->name('staff');
});