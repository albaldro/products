<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Laravel</title>
  </head>
  <body class="text-center text-2xl bg-lime-200">  

    <h1 class="text-4xl font-bold mb-5 ml-3 mr-3 "> Trash</h1>

    <button class="bg-purple-500 hover:bg-blue-700 text-white py-2 px-4 rounded-full mb-3 mt-5">
    <a href="{{ route('realHome') }}">
      Home
    </a>
    </button>

    @if(session('message'))
    <div class=" mb-5"> {{ session('message') }}  </div>
    @endif
    
    <div class="flex flex-row flex-nowrap w-full justify-around ">

      <div class=" border-black border-2px table-collapse mx-auto content-center">

        <table class="border-black border-2px table-collapse mx-auto content-center">
          <caption class="mb-5 border-black border-2px">Products</caption> 
          <tr class="border-black border-2 px-4">
            <th class="border-black border-2">
              ID
            </th>
            <th class="border-black border-2">
              Name
            </th>
            <th class="border-black border-2">
              Reference Nº
            </th>
            <th class="border-black border-2">
              Provider
            </th>
            <th class="border-black border-2">
              Botones
            </th>
          </tr>

          @foreach($products as $product)
          <tr class="border-black border-2 px-4">
            <td class="p-8">
              {{$product->_id}}
            </td>
            <td>
              {{$product->name}}
            </td>
            <td>
              {{$product->reference_number}}
            </td>
            <td>
              {{$product->provider->name}}
            </td>
            <td>
              <form action="{{ route('trashForm') }}">
                <input name="id" type="hidden" value="{{$product->_id}}">
                <button type="submit" class=" border-black border-2 m-3" name="button" value="restore">Restore</button>
                <button type="submit" class=" border-black border-2 m-3 " name="button" value="delete">Delete</button>
              </form>
            </td>
          </tr>
          @endforeach
        </table>

      </div>

      <div class=" content-center">

        <table  class="border-black border-2px table-collapse mx-auto content-center">
        <caption class="mb-5">Providers</caption>
          <tr class="border-black border-2 px-4">
            <th class="w-fit">
              ID
            </th>
            <th class="border-black border-2">
              Name
            </th>
            <th class="border-black border-2">
              Botones
            </th>
          </tr>

          @foreach($providers as $provider)
          <tr class="border-black border-2 px-4">
            <td >
              {{$provider->_id}}
            </td>
            <td>
              {{$provider->name}}
            </td>
            <td>
              <form action="{{ route('trashProvForm') }}">
                <input name="id" type="hidden" value="{{$provider->id}}">
                <button type="submit" class=" border-black border-2 m-3" name="button" value="restore">Restore</button>
                <button type="submit" class=" border-black border-2 m-3" name="button" value="delete">Delete</button>
              </form>
            </td>
          </tr>
          @endforeach
        </table>

      </div>

    </div>

  </body>
</html>