<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor list</title>
</head>
<body>
    <h1><a href="{{route('index')}}">Home</a></h1>
    <form action="{{route('doctor_submit')}}" method="POST">
        
        @csrf
        <label for="name">Name of Doctor:</label>
        <input type="text" id="name" name="name" required><br><br>
        
        <label for="contact">contact:</label>
        <input type="tel" id="contact" name="contact" required><br><br>
        
        <label for="email">email:</label>
        <input type="email" id="email" name="email" required><br><br>

        <label for="dob">date of birth:</label>
        <input type="date" id="dob" name="dob" required><br><br>

        <label for="license_num">license number:</label>
        <input type="number" id="license_num" name="license_num" required><br><br>

        <label for="specialty">specialty:</label>
        <input type="specialty" id="specialty" name="specialty" required><br><br>

        <label for="yearsofexp">years of experience:</label>
        <input type="number" id="yearsofexp" name="yearsofexp" required><br><br>

        <label for="id">Center ID:</label>
        <select name="center_id" id="" required="">
            <option value="" selected="">Select one</option>
            @foreach($clinic as $clinic)
            <option value="{{$clinic->id}}">{{$clinic->id}}</option>
            @endforeach
        </select>
        
        <input type="submit" value="Submit">
    </form>

    <div>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Contact</th>
                    <th>Email</th>
                    <th>Date of Birth</th>
                    <th>License Number</th>
                    <th>Specialty</th>
                    <th>Years of Experience</th>
                    <th>Center ID</th>
                </tr>
            </thead>
            @foreach($doctor as $doctor)
            <tbody>
                <td>{{$doctor->doctor_name}}</td>
                <td>{{$doctor->contact}}</td>
                <td>{{$doctor->email}}</td>
                <td>{{$doctor->dob}}</td>
                <td>{{$doctor->license_num}}</td>
                <td>{{$doctor->specialty}}</td>
                <td>{{$doctor->years_of_exp}}</td>
                <td>{{$doctor->center_id}}</td>
            </tbody>
            @endforeach
        </table>
    </div>
</body>
</html>
        
    </div>
</body>
</html>