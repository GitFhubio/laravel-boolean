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
      if($id <= count($cars)){
        $car = Car::find($id);
        return view('product',['car'=>$car]);
      }else{
        abort(404);
      }

    };

  }

  public function index2($id = null)
  {$cars = Car::all();
    // return view('home', compact('cars'));
    if($id==null){
      return view('home',['cars'=>$cars]);
    }
    else{
      $car = collect($cars)->where('id', $id)->first();
      return view('product',['car'=>$car]);
    };
  }

  //  public function index3($id = null)
  //  {$cars = Car::all();
  //      // return view('home', compact('cars'));
  //      if($id==null){
  //      return view('home',['cars'=>$cars]);
  //  }
  //  else{
  //    $collection = collect($cars);
  //    $car = $collection->filter(function ($value, $id) {
  //     return collect($value)['id'] == $id;
  // });
  // return view('product',['car'=>$car]);
  // };
  //  }
}
