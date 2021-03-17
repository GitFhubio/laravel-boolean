<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car;
class CarController extends Controller
{
  public function index($id = null)
  {$cars = Car::all();
      // return view('home', compact('cars'));
      if($id==null){
      return view('home',['cars'=>$cars]);
  }
  else{
    $car = collect($cars)->where('id', $id);
    return view('product',['car'=>$car]);
   // $car=array_filter($cars, function($item) {
   //  return $item->id == $id ;});
   //  dd($car);
   //   var_dump($car);
   //  return view('product',['car'=>$car]);
  }
}
}
