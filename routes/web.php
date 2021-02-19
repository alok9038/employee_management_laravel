<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;

Route::prefix('admin')->group(function () {
    
    Route::get('/',[EmployeeController::class,"index"])->name('admin.dashboard');
    
    Route::get('/new_employee',[EmployeeController::class,"add_employee"])->name('add.employee');
    Route::post('/new_employee',[EmployeeController::class,"store_employee"])->name('add.employee.insert');

    Route::get('/employee',[EmployeeController::class,"manage_employee"])->name('manage.employee');

    
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
