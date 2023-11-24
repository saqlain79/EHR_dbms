<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
            .homepage{
                text-align: center;
                margin-top: 20%;
            }
    
            .homepage a{
                text-decoration: none;
                color: black;
                font-size: 20px;
            }
    
            .homepage a:hover{
                color: blue;
            }
    </style>
</head>
<body>
    <div class="homepage">
    <h1>Menu</h1>
    <a href="{{route('patient')}}">Patient</a><br>
    <a href="{{route('vaccine')}}">Vaccine</a><br>
    <a href="{{route('allergy')}}">Allergy</a><br>
    <a href="{{route('clinic')}}">Clinic</a><br>
    <a href="{{route('patient_allergy')}}">Patient Allergy</a><br>
    <a href="{{route('doctor')}}">Doctor</a><br>
    <a href="{{route('patient_vaccine_clinic')}}">PVC</a><br>
    <a href="{{route('medical_report')}}">Medical Report</a><br>
    <a href="{{route('prescription')}}">Prescription</a><br>
    <a href="{{route('medicine')}}">Medicine</a>
    </div>
</body>
</html>