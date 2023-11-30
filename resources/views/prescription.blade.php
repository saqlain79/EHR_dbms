<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prescription</title>
</head>
<body>
<h1><a href="{{route('index')}}">Home</a></h1>
    <h1>Prescription</h1>
    <div>
    <form action="{{route('prescription_submit')}}" method="POST">
        @csrf
        <label for="reportid">Report ID:</label>
        <input type="number" name="reportid">
        <br><br>

        <input type="submit" value="Submit">
    </form>
    </div>
    <div>
        <table style="border:1px solid black">
            <thead style="padding:5px">
                <tr>
                    <th>Prescription ID</th>
                    <th>Report ID</th>
                </tr>
            </thead>
            @foreach($prescription as $pr)
                    <tbody>
                        <tr>
                            <td>{{$pr->id}}</td>
                            <td>{{$pr->report_id}}</td>
                        </tr>
                    </tbody>
            @endforeach
        </table>
    </div>
</body>
</html>