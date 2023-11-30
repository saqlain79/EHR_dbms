<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1><a href="{{route('index')}}">Home</a></h1>
    <h1>Clinic Info</h1>
    <form action="{{route('clinic_edit_update', $clinic->id)}}" method="POST">
        @csrf
        <label for="name">Name of clinic:</label>
        <input type="text" id="name" name="name" value="{{$clinic->clinicname}}"><br><br>
        
        <label for="location">location:</label>
        <input type="text" id="location" name="location" value="{{$clinic->location}}"><br><br>
        
        <label for="contact">contact:</label>
        <input type="tel" id="contact" name="contact" value="{{$clinic->contact}}"><br><br>

        <label for="email">email:</label>
        <input type="email" id="email" name="email" value="{{$clinic->email}}"><br><br>
        
        <input type="submit" value="Submit">
    </form>
</body>
</html>