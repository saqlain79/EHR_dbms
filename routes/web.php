<?php

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

//home page
route::get('/', [AdminController::class, 'index'])->name('index');

//patient info
route::get('/patient', [AdminController::class, 'patient'])->name('patient');
route::post('/patient_submit', [AdminController::class, 'patient_submit'])->name('patient_submit');

//vaccine info
route::get('/vaccine', [AdminController::class, 'vaccine'])->name('vaccine');
route::post('/vaccine_submit', [AdminController::class, 'vaccine_submit'])->name('vaccine_submit');

//allergy info
route::get('/allergy', [AdminController::class, 'allergy'])->name('allergy');
route::post('/allergy_submit', [AdminController::class, 'allergy_submit'])->name('allergy_submit');

//clinic info
route::get('/clinic', [AdminController::class, 'clinic'])->name('clinic');
route::post('/clinic_submit', [AdminController::class, 'clinic_submit'])->name('clinic_submit');

//patient allergy info
route::get('/patient_allergy', [AdminController::class, 'patient_allergy'])->name('patient_allergy');
route::post('/patient_allergy_submit', [AdminController::class, 'patient_allergy_submit'])->name('patient_allergy_submit');

//doctor info
route::get('/doctor', [AdminController::class, 'doctor'])->name('doctor');
route::post('/doctor_submit', [AdminController::class, 'doctor_submit'])->name('doctor_submit');

//patient vaccine clinic info
route::get('/patient_vaccine_clinic', [AdminController::class, 'patient_vaccine_clinic'])->name('patient_vaccine_clinic');
route::post('/patient_vaccine_clinic_submit', [AdminController::class, 'patient_vaccine_clinic_submit'])->name('patient_vaccine_clinic_submit');

//medical report info
route::get('/medical_report', [AdminController::class, 'medical_report'])->name('medical_report');
route::post('/medical_report_submit', [AdminController::class, 'medical_report_submit'])->name('medical_report_submit');

//prescription info
route::get('/prescription', [AdminController::class, 'prescription'])->name('prescription');
route::post('/prescription_submit', [AdminController::class, 'prescription_submit'])->name('prescription_submit');

//medicine info
route::get('/medicine', [AdminController::class, 'medicine'])->name('medicine');
route::post('/medicine_submit', [AdminController::class, 'medicine_submit'])->name('medicine_submit');