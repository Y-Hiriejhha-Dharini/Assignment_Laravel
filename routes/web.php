<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UerController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EmployeeController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('profile','App\Http\Controllers\CompanyController@index');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('profile/{id}',[UerController::class,'profile']);

Route::get('/company',[CompanyController::class,'index']);
Route::view('/createcompany','addCompany');
Route::post('/createcompany',[CompanyController::class,'create']);
Route::get('/company/{id}',[CompanyController::class,'destroy']);
Route::get('editcompany/{id}',[CompanyController::class,'edit']);
Route::post('/editcompany',[CompanyController::class,'update']);

Route::get('/employee',[EmployeeController::class,'index']);
Route::view('/createemployee','addEmployee');
Route::post('/createemployee',[EmployeeController::class,'create']);
Route::get('/employee/{id}',[EmployeeController::class,'destroy']);
Route::get('editEmployee/{id}',[EmployeeController::class,'edit']);
Route::post('/editEmployee',[EmployeeController::class,'update']);

Route::get('/serverSide',[CompanyController::class,'index']);


