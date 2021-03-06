@extends('layouts.template')

@section('title','Shop | '.config('app.name'))

@section('content')
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="{{ asset('img/breadcrumb.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Shop</h2>
                        <div class="breadcrumb__option">
                            <a href="/">{{ config('app.name') }}</a>
                            <span>Shop</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-5">
                    <div class="sidebar">
                        <div class="sidebar__item">
                            <h4>CATEGORIES</h4>
                            <ul>
                                @foreach($categories as $categorie)
                                <li><a href="{{route('categorie',['id'=>$categorie->id]) }}">{{ $categorie->nom }}</a></li>
                                @endforeach
                            </ul>
                        </div>                       
                        
                    </div>
                </div>
                <div class="col-lg-9 col-md-7">
                    <div class="product__discount">
                        <div class="section-title product__discount__title">
                            <h2>Solde</h2>
                        </div>
                        <div class="row">
                            <div class="product__discount__slider owl-carousel">
                                @foreach($produits->take(5) as $produit)
                                <div class="col-lg-4">
                                    <div class="product__discount__item">
                                        <div class="product__discount__item__pic set-bg"
                                            data-setbg="{{ asset('img/produit/'.$produit->image) }}">
                                            <div class="product__discount__percent">
                                                -10%
                                            </div>
                                            <ul class="product__item__pic__hover">
                                                <li><a href="{{route('produitDetails',['id'=>$produit->id]) }}"><i class="fa fa-info-circle"></i></a></li>
                                                <li><a href="{{ route('ajouter',['id'=>$produit->id]) }}"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product__discount__item__text">
                                            <span>{{ $produit->categorie->nom }}</span>
                                            <h5><a href="{{route('produitDetails',['id'=>$produit->id]) }}">{{ $produit->nom }}</a></h5>
                                            <div class="product__item__price">{{number_format(($produit->prix) - (($produit->prix)*10)/100,2) }} Ar<span>{{ $produit->prix }} </span></div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="row">
                @foreach($produits as $produit)
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="product__item">
                        <div class="product__item__pic set-bg" data-setbg="{{ asset('img/produit/'.$produit->image) }}">
                            <ul class="product__item__pic__hover">
                                <li><a href="{{route('produitDetails',['id'=>$produit->id]) }}"><i class="fa fa-info-circle"></i></a></li>
                                
                                <li><a href="{{ route('ajouter',['id'=>$produit->id]) }}"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        
                        <div class="product__discount__item__text">
                            <span>{{ $produit->categorie->nom }}</span>
                            <h5><a href="#">{{ $produit->nom }}</a></h5>
                            <div class="product__item__price">{{ number_format($produit->prix,2) }} Ar</div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>

            <!-- Pagination begin-->
            <div class="d-flex justify-content-center">

                {{  $produits->links() }}

            </div>
            <!-- Pagination end-->

        </div>
    </section>
    <!-- Product Section End -->
@endsection