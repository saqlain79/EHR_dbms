<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clinic Info</title>
</head>
<body>
    <h1><a href="{{route('index')}}">Home</a></h1>
    <h1>Clinic Info</h1>
    <form action="{{route('clinic_submit')}}" method="POST">
        @csrf
        <label for="name">Name of clinic:</label>
        <input type="text" id="name" name="name" required><br><br>
        
        <label for="location">location:</label>
        <input type="text" id="location" name="location" required><br><br>
        
        <label for="contact">contact:</label>
        <input type="tel" id="contact" name="contact" required><br><br>

        <label for="email">email:</label>
        <input type="email" id="email" name="email" required><br><br>
        
        <input type="submit" value="Submit">
    </form>
    <div>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Location</th>
                    <th>Contact</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            @foreach($clinic as $clinic)
            <tbody>
                <td>{{$clinic->clinicname}}</td>
                <td>{{$clinic->location}}</td>
                <td>{{$clinic->contact}}</td>
                <td>{{$clinic->email}}</td>
                <td><a href="{{route('clinic_edit', $clinic->id)}}">Edit</a></td>
            </tbody>
            @endforeach
        </table>
    </div>
</body>
</html>
        
        </div>
    </body>
    </html>
