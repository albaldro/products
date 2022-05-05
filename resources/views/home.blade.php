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




  <!-- 
            <div class="grid grid-cols-1 justify-center text-lg">
                <table class="m-5 border-2 border-black max-w-xl border-collapse rounded-lg max-h-xl">
                    
                        <td></td>

                        <th class="border border-slate-300 text-center p-3 rounded-md">
                            {{ $product['product']['name'] }}
                        </th>

                        <th class="border border-slate-300 text-center p-3">
                            Nombre proveedor
                        </th>
                            
                    </tr>

                    
                        <td class="border border-slate-300 text-center p-2">
                            ID
                        </td>

                        <td class="border border-slate-300 text-center p-2">
                            {{ $product['product']['id'] }}
                        </td>
                            
                        <td class="border border-slate-300 text-center p-2">
                            id proveedor
                        </td>
                    </tr>

                    
                        <td class="border border-slate-300 text-center p-2">
                            Reference Nº
                        </td>

                        <td colspan="2" class="border border-slate-300 text-center p-2">
                            {{ $product['product']['reference_number'] }}
                        </td>
                    </tr>
                </table>
            -->