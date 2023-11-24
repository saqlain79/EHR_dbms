<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Patient;
use App\Models\Vaccine;
use App\Models\Allergy;
use App\Models\Clinic;
use App\Models\PatientAllergy;
use App\Models\Doctor;
use App\Models\PatientVaccineClinic;
use App\Models\MedicalReport;
use App\Models\Prescription;
use App\Models\Medicine;

class AdminController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function patient()
    {
        $patient = Patient::all();
        return view('patient', compact('patient'));
    }

    public function patient_submit(Request $request)
    {
        $patient = new Patient();

        $patient->first_name = $request->first_name;
        $patient->last_name = $request->last_name;
        $patient->NID = $request->NID;
        $patient->phone = $request->phone;
        $patient->email = $request->email;
        $patient->address = $request->address;
        $patient->date_of_birth = $request->date_of_birth;
        $patient->gender = $request->gender;

        $patient->save();

        return redirect()->back();
    }

    public function vaccine()
    {
        $vaccine = Vaccine::all();
        return view('vaccine', compact('vaccine'));
    }

    public function vaccine_submit(Request $request)
    {
        $vaccine = new Vaccine();

        $vaccine->name = $request->name;
        $vaccine->quantity = $request->quantity;
        $vaccine->targetDisease = $request->targetDisease;
        $vaccine->company = $request->company;

        $vaccine->save();

        return redirect()->back();
    }

    public function allergy()
    {
        $allergy = Allergy::all();
        return view('allergy', compact('allergy'));
    }

    public function allergy_submit(Request $request)
    {
        $allergy = new Allergy();

        $allergy->name = $request->name;
        $allergy->type = $request->type;
        $allergy->description = $request->description;

        $allergy->save();

        return redirect()->back();
    }

    public function clinic()
    {
        $clinic = Clinic::all();
        return view('clinic', compact('clinic'));
    }

    public function clinic_submit(Request $request)
    {
        $clinic = new Clinic();

        $clinic->name = $request->name;
        $clinic->location = $request->location;
        $clinic->contact = $request->contact;
        $clinic->email = $request->email;

        $clinic->save();

        return redirect()->back();
    }

    public function patient_allergy()
    {
        $patient = Patient::all();
        $allergy = Allergy::all();
        $patientallergy = PatientAllergy::all();

        return view('patient_allergy', compact('patient', 'allergy', 'patientallergy'));
    }

    public function patient_allergy_submit(Request $request)
    {
        $patientallergy = new PatientAllergy();

        $patientallergy->patient_id = $request->id;
        $patientallergy->allergy_id = $request->id2;

        $patientallergy->save();
        return redirect()->back();
    }

    public function doctor()
    {
        $doctor = Doctor::all();
        $clinic = Clinic::all();
        return view('doctor', compact('clinic', 'doctor'));
    }

    public function doctor_submit(Request $request)
    {
        $doctor = new Doctor();

        $doctor->doctor_name = $request->name;
        $doctor->contact = $request->contact;
        $doctor->email = $request->email;
        $doctor->dob = $request->dob;
        $doctor->license_num = $request->license_num;
        $doctor->specialty = $request->specialty;
        $doctor->years_of_exp = $request->yearsofexp;
        $doctor->center_id = $request->center_id;

        $doctor->save();

        return redirect()->back();
    }

    public function patient_vaccine_clinic()
    {
        $vaccine = Vaccine::all();
        $clinic = Clinic::all();
        $patient = Patient::all();
        $pvcjoin = DB::table('patient_vaccine_clinics')
            ->join('patients','patient_vaccine_clinics.patient_id','=','patients.id')
            ->join('vaccines','patient_vaccine_clinics.vaccine_id','=','vaccines.id')
            ->join('clinics','patient_vaccine_clinics.center_id','=','clinics.id')
            ->select('patient_vaccine_clinics.*','patients.last_name','vaccines.vaccinename','clinics.clinicname')
            ->get();

        return view('patient_vaccine_clinics', compact('pvcjoin','vaccine', 'clinic', 'patient'));
    }

    public function patient_vaccine_clinic_submit(Request $request)
    {
    
        $pvc = new PatientVaccineClinic();

        $pvc->patient_id = $request->patientid;
        $pvc->vaccine_id = $request->vaccineid;
        $pvc->center_id = $request->clinicid;

        $pvc->vaccination_date = $request->vaccinedate;
        $pvc->dosage = $request->dosage;
        $pvc->vaccine_administrator = $request->vaccineadmin;

        $pvc->save();

        return redirect()->back();
    }

    public function medical_report()
    {
        $patient = Patient::all();
        $doctor = Doctor::all();
        $medicalreport = DB::table('medical_reports')
            ->join('patients','medical_reports.patient_id','=','patients.id')
            ->join('doctors','medical_reports.doctor_id','=','doctors.id')
            ->select('medical_reports.*','patients.last_name','doctors.doctor_name')
            ->get();
        return view('medicalreport', compact('patient', 'doctor','medicalreport'));
    }
    public function medical_report_submit(Request $request)
    {
        $medicalreport = new MedicalReport();

        $medicalreport->patient_id = $request->patientid;
        $medicalreport->doctor_id = $request->doctorid;
        $medicalreport->visit_reason = $request->visitreason;
        $medicalreport->visit_date = $request->visitdate;
        $medicalreport->diagnosis = $request->diagnosis;
        $medicalreport->test = $request->test;
        $medicalreport->test_results = $request->testresult;
        $medicalreport->temperature = $request->temperature;
        $medicalreport->blood_pressure = $request->bloodpressure;
        $medicalreport->heart_rate = $request->heartrate;
        $medicalreport->blood_oxygen = $request->bloodoxygen;
        $medicalreport->remarks = $request->remarks;

        $medicalreport->save();

        return redirect()->back();
    }

    public function prescription()
    {
        $medicalreport = MedicalReport::all();
        $prescription = Prescription::all();
        return view('prescription', compact('medicalreport', 'prescription'));
    }
    public function prescription_submit(Request $request)
    {
        $prescription = new Prescription();

        $prescription->report_id = $request->reportid;

        $prescription->save();

        return redirect()->back();
    }

    public function medicine()
    {
        $medicine = Medicine::all();
        return view('medicine', compact('medicine'));
    }

    public function medicine_submit(Request $request)
    {
        $medicine = new Medicine();

        $medicine->medicine_name = $request->medicinename;
        $medicine->prescription_id = $request->prescriptionid;
        $medicine->medicine_type = $request->medicinetype;
        $medicine->dosage = $request->dosage;

        $medicine->save();

        return redirect()->back();

    }
}
