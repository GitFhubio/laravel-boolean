<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

<body>
  {{-- qui ho array di oggetti --}}
  <div style="display:flex;flex-direction:column;" class="container">

  @foreach ($cars as $car)
    <div style="display:flex;" class="item">
    {{$car->brand }}
    {{ $car->modello}}
    {{$car->id}}
  </div>
  @endforeach

</div>
    </body>
</html>
