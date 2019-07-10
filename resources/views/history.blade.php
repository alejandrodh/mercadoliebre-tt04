<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Mis carritos</h1>
    <section>

        <ul>
          @forelse ($carts as $cart)
            Numero de carrito: {{$cart[0]->cart_num}}
            @foreach ($cart as $item)
              <li>{{$item->name}}, {{$item->price}}</li>
            @endforeach
          @empty
            <p>No tiene historial de carritos</p>
          @endforelse
        </ul>



    </section>


  </body>
</html>
