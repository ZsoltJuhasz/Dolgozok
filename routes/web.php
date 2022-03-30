<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\WorkerController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::middleware("auth")->group(function () {
    Route::get("/new-worker", [WorkerController::class, "create"]);
    Route::get("/edit-worker/{id}", [WorkerController::class, "edit"]);
    Route::get("/delete-worker/{id}", [WorkerController::class, "destroy"]);
});

Route::get('/', [WorkerController::class, "index"]);
Route::post("/store-worker", [WorkerController::class, "store"]);
Route::put("/update-worker", [WorkerController::class, "update"]);
Route::get("/logout", [AuthenticatedSessionController::class, "destroy"]);
Route::get("/search-worker", [WorkerController::class, "search"]);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
