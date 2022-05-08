<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Laravel</title>
  </head>
  <body class="text-center text-2xl bg-lime-200">  

    <h1 class="text-4xl font-bold mb-5 ml-3 mr-3 "> Trash providers</h1>

    <button class="bg-purple-500 hover:bg-blue-700 text-white py-2 px-4 rounded-full mb-3 mt-5">
    <a href="{{ route('realHome') }}">
      Home
    </a>
    </button>

  
      <div class="grid grid-cols-[400px_400px_400px] gap-4 justify-center mt-10">
        @foreach ($providers as $provider)
          <form action="{{ route('trashProvView') }}">
            <button type="submit">
              <div class="border-2 w-96 h-64 rounded-3xl bg-violet-400">
                <input value="{{ $provider->_id }}" type="hidden" name="id"></input>
                  <div class="text-black-600 pb-3 text-3xl">
                    {{ $provider->name }}
                  </div></input> <br>
              </div>
            </button>
          </form>
        @endforeach
      </div>

  </body>
</html>