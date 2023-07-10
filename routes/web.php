<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\CreateService;
use App\Http\Livewire\ServiceIndex;
use App\Http\Controllers\DashboardController;
use App\Http\Livewire\UserInteractionReport;
use App\Http\Livewire\UserCountReport;
use App\Http\Livewire\ReportAnalisis;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/user-interaction-report', UserInteractionReport::class)->name('user-interaction-report');
    Route::get('/user-count-report', UserCountReport::class)->name('user-count-report');
    Route::get('/report-analisis', ReportAnalisis::class)->name('report-analisis');
});

Route::get('/services', ServiceIndex::class)->name('services.index');
Route::get('/services/create', CreateService::class)->name('services.create');
Route::post('/services/store', [CreateService::class, 'createService'])->name('services.store');
Route::get('/service-detail/{serviceId}', [ServiceIndex::class, 'showServiceDetail'])->name('service-detail');
