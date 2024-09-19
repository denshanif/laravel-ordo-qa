<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Car Reviews</title>
</head>

<body>
    <h1>{{ $reviews->car->name }}</h1>
    <h1>{{ $reviews->name }}</h1>
    <p>{{ $reviews->value }}/5</p>
    <p>{{ $reviews->review }}</p>
</body>

</html>
