<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ShebaController;

use App\Http\Controllers\AdminController;
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



Route::get('/',[ShebaController::class,'index']);

Route::get('/home',[ShebaController::class,'redirect']);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::get('/add_doctor_view',[AdminController::class,'addview']);

Route::post('/upload_doctor',[AdminController::class,'upload']);

Route::post('/appointment',[ShebaController::class,'appointment']);

Route::get('/myappointment',[ShebaController::class,'myappointment']);

Route::get('/cancel_appoint/{id}',[ShebaController::class,'cancel_appoint']);

Route::get('/showappointment',[AdminController::class,'showappointment']);

Route::get('/approved/{id}',[AdminController::class,'approved']);

Route::get('/addmedicine', [AdminController::class, 'addMedicineView']);

Route::post('/addmedicine', [AdminController::class, 'addMedicine']); // Route for adding medicine

Route::delete('/deletemedicine/{id}', [AdminController::class, 'deleteMedicine']); // Route for deleting medicine

Route::put('/updatemedicine/{id}', [AdminController::class, 'updateMedicine']); // Route for updating medicine

Route::post('/buy-medicine', [ShebaController::class, 'buyMedicine'])->name('buy.medicine');

Route::get('/add_gold_view',[AdminController::class,'goldview']);

Route::post('/gold', [ShebaController::class, 'gold']);

Route::get('/upload_doctor',[AdminController::class,'uploadg']);