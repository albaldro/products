<!doctype html>
<html">
    <head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    </head>
    <body>
        @foreach($products as $product)

        <table class="m-5 border-2 border-black max-w-xl border-collapse rounded-lg max-h-xl">
            <tr>
                <td>

                </td>
                <th class="border border-slate-300 text-center p-3">
                    {{ $product['product']['name'] }}
                </th>

                <th class="border border-slate-300 text-center p-3">
                    Nombre proveedor
                </th>
                
            </tr>

            <tr>
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

            <tr>
                <td class="border border-slate-300 text-center p-2">
                    Reference Nº
                </td>

                <td colspan="2" class="border border-slate-300 text-center p-2">
                    {{ $product['product']['reference_number'] }}
                </td>
            </tr>
        </table>
                        
        @endforeach
    </body>
</html>