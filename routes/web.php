<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminLeadController;
use App\Http\Controllers\adminSearchController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\InstallerController;
use App\Http\Controllers\LeadController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SearchController;
use App\Models\Address;
use App\Models\benefit;
use Illuminate\Support\Facades\Route;
use  \App\Models\User;

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

Route::middleware(['auth' ,'role:admin'])->prefix('/admin')->name('admin.')->group(function ($middleware) {
    Route::get('/dashboard', [AdminController::class , 'index'])->name('dashboard');
    Route::get('/leads/create', [AdminLeadController::class , 'create'])->name('create');
    Route::get('/leads/edit{id}',[AdminLeadController::class , 'edit'])->name('edit');
    Route::get('/leads/{id}', [AdminLeadController::class, 'destroy'])->name('destroy');
    Route::get('/leads/search/{query}',[adminSearchController::class, 'search'])->name('search');
    Route::post('leads/store', [ \App\Http\Controllers\AdminSubmitLeadController::class, 'store'])->name('store');
    Route::post('leads/update', [ \App\Http\Controllers\AdminSubmitLeadController::class, 'update'])->name('update');

});


Route::middleware(['auth' ,'role:agent'])->prefix('/agent')->name('agent.')->group(function ($middleware) {


    Route::get('/dashboard', [AgentController::class , 'index'])->name('dashboard');
    Route::get('/leads/create', [LeadController::class , 'create'])->name('create');

    Route::get('/leads/edit{id}',[LeadController::class , 'edit'])->name('edit');
    Route::get('/leads/{id}', [LeadController::class, 'destroy'])->name('destroy');
    Route::get('/leads/search/{query}',[SearchController::class, 'search'])->name('search');
    Route::post('leads/store', [ \App\Http\Controllers\SubmitLeadController::class, 'store'])->name('store');
    Route::post('leads/update', [ \App\Http\Controllers\SubmitLeadController::class, 'update'])->name('update');
});


Route::middleware(['auth' ,'role:customer'])->prefix('/customer')->name('customer.')->group(function ($middleware) {


    Route::get('/dashboard', [\App\Http\Controllers\CustomerController::class , 'index'])->name('dashboard');

});

Route::middleware(['auth' ,'role:installer'])->prefix('/installer')->name('installer.')->group(function ($middleware) {


    Route::get('/dashboard', [InstallerController::class, 'index'])->name('dashboard');

});

Route::middleware(['auth' ,'role:guest','verified'])->prefix('/guest')->name('guest.')->group(function ($middleware) {


    Route::get('/dashboard', [GuestController::class, 'index'])->name('dashboard');

});



Route::get('/dashboard', function () {
$role = auth()->user()->role->name;


    return match ($role) {
        'admin' => redirect()->route('admin.dashboard'),
        'agent' => redirect()->route('agent.dashboard'),
        'customer' => redirect()->route('customer.dashboard'),
        'installer' => redirect()->route('installer.dashboard'),
        'guest' => redirect()->route('guest.dashboard'),
        default => redirect()->route('home'),
    };
})->middleware(['auth', 'verified', ])->name('dashboard');


Route::get('/create' , [PostsController::class , 'create']);
Route::post('/create', [PostsController::class , 'store']);

Route::get('/' , function (){
    return view('auth.login');
})->name('home');

Route::middleware(['auth' , 'role:admin'])->group(function () {
   Route::get('/admin' , [AdminController::class , 'index'])->name('admin.index');
});

Route::middleware(['auth' , 'role:agent'])->prefix('/admin')->group(function () {
   Route::get('/' , [AdminController::class , 'index'])->name('admin.index');
   Route::resource('/roles' , \App\Http\Controllers\Admin\RoleController::class);
   Route::resource('/permissions' , \App\Http\Controllers\Admin\PermissionController ::class);

});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
