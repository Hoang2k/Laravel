<?php

namespace App\Http\Controllers;
use App\product;
use Illuminate\Http\Request;

class showModalController extends Controller
{
    public function getProductById(){
        $product=product::all();
        dd($product);
        return response()->json($product);

    }
}
