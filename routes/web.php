<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Clear all cache
Route::get('clear-cache', function() {
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    return redirect()->back();
});

Route::get('/', [\App\Http\Controllers\FrontendController::class, 'index'])->name('home');

Route::middleware('auth')->prefix('dashboard')->group(function () {
    // Dashboard
    Route::get('/', [\App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

    // Profile routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Site
    Route::get('/site', [\App\Http\Controllers\SiteController::class, 'index'])->name('site.index');
    Route::get('/site/create', [\App\Http\Controllers\SiteController::class, 'create'])->name('site.create');
    Route::post('/site', [\App\Http\Controllers\SiteController::class, 'store'])->name('site.store');
    Route::delete('/site/{id}', [\App\Http\Controllers\SiteController::class, 'destroy'])->name('site.destroy');
    Route::post('/site/checkSubDomain', [\App\Http\Controllers\SiteController::class, 'checkSubDomain'])->name('site.checkSubDomain');
    Route::post('/site/addCustomDomain', [\App\Http\Controllers\SiteController::class, 'addCustomDomain'])->name('site.addCustomDomain');

    // Custom domain requests
    Route::get('/domain-request', [\App\Http\Controllers\CustomDomainController::class, 'index'])->middleware(['role:admin'])->name('domain.index');
    Route::patch('/domain-request/change-status', [\App\Http\Controllers\CustomDomainController::class, 'changeStatus'])->name('domain.changeStatus');

});

require __DIR__.'/auth.php';
