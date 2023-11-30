<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Allergy Info</title>
</head>
<body>
    <h1><a href="{{route('index')}}">Home</a></h1>
    <h1>Allergy Info</h1>
    <form action="{{route('allergy_submit')}}" method="POST">
        @csrf
        <label for="name">Name of allergy:</label>
        <input type="text" id="name" name="name" required><br><br>
                
        <label for="type">Type of allergy:</label>
        <input type="text" id="type" name="type" required><br><br>

        <label for="description">Description:</label>
        <input type="text" id="description" name="description" required><br><br>
        
        <input type="submit" value="Submit">
    </form>
    <div>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Type</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            @foreach($allergy as $allergy)
            <tbody>
                <td>{{$allergy->allergyname}}</td>
                <td>{{$allergy->type}}</td>
                <td>{{$allergy->description}}</td>
                <td>
                    <a href="{{route('allergy_edit',$allergy->id)}}">Edit</a>
                </td>
            </tbody>
            @endforeach
        </table>
    </div>
</body>
</html>