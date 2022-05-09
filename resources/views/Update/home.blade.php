<!doctype html>
<html>
    <head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body class="text-center bg-lime-200">

 

    <div class="flex justify-center text-center">

    @foreach($products as $product)

        <div class="flex justify-center m-10">
            <form method="GET" class="border-2 rounded-lg border-black w-64 bg-cyan-200 " action="{{ route('updateForm') }}">

                 <h1 class="text-4xl font-bold mb-5 ml-3 mr-3 ">Details</h1>

                        <input class="mbr-5 w-52" type="hidden" value="{{ $product['product']['id'] }}" readonly name="id">


                    <p class="mb-2 text-left ml-5">
                        Name: <br>
                        <input class="mbr-5 w-52" type="text" value="{{ $product['product']['name'] }}" name="name">
                    </p>

                    <p class="mb-2 text-left ml-5">
                        Reference_number: <br>
                        <input class="mbr-5 w-52" type="text" value="{{ $product['product']['reference_number'] }}" name="reference_number">
                    </p>

                    <p class=" text-left ml-5 mb-2">
                        Provider:
                       <span class="ml-1"> {{ $product['product']['provider']['name'] }} </span>
                    </p>
                    <p class=" text-left ml-5 mb-2">
                       <span class="mt-2"> Select new Provider: </span>
                        <select name="provider" id="provider">
                            @foreach($providers as $provider)
                                <option value="{{ $provider->_id }}">
                                    {{ $provider->name }}
                                </option>
                            @endforeach
                        </select>
                    </p>

                    
                    <button class="bg-purple-500 hover:bg-blue-700 text-white py-2 px-4 rounded-full mb-3 mt-5 mr-3" type="submit" name="button" value="update">Update</button>                    
                    
            </form>
        </div>
           
    @endforeach

    </div>

    <button class="bg-purple-500 hover:bg-blue-700 text-white py-2 px-4 rounded-full mb-3 ">
        <a href="{{ route('realHome') }}">
        Home
        </a>
    </button>

    </body>
</html>