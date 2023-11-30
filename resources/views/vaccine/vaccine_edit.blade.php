<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1><a href="{{route('index')}}">Home</a></h1>

<h1>Vaccine Info</h1>
<form action="{{route('vaccine_edit',$vaccine->id)}}" method="POST">
    @csrf
    <label for="name">Name of vaccine:</label>
    <input type="text" id="name" name="name" value="{{$vaccine->vaccinename}}"><br><br>
    
    <label for="quantity">Quantity:</label>
    <input type="number" id="quantity" name="quantity" value="{{$vaccine->quantity}}"><br><br>

    <label for="targetDisease">Target disease:</label>
    <input type="text" id="targetDisease" name="targetDisease" value="{{$vaccine->targetDisease}}"><br><br>

    <label for="company">Company:</label>
    <input type="text" id="company" name="company" value="{{$vaccine->company}}"><br><br>
    
    <input type="submit" value="Submit">
</form>
</body>
</html>