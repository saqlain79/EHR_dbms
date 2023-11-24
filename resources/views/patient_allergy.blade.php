<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Allergy Info</title>
</head>
<body>
    <h1><a href="{{route('index')}}">Home</a></h1>
    <h1>Allergy Info</h1>
    <div>
    <form action="{{route('patient_allergy_submit')}}" method="POST">
        @csrf
        <label for="id">Patient ID:</label>
        <select name="id" id="" required="">
            <option value="" selected="">Select</option>
            @foreach($patient as $patient)
            <option value="{{$patient->id}}">{{$patient->id}}</option>
            @endforeach
        </select>
        <br><br>
        <label for="id2">Allergy ID:</label>
        <select name="id2" id="" required="">
            <option value="" selected="">Select</option>
            @foreach($allergy as $allergy)
            <option value="{{$allergy->id}}">{{$allergy->id}}</option>
            @endforeach
        </select>
        <br><br>       
        <input type="submit" value="Submit">
    </form>
    </div>
    <div>
        <table style="border:1px solid black">
            <thead style="padding:5px">
                <tr>
                    <th>Patient ID</th>
                    <th>Patient Name</th>
                    <th>Gender</th>
                    <th>Date of birth</th>
                    <th>Allergy ID</th>
                    <th>Name of Allergy</th>
                    <th>Type of Allergy</th>
                </tr>
            </thead>
            
            @foreach($patientallergy as $p)
                <!-- @php
                    $patient = App\Models\Patient::find($p->patient_id);
                    $allergy = App\Models\Allergy::find($p->allergy_id);
                @endphp -->
                @if($p->patient_id == $patient->id)
                    @if($p->allergy_id == $allergy->id)
                    <tbody>
                        <tr>
                            <td>{{$p->patient_id}}</td>
                            <td>{{$patient->first_name}}</td>
                            <td>{{$patient->gender}}</td>
                            <td>{{$patient->date_of_birth}}</td>
                            <td>{{$allergy->id}}</td>
                            <td>{{$allergy->allergyname}}</td>
                            <td>{{$allergy->type}}</td>
                        </tr>
                    </tbody>
                    @endif
                @endif
            @endforeach
        </table>
    </div>
</body>
</html>