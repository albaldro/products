<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
  </head>
  <body>
    @foreach ($products as $product)
      <div>
        <h2>{{ $product->name }}</h2>
      </div>
    @endforeach
    
    {{ $products->links() }}
  </body>
</html>