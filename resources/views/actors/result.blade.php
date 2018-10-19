<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
    </head>
    <body>


      <h2>Listado de actores encontrados</h2>

      <ul>
        @foreach ($results as $oneActor)
          <li>{{ $oneActor->getFullName() }}</li>
        @endforeach
      </ul>


      {{-- <form action="/actors/result" method="get">
        <h3>Ingrese nombre de actor</h3>
        <label>
          <input type="text" name="actors" value="">
        </label>

        <button type="submit" ></button>

      </form> --}}
      {{-- {{dd($oneMovie)}} --}}

    </body>
</html>
