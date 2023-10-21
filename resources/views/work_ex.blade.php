<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1 style="text-align: center">Work Experience</h1>
    @foreach ($data as $data)
        <h1>Company Name : {{$data->Company_Name}}</h1>
        <h3>Position: {{$data->Position}}</h3>
    @endforeach
</body>
</html>