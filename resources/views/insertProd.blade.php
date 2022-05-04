<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Laravel</title>
  </head>
  <body class="text-center text-2xl bg-lime-200">

  <div class="flex justify-center m-10">
    
    <form class="border-2 rounded-lg border-black w-70 bg-cyan-200 " action="{{ route('insertForm') }}">

    <h1 class="text-4xl font-bold mb-5 ml-3 mr-3 ">
          Insert product:
    </h1>

      <span class="m-5"> Name: <input  class="mt-5 mr-5 mb-5 w-52" type="text" name="name"> </span> <br>
      <span class="ml-5"> Provider: </span>  
      <select class="mb-3 mr-5 select w-60 max-w-xl rounded-full text-center" name="provider" id="provider">

      @foreach($providers as $provider)

        <option class="" value="{{ $provider->id }}"> {{ $provider->name }} </option>

      @endforeach
      </select> <br>


    <button class="bg-purple-500 hover:bg-blue-700 text-white py-2 px-4 rounded-full mb-3 mt-5" type="submit">Insertar</button>

    </form>

  </div>

  </body>
</html>