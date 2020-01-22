@extends('layouts.app')

@section('content')
<form action="{{ route('products.update',$product->id) }}" method="post">
    @csrf
    @method('PUT')

    <input type="hidden" name="url" value="test">
<input type="hidden" name="content" value="test">
<input type="hidden" name="user_id" value="2">
    <div class="product-page-main">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-6">
                    <div class="prod-page-title">

                        <label for="name">Nom</label>
                        <input class="form-control" type="text" name="name" id="" value="{{ $product->name }}" required>
                        <a class="btn btn-primary mt-5" href="{{ route('products.index') }}"> Back</a>
                    </div>
                </div>
            </div>
            <label for="avatar"> ajouter une image :</label>
                            <input type="file"  value="" id="avatar">
                            <input type="hidden" name="image" value="{{ $product->image }}">
            <div class="col-md-7 col-sm-8">
                <div class="md-prod-page">

                    <div class="description-box">
                        <div class="dex-a">
                            <h4>Description</h4>
                            <textarea name="description" id="" cols="85" rows="10" style="border : 1px solid black" required>{{ $product->description }}</textarea>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-12">
                <div class="price-box-right">

                    <label for="prix">Prix</label>
                    <input class="form-control" type="text" name="price" id="" value="{{ $product->price }}" required> <span>€ par piece</span>
                    <label for="quantité">stock = </label>
                    <input class="form-control" type="text" name="quantity" id="" value="" required>

                    <label for="category_id"> Catégorie </label>
                    <select class="form-control" name="category_id">
                        <option id="" value="1">Alimentation</option>
                        <option id="" value="2">Batiments</option>
                        <option id="" value="3">Fabrication</option>
                        <option id="" value="4">Service</option>
                    </select>

                    <button class="btn btn-primary" style="margin-top: 10px" name="update" type="submit">modifier l'article</button>
                </div>

            </div>
        </div>
    </div>
    </div>
    </div>
</form>
@endsection

@section('script')
<script src="./js/jquery-1.12.4.min.js"></script>

<script src="./js/bootstrap.min.js"></script>
<script src="./js/bootstrap-select.min.js"></script>
<script src="./js/slick.min.js"></script>
<script src="./js/wow.min.js"></script>

<script src="./js/custom.js"></script>
@endsection