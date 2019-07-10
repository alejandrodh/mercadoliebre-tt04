<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Lista de productos</h1>
    <a href="/products">Todos</a>
    <a href="/category/carnes">Carnes</a>
    <a href="/category/pastas">Pastas</a>
    <a href="/category/postres">Postres</a>
    <a href="/category/pescados">Pescados</a>
    <section>
      @foreach ($products as $product)
      <article>
        <p>Categoría: <a href="/category/{{$product->category}}">{{$product->category}}</a></p>
        <p>Nombre: {{$product->name}}</p>
        <p>Precio: {{$product->price}}</p>
        <p><a href="/product/{{$product->id}}">Ver más</a></p>
        {{-- <p><a href="#">Comprar</a></p> --}}
        <img src="/storage/product/{{$product->image}}" alt="">

      </article>
      @endforeach
    </section>

  </body>
</html>
