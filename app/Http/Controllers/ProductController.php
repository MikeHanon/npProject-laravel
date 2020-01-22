<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $params = [
            'title' => 'E-artisanat shop',
            'sub_title' => 'Tous nos produits',
            'products' => Product::all(),
        ];
        return view('listProduct')->with($params);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       

        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
     
        $request->validate([
            
            'category_id'=>'required',
            'user_id'=>'required',
        'name'=>'required',
        'description'=>'required',
        'price' => 'required',
        'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
  
        $imageName = time().'.'.$request->image->extension();  
   
        $request->image->move(public_path('images/product'), $imageName);

        Product::create($request->all());
        
        return redirect()->route('home')->with('succes', 'Produit ajouté avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        
        $request->validate([
            
            'category_id'=>'required',
            'user_id'=>'required',
        'name'=>'required',
        'description'=>'required',
        'price' => 'required',
        
        ]);
  
       

        $product->update($request->all());
        
        return redirect()->route('home')->with('succes', 'Produit modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('home')->with('success', 'Produit supprimé avec success');
    }
    public function categories($url)
    {
        $category = Category::whereUrl($url)->first();

        $params = [
            'title'=> $category->title,
            'sub_title'=> "Produit dans la categorie $category->title category",
            'products' => $category->products,
        ];

        return view('listProduct')->with($params);
    }
}
