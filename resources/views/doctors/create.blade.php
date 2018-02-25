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
//Creating a new doctor in the database
<h1>Add Doctor</h1>
<form action="/create" method="post">
    {{  csrf_field() }}
    <input type="text" name="name" placeholder="name"><br><br>
    <input type="text" name="speciality" placeholder="speciality"><br><br>
    Active: <input type="checkbox" name="is_active"><br><br>
    <input type="text" name="institution" placeholder="institution"><br><br>
    <button type="submit" class="btn btn-primary">Add</button>


</form>
//displaying error if they are present
@if(!empty($errors->first()))
    <div class="row col-lg-12">
        <div class="alert alert-danger">
            <span>{{ $errors->first() }}</span>
        </div>
    </div>
@endif
</body>
</html>
