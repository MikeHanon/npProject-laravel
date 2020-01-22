@extends('layouts.app')

@section('content')

<form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data" >
@csrf
<input type="hidden" name="user_id" value="2">
<input type="hidden" name="url" value="test">
<input type="hidden" name="content" value="test">
<div class="product-page-main">
    <div class="container">
    <div class="row">
            <div class="col-md-7 col-sm-8">
                <div class="prod-page-title">
                    <label for="article_name">Nom de l'article</label>
                    <input class="form-control" type="text" name="name" id="" required>

                </div>
            </div>
        </div>
    <div class="row">
        
        <div class="col-md-7 col-sm-8">
            <div class="md-prod-page">
                <div class="md-prod-page-in">
                    <div class="page-preview">
                        <div class="preview">
                            <label for="avatar"> ajouter une image :</label>
                            <input type="file" name="image" id="avatar">
                        </div>
                    </div>
                </div>
                <div class="description-box">
                    <div class="dex-a">
                        <h4>Description</h4>
                        <textarea name="description" id="" cols="85" rows="10" style="border : 1px solid black" required></textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-12">
            <div class="price-box-right">
                <h4>Prix</h4>
                <label for="price">Prix</label>
                <input class="form-control" type="text" name="price" id="" required><span>par piece</span>
                <br>
                <label for="quantité">stock = </label>
                <input class="form-control" type="text" name="quantité" id="" required>
                <label for="category_id"> Catégorie </label>
                <select  class="form-control" name="category_id">
                    <option  id="" value="1">Alimentation</option>
                    <option  id="" value="2">Batiments</option>
                    <option  id="" value="3">Fabrication</option>
                    <option  id="" value="4">Service</option>
                </select>
                <button class="btn btn-primary" style="margin-top: 10px" name="create" type="submit">ajouter l'article</button>
            </div>

        </div>
        </form>
    </div>
</div>
</div>
@endsection

@section('script')
<script src="./js/jquery-1.12.4.min.js"></script>

<script src="./js/bootstrap.min.js"></script>
<script src="./js/bootstrap-select.min.js"></script>
<script src="./js/slick.min.js"></script>
<script src="./js/wow.min.js"></script>

<script src="./js/custom.js"></script>
@endsection