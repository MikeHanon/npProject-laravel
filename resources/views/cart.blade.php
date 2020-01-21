@extends('layouts.app')

@section('content')
<div class="container">
<div class="col-md-4 order-md-2 mb-4">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Votre Panier</span>
        <span class="badge badge-secondary badge-pill">{{Cart::getContent()->count()}}</span>
      </h4>
        <ul class="list-group mb-3">
            @foreach(Cart::getContent() as $product)
            <li class="list-group-item d-flex justify-content-between lh-condensed">
                <div>
                    <h6 class="my-0">{{$product->name}}</h6>
                    <small class="text-muted">{{$product->quantity . ' x $' . $product->price}}</small>
                </div>
                <span class="text-muted">{{'$' . $product->price * $product->quantity}}</span>
            </li>
            @endforeach
            <li class="list-group-item d-flex justify-content-between">
                <span>Total :  (USD)</span>
                <strong>{{Cart::getSubTotal()}}</strong>
            </li>
        </ul>
        <form action="{{route('cart.clear')}}" method="POST" class="card p-2">
            @csrf
            <div class="input-group">
                <div class="input-group">
                    <button type="submit" class="btn btn-danger">Vider le panier</button>
                </div>
            </div>
        </form>
       
    </div>
    <div class="col-md-8 order-md-1">
        <h4 class="mb-3">addresse de facturation</h4>
        <form class="needs-validation" novalidate>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="firstName">Nom</label>
                    <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                    
                </div>
                <div class="col-md-6 mb-3">
                    <label for="lastName">Prénom</label>
                    <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                    <div class="invalid-feedback">
                        
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <label for="email">addresse email</label>
                <input type="email" class="form-control" id="email" placeholder="you@example.com">
                <div class="invalid-feedback">
                    
                </div>
            </div>

            <div class="mb-3">
                <label for="address">Addresse de livraison</label>
                <input type="text" class="form-control" id="address" placeholder="1234 Main St" required>
                
            </div>
            <hr class="mb-4">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="same-address">
                <label class="custom-control-label" for="same-address">Addresse de livraison identique à celle de facturation</label>
            </div>
           
            <hr class="mb-4">

            <h4 class="mb-3">Payment</h4>

            <div class="d-block my-3">
                <div class="custom-control custom-radio">
                    <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                    <label class="custom-control-label" for="credit">Carte de crédit</label>
                </div>
                <div class="custom-control custom-radio">
                    <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
                    <label class="custom-control-label" for="debit">carte de débit</label>
                </div>
                <div class="custom-control custom-radio">
                    <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
                    <label class="custom-control-label" for="paypal">PayPal</label>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="cc-name">nom sur la carte</label>
                    <input type="text" class="form-control" id="cc-name" placeholder="" required>
                   
                   
                </div>
                <div class="col-md-6 mb-3">
                    <label for="cc-number">numero de carte de crédit</label>
                    <input type="text" class="form-control" id="cc-number" placeholder="" required>
                    
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 mb-3">
                    <label for="cc-expiration">date d'expiration</label>
                    <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                   
                </div>
                
            </div>
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Valider le panier</button>
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