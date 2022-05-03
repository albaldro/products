<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Laravel</title>
  </head>
  <body class="text-center text-2xl">

  <form action="">

    Insert name: <input type="text" name="name"><br>
    Provider:  
    <select name="provider" id="provider">

    @foreach($providers as $provider)

        <option value="{{ $provider->id }}"> {{ $provider->name }} </option>

    @endforeach
    </select>



  </form>

  </body>
</html>