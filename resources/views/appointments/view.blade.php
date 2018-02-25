<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>Document</title>
</head>
<body>
<h1>View the Data about a Doctor</h1>

<label>{{ $appointment->has_occured  }}</label><br><br>
<label>{{ $appointment->patient_name  }}</label><br><br>
<label >{{ $appointment->time_from  }}</label><br><br>
<label >{{ $appointment->time_to  }}</label><br><br>
<label >{{ $doctor->name  }}</label><br><br>
<form action="/appointment/remove/{{$appointment->id}}" method="post">
    {{  csrf_field() }}
    <button type="submit" class="btn btn-primary">Delete</button>
</form>
</body>
</html>
