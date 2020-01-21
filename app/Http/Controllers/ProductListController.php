<?php

namespace App\Http\Controllers;
use App\Product;
use App\Category;
use Illuminate\Http\Request;

class ProductListController extends Controller
{
    public function listProduct()
    {
        $params = [
            'title' => 'E-artisanat shop',
            'sub_title' => 'Tous nos produits',
            'products' => Product::all(),
        ];
        return view('products')->with($params);
    }

    public function categories($url)
    {
        $category = Category::wherUrl($url)->first();

        $params = [
            'title'=> $category->title,
            'sub_title'=> "Produit dans la categorie $category->title category",
            'products' => $category->products,
        ];

        return view('products')->with($params);
    }
}
