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


      <h2>Listado de actores</h2>

      <ul>
        @foreach ($actors as $oneActor)
          <li>{{ $oneActor->getFullName() }}</li>
        @endforeach
      </ul>

    </body>
</html>
