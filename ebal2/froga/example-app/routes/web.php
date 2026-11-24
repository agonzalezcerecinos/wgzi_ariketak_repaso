<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Teams\TeamInvitationController;
use App\Http\Middleware\EnsureTeamMembership;
use Illuminate\Support\Facades\Route;

Route::inertia('/', 'Welcome')->name('home');

// Route::get('{n?}', function($n = 1) {
// return 'Nire orriaren zenbakia: ' . $n . ' !';
// });

//El name le pone el nombre a la ruta y al poner el link va a ser mas amigable

// Route::get('/', [HomeController::class, 'index'])->name('home');

// Route::get('/froga/{n?}', function($n = "no hay nada"){
//     return 'Nire orriaren zenbakia: ' . $n . ' !';
// });

Route::get('/froga/{n?}', [HomeController::class, 'froga']);


Route::prefix('{current_team}')
    ->middleware(['auth', 'verified', EnsureTeamMembership::class])
    ->group(function () {
        Route::get('dashboard', DashboardController::class)->name('dashboard');
    });


Route::middleware(['auth'])->group(function () {
    Route::post('invitations/{invitation}/accept', [TeamInvitationController::class, 'accept'])->name('invitations.accept');
    Route::delete('invitations/{invitation}', [TeamInvitationController::class, 'decline'])->name('invitations.decline');
});

require __DIR__.'/settings.php';
