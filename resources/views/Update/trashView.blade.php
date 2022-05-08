<!doctype html>
<html>
    <head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body class="text-center bg-lime-200">

    <div class="flex justify-center text-center">

    @foreach($products as $product)

        <div class="flex justify-center m-10">
            <form method="GET" class="border-2 rounded-lg border-black w-64 bg-cyan-200 " action="{{ route('trashForm') }}">

                 <h1 class="text-4xl font-bold mb-5 ml-3 mr-3 ">Details</h1>

                    <p class="mb-2 text-left ml-5">
                        ID: <br>
                        <input class="mbr-5 w-52" type="text" value="{{ $product['product']['id'] }}" readonly name="id">
                    </p>

                    <p class="mb-2 text-left ml-5">
                        Name: <br>
                        <input class="mbr-5 w-52" type="text" value="{{ $product['product']['name'] }}" readonly name="name">
                    </p>

                    <p class="mb-2 text-left ml-5">
                        Reference_number: <br>
                        <input class="mbr-5 w-52" type="text" value="{{ $product['product']['reference_number'] }}" readonly  name="reference_number">
                    </p>

                    <p class="mb-2 text-left ml-5">
                        Provider: <br>
                        <span class="ml-1"> {{ $product['product']['provider']['name'] }} </span>                    </p>

                    
                    <button class="bg-purple-500 hover:bg-blue-700 text-white py-2 px-4 rounded-full mb-3 mt-5 mr-3" type="submit" name="button" value="restore">Restore</button>
                    
                    <button class="bg-purple-500 hover:bg-red-700 text-white py-2 px-4 rounded-full mb-3 mt-5" type="submit" name="button" value="delete">Delete</button>
                    
                    
            </form>
        </div>
           
    @endforeach

    </div>

    </body>
</html>