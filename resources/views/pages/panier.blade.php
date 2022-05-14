@extends('layouts.template')

@section('content')
	<!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Shopping Cart</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Home</a>
                            <span>Shopping Cart</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shoping Cart Section Begin -->
    @if(Session::has('utilisateur'))
    <section class="shoping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__table">
                        <table>
                            <thead>
                                <tr>
                                    <th class="shoping__product">Produit</th>
                                    <th>Prix</th>
                                    <th>Quantité</th>                  
                                    <th>Total</th>
                                    <th></th>
                                    
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($paniers as $panier)
                                <tr>
                                    <td class="shoping__cart__item">
                                        <img src="img/cart/cart-1.jpg" alt="">
                                        <h5>{{ $panier->name }}</h5>
                                    </td>
                                    <td class="shoping__cart__price">
                                        {{ $panier->price }}
                                    </td>

                                    <form action="{{ route('modifierPanier', ['id'=>$panier->id]) }}" method="POST">
                                    @csrf
                                    <td class="shoping__cart__quantity">
                                        <div class="quantity">
                                            <div class="pro-qty">
                                                <input type="text" name="quantite"onchange="this.form.submit()" value="{{ $panier->quantity }}">
                                            </div>
                                            <button type="submit"><i class="fa fa-refresh"></i></button>
                                        </div>
                                       
                                    </td>
                                    </form>

                                    <td class="shoping__cart__total">
                                       {{ number_format($panier->price * $panier->quantity,2) }} 
                                    </td>
                                    <td class="shoping__cart__item__close">
                                        <a href="{{route('supprimerPanier',['id'=>$panier->id]) }}"><span class="icon_close"></span></a>
                                    </td>
                                    <td class="shoping__cart__item__close">
                                        <span class="icon_edit"></span>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="shoping__cart__btns">
                        <a href="#" class="primary-btn cart-btn">CONTINUE SHOPPING</a>
                        <a href="#" class="primary-btn cart-btn cart-btn-right"><span class="icon_loading"></span>
                            Supprimer tout</a>
                    </div>
                </div>
            
                <div class="col-lg-6">
                    <div class="shoping__checkout">
                        <h5>Cart Total</h5>
                        <ul>
                            <li>Sous-total <span>{{ number_format(Cart::session(session()->get('utilisateur')['id'])->getSubTotal(),2) }} Ar</span></li>
                            <li>Total <span>{{ number_format(Cart::session(session()->get('utilisateur')['id'])->getTotal(),2) }} Ar</span></li>
                        </ul>
                        <a href="#" class="primary-btn">PROCEED TO CHECKOUT</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @else
    <br>
    <div class="d-flex justify-content-center">
        <div class="alert alert-warning" role="alert">
            <h2> {{ $message }} </h2>
        </div>
    </div>
    @endif
    <!-- Shoping Cart Section End -->
@endsection