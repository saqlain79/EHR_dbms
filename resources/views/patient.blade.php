<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Info</title>
</head>
<body>

    <h1><a href="{{route('index')}}">Home</a></h1>

    <h1>Patient Info</h1>
    <form action="{{route('patient_submit')}}" method="POST">
        @csrf
        <label for="first_name">first name:</label>
        <input type="text" id="first_name" name="first_name" required><br><br>
        
        <label for="last_name">last name:</label>
        <input type="text" id="last_name" name="last_name" required><br><br>
        
        <label for="NID">NID:</label>
        <input type="tel" id="NID" name="NID" required><br><br>

        <label for="phone">Phone:</label>
        <input type="tel" id="phone" name="phone" required><br><br>

        <label for="email">email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="address">address:</label>
        <input type="text" id="address" name="address" required><br><br>

        <label for="date_of_birth">date of birth:</label>
        <input type="date" id="date_of_birth" name="date_of_birth" required><br><br>

        <label for="gender">gender:</label>
        <input type="text" id="gender" name="gender" required><br><br>
        
        <input type="submit" value="Submit">
    </form>
    <div>
        <!-- create a table to display the data -->
        <table>
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>NID</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Date of Birth</th>
                    <th>Gender</th>
                </tr>
            </thead>
            @foreach($patient as $patient)
            <tbody>
                <td>{{$patient->first_name}}</td>
                <td>{{$patient->last_name}}</td>
                <td>{{$patient->NID}}</td>
                <td>{{$patient->phone}}</td>
                <td>{{$patient->email}}</td>
                <td>{{$patient->address}}</td>
                <td>{{$patient->date_of_birth}}</td>
                <td>{{$patient->gender}}</td>
            </tbody>
            @endforeach
        </table>
    </div>
</body>
</html>
