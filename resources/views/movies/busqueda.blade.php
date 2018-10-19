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


      <h1>{{$oneMovie->title ?? 'No hay datos disponibles'}}</h1>
      <h3>creada: {{$oneMovie->created_at ?? 'No hay datos disponibles'}}</h3>
      <h3>modificada: {{$oneMovie->updated_at ?? 'No hay datos disponibles'}}</h3>
      <h3>ratin: {{$oneMovie->rating ?? 'No hay datos disponibles'}}</h3>
      <h3>premios: {{$oneMovie->awards ?? 'No hay datos disponibles'}}</h3>
      <h3>fecha de lanzamiento: {{$oneMovie->release_date ?? 'No hay datos disponibles'}}</h3>
      <h3>duracion: {{$oneMovie->length ?? 'No hay datos disponibles'}}</h3>

      {{-- {{dd($oneMovie)}} --}}

    </body>
</html>
