<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
  // Calculo del total en el modelo. Una opción sería hacerlo en el controlador.
  // public function getTotal($array){
  //   $total = 0;
  //
  //   foreach ($array as $item) {
  //     $total += $item->quantity * $item->price;
  //   }
  //   return $total;
  //
  // }
}
