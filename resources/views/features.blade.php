<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Car Features</title>
</head>

<body>
    <h1>List available features</h1>

    @foreach ($features as $feature)
        <ul>
            <li>{{ $feature->name }}</li>
        </ul>
    @endforeach
</body>

</html>
