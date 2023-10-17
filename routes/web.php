<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\EvenementController;
use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\ActiviteController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JoinController;

/*EmployeeController
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
    return view('index');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth:admin', 'verified'])->name('admin.dashboard');

require __DIR__.'/adminauth.php';




Route::resource("/admin/employee", EmployeeController::class)/*->middleware(['auth:admin', 'verified'])*/;

Route::resource("/admin/evenement", EvenementController::class);

Route::resource("inscription", InscriptionController::class)/*->middleware(['auth', 'verified'])*/;

Route::resource("activite", ActiviteController::class);

Route::post('contact_mail',[HomeController::class, 'contact_mail_send']);

Route::get('list',[JoinController::class,'showData']);










