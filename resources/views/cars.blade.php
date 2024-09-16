<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cars</title>
</head>

<body>
    @if ($cars->isEmpty())
        <h1>There are no cars</h1>
    @endif

    @foreach ($cars as $car)
        <h1>{{ $car->name }}</h1>
        <p>{{ $car->type }}</p>
        <p>{{ $car->price }}</p>
        <p>{{ $car->prod_date }}</p>
    @endforeach
</body>

</html>
