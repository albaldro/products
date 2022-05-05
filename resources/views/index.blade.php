<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Laravel</title>
  </head>
  <body class="text-center text-2xl bg-lime-200">

  <button class="bg-purple-500 hover:bg-blue-700 text-white py-2 px-4 rounded-full mb-3 mt-5">
    <a href="{{ route('insertProd') }}">
    Insert Product
    </a>
  </button>

  <button class="bg-purple-500 hover:bg-blue-700 text-white py-2 px-4 rounded-full mb-3 mt-5">
    <a href="{{ route('trashHome') }}">
    Trash Products
    </a>
  </button>

  <div class="flex justify-center m-10">
    <form class="border-2 rounded-lg border-black w-70 bg-cyan-200 " action="{{ route('form') }}">

      <h1 class="text-4xl font-bold mb-5 ml-3 mr-3 ">
          Search the product:
      </h1>

      <p class="mb-2">Name</p>

      <select class="mb-3 select w-60 max-w-xl rounded-full text-center" name="id" id="id">

          @foreach ($products as $product)
          <option class="" value="{{ $product->_id }}">
              {{ $product->name }}
          </option>
          @endforeach

      </select>

      <p>
          <button class="bg-purple-500 hover:bg-blue-700 text-white py-2 px-4 rounded-full mb-3 mt-5" type="submit">Search</button>
      </p>
    </form>
  </div>

  
  
      <div class="grid grid-cols-4 gap-4 justify-center">
        @foreach ($products as $product)
          <form action="{{ route('form') }}">
            <button type="submit">
              <div class="border-2 w-96 h-64 rounded-3xl bg-violet-400">
                <input value="{{ $product->_id }}" type="hidden" name="id"></input>
                  <div class="text-black-600 pb-3 text-3xl">
                    {{ $product->name }}
                  </div></input> <br>
                Nº Ref: {{ $product->reference_number }} <br>
                Provider: {{ $product->provider->name }}
              </div>
            </button>
          </form>
        @endforeach
      </div>

  </body>
</html>