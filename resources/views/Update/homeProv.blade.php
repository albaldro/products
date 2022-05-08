<!doctype html>
<html>
    <head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>

    <body class="text-center bg-lime-200">

        <div class="flex justify-center text-center">

        @foreach($providers as $provider)

            <div class="flex justify-center m-10">
                <form method="GET" class="border-2 rounded-lg border-black w-64 bg-cyan-200 " action="{{ route('updateProvForm') }}">

                    <h1 class="text-4xl font-bold mb-5 ml-3 mr-3 ">Details</h1>

                    <input class="mbr-5 w-52" type="hidden" value="{{ $provider['provider']['id'] }}" readonly name="id">


                        <p class="mb-2 text-left ml-5">
                            Name: <br>
                            <input class="mbr-5 w-52" type="text" value="{{ $provider['provider']['name'] }}" name="name">
                        </p>

                        <button class="bg-purple-500 hover:bg-blue-700 text-white py-2 px-4 rounded-full mb-3 mt-5 mr-3" type="submit" name="button" value="update">Update</button>
                        
                        <button class="bg-purple-500 hover:bg-blue-700 text-white py-2 px-4 rounded-full mb-3 mt-5" type="submit" name="button" value="delete">Delete</button>
                     
                        
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