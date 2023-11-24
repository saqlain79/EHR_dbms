<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Vaccine Clinic Info</title>
</head>
<body>
    <h1><a href="{{route('index')}}">Home</a></h1>
    <h1>Patient Vaccine Clinic Info</h1>
    <div>
    <form action="{{route('patient_vaccine_clinic_submit')}}" method="POST">
        @csrf

        <label for="patientid">Patient ID:</label>
        <select name="patientid" id="" required="">
            <option value="" selected="">Select</option>
            @foreach($patient as $patient)
                <option value="{{$patient->id}}">{{$patient->id}}</option>
            @endforeach
        </select>

        <br><br>

        <label for="vaccineid">Vaccine ID:</label>
        <select name="vaccineid" id="" required="">
            <option value="" selected="">Select</option>
            @foreach($vaccine as $vaccine)
                <option value="{{$vaccine->id}}">{{$vaccine->id}}</option>
            @endforeach
        </select>

        <br><br>

        <label for="clinicid">Clinic ID:</label>
        <select name="clinicid" id="" required="">
            <option value="" selected="">Select</option>
            @foreach($clinic as $clinic)
                <option value="{{$clinic->id}}">{{$clinic->id}}</option>
            @endforeach
        </select>

        <br><br>   
        
        <label for="vaccinedate">Vaccination Date:</label>
        <input type="date" id="vaccinedate" name="vaccinedate" required><br><br>

        <label for="dosage">Dosage:</label>
        <input type="text" id="dosage" name="dosage" required><br><br>

        <label for="vaccineadmin">Vaccine Administrator:</label>
        <input type="text" id="vaccineadmin" name="vaccineadmin" required><br><br>

        <button type="submit">Submit</button>
    </form>
    </div>
    <div>
        <table style="border:1px solid black">
            <thead style="padding:5px">
                <tr>
                    <th>Patient ID</th>
                    <th>Patient Name</th>
                    <th>Vaccine ID</th>
                    <th>Vaccine Name</th>
                    <th>Center ID</th>
                    <th>Center Name</th>
                    <th>Vaccination Date</th>
                    <th>Dosage</th>
                    <th>Vaccine Administrator</th>
                </tr>
            </thead>
            
            @foreach($pvcjoin as $p)
            
                        <tbody>
                            <tr>
                                <td>{{$p->patient_id}}</td>
                                <td>{{$p->last_name}}</td>
                                <td>{{$p->vaccine_id}}</td>
                                <td>{{$p->vaccinename}}</td>
                                <td>{{$p->center_id}}</td>
                                <td>{{$p->clinicname}}</td>
                                <td>{{$p->vaccination_date}}</td>
                                <td>{{$p->dosage}}</td>
                                <td>{{$p->vaccine_administrator}}</td>
                            </tr>
                        </tbody>
                        
            @endforeach
        </table>
    </div>
</body>
</html>