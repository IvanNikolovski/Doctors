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
<h1>Add Doctor</h1>
<form action="/edit/{{$doctor->id}}" method="post">
    {{  csrf_field() }}
    <input type="text" name="name" placeholder="name" value="{{ $doctor->name  }}"><br><br>
    <input type="text" name="speciality" placeholder="speciality" value="{{ $doctor->speciality  }}"><br><br>
    Active: <input type="checkbox" name="is_active" @if($doctor->is_active) checked @endif ><br><br>
    <input type="text" name="institution" placeholder="institution" value="{{ $doctor->institution  }}"><br><br>
    <button type="submit" class="btn btn-primary">Update</button>
</form>
</body>
</html>
