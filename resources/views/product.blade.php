<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

<body>
<ul>
  <li>{{ $car[0]->id }}</li>
  <li>{{ $car[0]->brand }}</li>
  <li>{{ $car[0]->modello }}</li>
  <li>{{ $car[0]->colore }}</li>
</ul>

    </body>
</html>
