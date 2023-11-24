<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medical Report</title>
</head>
<body>
<h1><a href="{{route('index')}}">Home</a></h1>
    <h1>Allergy Info</h1>
    <div>
    <form action="{{route('medical_report_submit')}}" method="POST">
        @csrf
        <label for="patientid">Patient ID:</label>
        <select name="patientid" id="" required="">
            <option value="" selected="">Select</option>
            @foreach($patient as $patient)
            <option value="{{$patient->id}}">{{$patient->id}}</option>
            @endforeach
        </select>
        <br><br>
        <label for="doctorid">Doctor ID:</label>
        <select name="doctorid" id="" required="">
            <option value="" selected="">Select</option>
            @foreach($doctor as $doctor)
            <option value="{{$doctor->id}}">{{$doctor->id}}</option>
            @endforeach
        </select>
        <br><br>
        <label for="visitreason">Visit Reason:</label>
        <input type="text" name="visitreason"><br><br>
        
        <label for="visitdate">Visit Date:</label>
        <input type="date" name="visitdate">

        <label for="diagnosis">Diagnosis</label>
        <input type="text" name="diagnosis">

        <label for="test">Test</label>
        <input type="text" name="test">

        <label for="testresult">Test Results:</label>
        <input type="text" name="testresult">

        <label for="temperature">Temperature</label>
        <input type="number" name="temperature">

        <label for="bloodpressure">Blood Pressure</label>
        <input type="number" name="bloodpressure">

        <label for="heartrate">Heart rate</label>
        <input type="number" name="heartrate">

        <label for="bloodoxygen">Blood Oxygen</label>
        <input type="number" name="bloodoxygen">

        <label for="remarks">Remarks</label>
        <input type="text" name="remarks">

        <input type="submit" value="Submit">
    </form>
    </div>
    <div>
        <table style="border:1px solid black">
            <thead style="padding:5px">
                <tr>
                    <th>Patient ID</th>
                    <th>Patient Name</th>
                    <th>Doctor ID</th>
                    <th>Doctor Name</th>
                    <th>Visit Reason</th>
                    <th>Visit Date</th>
                    <th>Diagnosis</th>
                    <th>Test</th>
                    <th>Test Results</th>
                    <th>Temperature</th>
                    <th>Blood Pressure</th>
                    <th>Heart Rate</th>
                    <th>Blood Oxygen</th>
                    <th>Remarks</th>
                </tr>
            </thead>
            @foreach($medicalreport as $mr)
                    <tbody>
                        <tr>
                            <td>{{$mr->patient_id}}</td>
                            <td>{{$mr->last_name}}</td>
                            <td>{{$mr->doctor_id}}</td>
                            <td>{{$mr->doctor_name}}</td>
                            <td>{{$mr->visit_reason}}</td>
                            <td>{{$mr->visit_date}}</td>
                            <td>{{$mr->diagnosis}}</td>
                            <td>{{$mr->test}}</td>
                            <td>{{$mr->test_results}}</td>
                            <td>{{$mr->temperature}}</td>
                            <td>{{$mr->blood_pressure}}</td>
                            <td>{{$mr->heart_rate}}</td>
                            <td>{{$mr->blood_oxygen}}</td>
                            <td>{{$mr->remarks}}</td>
                        </tr>
                    </tbody>
            @endforeach
        </table>
    </div>
</body>
</html>