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
@foreach($doctors as $doctor)
    <a href="/view/{{ $doctor->id  }}">{{ $doctor->name  }}</a><br><br>
    <label>{{ $doctor->speciality  }}</label><br><br>
    Active: <label>{{ $doctor->is_active }}</label><br><br>
    <label>{{ $doctor->institution  }}</label><br><br>
    <form action="/remove/{{$doctor->id}}" method="post">
        {{  csrf_field() }}
        <button type="submit" class="btn btn-primary">Delete</button>
    </form>
@endforeach
</body>
</html>
