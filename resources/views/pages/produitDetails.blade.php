@extends('layouts.template')

@section('title','Détails | '.config('app.name'))

@section('content')
	
	<!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="{{ asset('img/breadcrumb.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Détails du produit</h2>
                        <div class="breadcrumb__option">
                            <a href="/">{{ config('app.name') }}</a>
                            <span>Détails</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Product Details Section Begin -->
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__pic">
                        <div class="product__details__pic__item">
                            <img class="product__details__pic__item--large"
                                src="{{ asset('img/produit/'.$produit->image) }}" alt="">
                        </div>
                        <div class="product__details__pic__slider owl-carousel">
<<<<<<< HEAD
                            <img src="{{ asset('img/produit/details/thumb-1.jpg') }}" alt="">
                            <img src="{{ asset('img/produit/details/thumb-2.jpg') }}" alt="">
                            <img src="{{ asset('img/produit/details/thumb-3.jpg') }}" alt="">
                            <img src="{{ asset('img/produit/details/thumb-4.jpg') }}" alt="">
=======
                            <img data-imgbigurl="img/product/details/product-details-2.jpg"
                                src="{{ asset('img/product/details/thumb-1.jpg') }}" alt="">
                            <img data-imgbigurl="img/product/details/product-details-3.jpg"
                                src="{{ asset('img/product/details/thumb-2.jpg') }}" alt="">
                            <img data-imgbigurl="img/product/details/product-details-5.jpg"
                                src="{{ asset('img/product/details/thumb-3.jpg') }}" alt="">
                            <img data-imgbigurl="img/product/details/product-details-4.jpg"
                                src="{{ asset('img/product/details/thumb-4.jpg') }}" alt="">
>>>>>>> dev
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="product__details__text">
                        <h3>{{ $produit->nom }}</h3>
                        <div class="product__details__rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            
                        </div>
                        <div class="product__details__price">{{ number_format($produit->prix,2) }} Ar</div>
                        <p>{{ $produit->description }}</p>
                        <form action="{{ route('ajouterPanier',['id'=>$produit->id]) }}" method="POST">
                            @csrf
                            <div class="product__details__quantity">
                                <div class="quantity">
                                    <div class="pro-qty">
                                        <input type="text" name="quantite" value="1">
                                    </div>
                                </div>
                            </div>
<<<<<<< HEAD
                            <button type="submit" class="primary-btn">ACHETER</button>
=======
                            <button type="submit" class="primary-btn">ADD TO CARD</button>
>>>>>>> dev
                    
                        </form>
                        
                        <ul>
            
                            <li><b>Categorie</b> <span>{{ $produit->categorie->nom }}</span></li>
                            <li><b>Disponible</b> <span>Oui</span></li>
                            <li><b>Poids</b> <span>{{ $produit->poids }}</span></li>
                            <li><b>Partager</b>
                                <div class="share">
                                    <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
                                    <a href="https://www.twitter.com/"><i class="fa fa-twitter"></i></a>
                                    <a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>
                                    <a href="https://www.pinterest.com/"><i class="fa fa-pinterest"></i></a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="product__details__tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab"
                                    aria-selected="true">Description</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab"
                                    aria-selected="false">Information</a>
                            </li>
                            
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <h6>Description du produit</h6>
                                    <p>{{ $produit->description }}</p>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-2" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <h6>Infomation du produit</h6>
                                    <p>Catégorie :{{ $produit->categorie->nom }}</p>
                                    <p>Poids :{{ $produit->poids }}</p>
                                    <p>Producteur :E-TSENA</p>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Details Section End -->

   
@endsection