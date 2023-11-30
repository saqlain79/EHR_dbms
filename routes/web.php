<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
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

Route::get('/welcome', function () {
    return view('welcome');
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


//home page
route::get('/', [AdminController::class, 'index'])->name('index');

route::get('/redirect', [AdminController::class, 'redirect'])->name('redirect');

//patient info
route::get('/patient', [AdminController::class, 'patient'])->name('patient');
route::post('/patient_submit', [AdminController::class, 'patient_submit'])->name('patient_submit');
route::get('/patient_edit/{id}', [AdminController::class, 'patient_edit'])->name('patient_edit');
route::post('/patient_edit_update/{id}', [AdminController::class, 'patient_edit_update'])->name('patient_edit_update');
route::get('/patient_delete/{id}', [AdminController::class, 'patient_delete'])->name('patient_delete');

//vaccine info
route::get('/vaccine', [AdminController::class, 'vaccine'])->name('vaccine');
route::post('/vaccine_submit', [AdminController::class, 'vaccine_submit'])->name('vaccine_submit');
route::get('/vaccine_edit/{id}', [AdminController::class, 'vaccine_edit'])->name('vaccine_edit');
route::post('/vaccine_edit_update/{id}', [AdminController::class, 'vaccine_edit_update'])->name('vaccine_edit_update');

//allergy info
route::get('/allergy', [AdminController::class, 'allergy'])->name('allergy');
route::post('/allergy_submit', [AdminController::class, 'allergy_submit'])->name('allergy_submit');
route::get('/allergy_edit/{id}', [AdminController::class, 'allergy_edit'])->name('allergy_edit');
route::post('/allergy_edit_update/{id}', [AdminController::class, 'allergy_edit_update'])->name('allergy_edit_update');

//clinic info
route::get('/clinic', [AdminController::class, 'clinic'])->name('clinic');
route::post('/clinic_submit', [AdminController::class, 'clinic_submit'])->name('clinic_submit');
route::get('/clinic_edit/{id}', [AdminController::class, 'clinic_edit'])->name('clinic_edit');
route::post('/clinic_edit_update/{id}', [AdminController::class, 'clinic_edit_update'])->name('clinic_edit_update');

//patient allergy info
route::get('/patient_allergy', [AdminController::class, 'patient_allergy'])->name('patient_allergy');
route::post('/patient_allergy_submit', [AdminController::class, 'patient_allergy_submit'])->name('patient_allergy_submit');
route::get('/patient_allergy_delete/{patient_id}/{allergy_id}', [AdminController::class, 'patient_allergy_delete'])->name('patient_allergy_delete');

//doctor info
route::get('/doctor', [AdminController::class, 'doctor'])->name('doctor');
route::post('/doctor_submit', [AdminController::class, 'doctor_submit'])->name('doctor_submit');
route::get('/doctor_edit/{id}', [AdminController::class, 'doctor_edit'])->name('doctor_edit');
route::post('/doctor_edit_update/{id}', [AdminController::class, 'doctor_edit_update'])->name('doctor_edit_update');

//patient vaccine clinic info
route::get('/patient_vaccine_clinic', [AdminController::class, 'patient_vaccine_clinic'])->name('patient_vaccine_clinic');
route::post('/patient_vaccine_clinic_submit', [AdminController::class, 'patient_vaccine_clinic_submit'])->name('patient_vaccine_clinic_submit');
route::get('/patient_vaccine_clinic_delete/{patient_id}/{vaccine_id}/{clinic_id}', [AdminController::class, 'patient_vaccine_clinic_delete'])->name('patient_vaccine_clinic_delete');

//medical report info
route::get('/medical_report', [AdminController::class, 'medical_report'])->name('medical_report');
route::post('/medical_report_submit', [AdminController::class, 'medical_report_submit'])->name('medical_report_submit');
route::get('/medical_report_delete/{patient_id}/{doctor_id}', [AdminController::class, 'medical_report_delete'])->name('medical_report_delete');

//prescription info
route::get('/prescription', [AdminController::class, 'prescription'])->name('prescription');
route::post('/prescription_submit', [AdminController::class, 'prescription_submit'])->name('prescription_submit');

//medicine info
route::get('/medicine', [AdminController::class, 'medicine'])->name('medicine');
route::post('/medicine_submit', [AdminController::class, 'medicine_submit'])->name('medicine_submit');