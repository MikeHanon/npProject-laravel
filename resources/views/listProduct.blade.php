@extends('layouts.app')

@section('content')




<div class="products">
<h2>{{$sub_title}}</h2>
    <div class=" row main-products">
        
        @foreach($products as $product)
            <div class="col-12 col-md-6 col-lg-4">
                <div class="card">
                    <img class="card-img-top" src="{{asset($product->getImage())}}" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title"><a href="product.html" title="View Product">{{$product->name}}</a></h4>
                        <p class="card-text">{{$product->description}}</p>
                        <div class="row">
                            <div class="col">
                                <p class="btn btn-danger btn-block">{{$product->price}} $</p>
                            </div>
                            <div class="col">
                                <form method="POST" action="{{route('cart.add')}}" class="form-inline my-2 my-lg-0" >
                                    @csrf
                                    <input name="id" type="hidden" value="{{$product->id}}">
                                    <button class="btn btn-success btn-block" type="submit">Add to cart</button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            @endforeach
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