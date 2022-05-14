@extends('layouts.template')

@section('content')
	<!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="{{ asset('img/breadcrumb.jpg') }}">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>RESULTATS DE VOTRE RECHERCHE</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">me-Tsena</a>
                            <span>categorie</span>
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

                    <div class="filter__item">
                        <div class="row">
                            <div class="col-lg-4 col-md-5">
                                <div class="filter__sort">
                                    <span>Sort By</span>
                                    <select>
                                        <option value="0">Default</option>
                                        <option value="0">Default</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4">
                                <div class="filter__found">
                                    <h6><span>{{ $nbProduits }}</span> Produits trouvés</h6>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-3">
                                <div class="filter__option">
                                    <span class="icon_grid-2x2"></span>
                                    <span class="icon_ul"></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="product__discount">
                        
                        <div class="row">
                            
                            @foreach($produits as $produit)
                            <div class="col-lg-4">
                                <div class="product__discount__item">
                                    <div class="product__discount__item__pic set-bg"
                                        data-setbg="{{ asset('img/produit/'.$produit->image) }}">
                                        <ul class="product__item__pic__hover">
                                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product__discount__item__text">
                                        <span>{{ $produit->categorie->nom }}</span>
                                        <h5><a href="#">{{ $produit->nom }}</a></h5>
                                        <div class="product__item__price">{{ number_format($produit->prix,2) }} Ar</span></div>
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
                

            </div>

        </div>
    </section>
    <!-- Product Section End -->
@endsection