<?php

namespace App\Http\Controllers;

use Cart;
use App\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function add(Request $request){
        $product = Product::find($request->id);

        Cart::add($product->id, $product->name, $product->price, 1, array());
        
        return back()->with('success', "$product->name a été ajouté avec succès à votre panier");
    }

    public function cart(){
        $params =[
            'title'=> 'Validation de votre panier',
        ];

        return view('cart')->with($params);
    }

    public function clear(){
        Cart::clear();

        return back()->with('success', "Votre panier a bien été vidé");
    }
}
