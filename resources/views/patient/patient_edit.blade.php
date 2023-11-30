<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1><a href="{{route('index')}}">Home</a></h1>

<h1>Patient Info</h1>
<form action="{{route('patient_edit_update', $patient->id)}}" method="POST">
    @csrf
    <label for="first_name">first name:</label>
    <input type="text" id="first_name" name="first_name" value="{{$patient->first_name}}"><br><br>
    
    <label for="last_name">last name:</label>
    <input type="text" id="last_name" name="last_name" value="{{$patient->last_name}}"><br><br>
    
    <label for="NID">NID:</label>
    <input type="tel" id="NID" name="NID" value="{{$patient->NID}}"><br><br>

    <label for="phone">Phone:</label>
    <input type="tel" id="phone" name="phone" value="{{$patient->phone}}"><br><br>

    <label for="email">email:</label>
    <input type="email" id="email" name="email" value="{{$patient->email}}"><br><br>

    <label for="address">address:</label>
    <input type="text" id="address" name="address" value="{{$patient->address}}"><br><br>

    <label for="date_of_birth">date of birth:</label>
    <input type="date" id="date_of_birth" name="date_of_birth" value="{{$patient->date_of_birth}}"><br><br>

    <label for="gender">gender:</label>
    <input type="text" id="gender" name="gender" value="{{$patient->gender}}"><br><br>
    
    <input type="submit" value="Submit">
</form>
</body>
</html>