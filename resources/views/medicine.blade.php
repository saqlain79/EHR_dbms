<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medicine</title>
</head>
<body>
<h1><a href="{{route('index')}}">Home</a></h1>
    <h1>Medicine Info</h1>
    <div>
    <form action="{{route('medicine_submit')}}" method="POST">
        @csrf
        <label for="medicinename">Medicine name:</label>
        <input type="name" name="medicinename">
        <br><br>

        <label for="prescriptionid">Prescription ID:</label>
        <input type="number" name="prescriptionid">
        <br><br>

        <label for="medicinetype">Medicine Type:</label>
        <input type="name" name="medicinetype">
        <br><br>

        <label for="dosage">Dosage:</label>
        <input type="number" name="dosage">
        <br><br>

        <input type="submit" value="Submit">
    </form>
    </div>
    <div>
        <table style="border:1px solid black">
            <thead style="padding:5px">
                <tr>
                    <th>Medicine Name</th>
                    <th>Medicine Type</th>
                    <th>Dosage</th>
                    <th>Prescription ID</th>
                </tr>
            </thead>
            @foreach($medicine as $md)
                    <tbody>
                        <tr>
                            <td>{{$md->medicine_name}}</td>
                            <td>{{$md->medicine_type}}</td>
                            <td>{{$md->dosage}}</td>
                            <td>{{$md->prescription_id}}</td>
                        </tr>
                    </tbody>
            @endforeach
        </table>
    </div>
</body>
</html>