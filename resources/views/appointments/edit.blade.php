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
<h1>Edit</h1>
<form action="/appointment/edit/{{ $appointment->id }}" method="post">
    {{  csrf_field() }}
    Has Occured <input type="checkbox" name="has_occured" @if($appointment->has_occured) checked @endif><br><br>
    <input type="text" name="patient_name" placeholder="patient" value="{{ $appointment->patient_name }}"><br><br>
    <input type="datetime" name="time_from" value="{{ $appointment->time_from }}"><br><br>
    <input type="datetime" name="time_to" value="{{ $appointment->time_to }}"><br><br>
    <select name="doctor_id">
        @foreach($doctors as $doctor)
            <option value="{{ $doctor->id }}">{{ $doctor->name  }}</option>
        @endforeach
    </select>
    <button type="submit" class="btn btn-primary">Add</button>
</form>
</body>
</html>
