<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Allergy Edit</title>
</head>
<body>
<h1><a href="{{route('index')}}">Home</a></h1>
    <h1>Allergy Info</h1>
    <form action="{{route('allergy_edit_update', $allergy->id)}}" method="POST">
        @csrf
        <label for="name">Name of allergy:</label>
        <input type="text" id="name" name="name" value="{{$allergy->allergyname}}"><br><br>
                
        <label for="type">Type of allergy:</label>
        <input type="text" id="type" name="type" value="{{$allergy->type}}"><br><br>

        <label for="description">Description:</label>
        <input type="text" id="description" name="description" value="{{$allergy->description}}"><br><br>
        
        <input type="submit" value="Submit">
    </form>
</body>
</html>