<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Laravel</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

  <body>
    <style>
    *{
      margin:0;
      padding:0;
      box-sizing:border-box;
    }
    ul{
      display:flex;
      list-style:none;
      margin:20px;
    }
    li{
      width:100px;
      text-align: center;
      margin:0 20px;
      border:1px solid #ccc;
    }
    </style>
    {{-- qui ho array di oggetti --}}
    <div class="container">
      <ul>
        <li>ID</li>
        <li>BRAND</li>
        <li>MODELLO</li>
        <li>COLORE</li>
      </ul>
      @foreach ($cars as $car)
        <ul >
          <li>   {{$car->id}}</li>
          <li>    {{$car->brand }}</li>
          <li>  {{ $car->modello}}</li>
          <li>  {{ $car->colore}}</li>

        </ul>
      @endforeach
    </div>
  </body>
  </html>
