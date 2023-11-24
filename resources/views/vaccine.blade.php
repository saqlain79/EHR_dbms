<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vaccine Info</title>
</head>
<body>
    <h1><a href="{{route('index')}}">Home</a></h1>

    <h1>Vaccine Info</h1>
    <form action="{{route('vaccine_submit')}}" method="POST">
        @csrf
        <label for="name">Name of vaccine:</label>
        <input type="text" id="name" name="name" required><br><br>
        
        <label for="quantity">Quantity:</label>
        <input type="number" id="quantity" name="quantity" required><br><br>

        <label for="targetDisease">Target disease:</label>
        <input type="text" id="targetDisease" name="targetDisease" required><br><br>

        <label for="company">Company:</label>
        <input type="text" id="company" name="company" required><br><br>
        
        <input type="submit" value="Submit">
    </form>
    
    <table>
        <thead>
            <tr>
                <th>Name of vaccine</th>
                <th>Quantity</th>
                <th>Target disease</th>
                <th>Company</th>
            </tr>
        </thead>
        @foreach($vaccine as $vaccine)
        <tbody>
            <td>{{$vaccine->vaccinename}}</td>
            <td>{{$vaccine->quantity}}</td>
            <td>{{$vaccine->targetDisease}}</td>
            <td>{{$vaccine->company}}</td>
        </tbody>
        @endforeach
    </table>
    
</body>
</html>
