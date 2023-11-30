<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><a href="{{route('index')}}">Home</a></h1>
    <form action="{{route('doctor_edit_update', $doctor->id)}}" method="POST">
        
        @csrf
        <label for="name">Name of Doctor:</label>
        <input type="text" id="name" name="name" value="{{$doctor->doctor_name}}"><br><br>
        
        <label for="contact">contact:</label>
        <input type="tel" id="contact" name="contact" value="{{$doctor->contact}}"><br><br>
        
        <label for="email">email:</label>
        <input type="email" id="email" name="email" value="{{$doctor->email}}"><br><br>

        <label for="dob">date of birth:</label>
        <input type="date" id="dob" name="dob" value="{{$doctor->dob}}"><br><br>

        <label for="license_num">license number:</label>
        <input type="number" id="license_num" name="license_num" value="{{$doctor->license_num}}"><br><br>

        <label for="specialty">specialty:</label>
        <input type="specialty" id="specialty" name="specialty" value="{{$doctor->specialty}}"><br><br>

        <label for="yearsofexp">years of experience:</label>
        <input type="number" id="yearsofexp" name="yearsofexp" value="{{$doctor->years_of_exp}}"><br><br>

        <label for="id">Center ID:</label>
        <select name="center_id" id="">
            <option value="{{$doctor->center_id}}">{{$doctor->center_id}}</option>
            @foreach($clinic as $clinic)
                @if($clinic->id != $doctor->center_id)
                    <option value="{{$clinic->id}}">{{$clinic->id}}</option>
                @endif
            @endforeach
        </select>
        
        <input type="submit" value="Submit">
    </form>
</body>
</html>