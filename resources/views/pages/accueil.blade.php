@extends('layouts.template')

@section('banner')
    <div class="hero__item set-bg" data-setbg="img/hero/banner.jpg">
        <div class="hero__text">
            <span>LEGIOMA</span>
            <h2>TSARA<br />100% natoraly</h2>
            <p>Profitez de la livraison gratuite</p>
            <a href="#" class="primary-btn">ACHETER</a>
        </div>
    </div>
@endsection

@section('content')
    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                    @foreach($categories as $categorie)
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="img/categories/cat-1.jpg">
                            <h5><a href="#">{{ $categorie->nom }}</a></h5>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Featured Product</h2>
                    </div>
                    <div class="featured__controls"> 
                        <ul>
                            <li class="active" data-filter="*">Tout</li>
                            @foreach($categories->take(4) as $categorie)
                            <li data-filter=".{{ $categorie->nom }}">{{ $categorie->nom }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">

                @foreach($produits->take(8) as $produit)
                <div class="col-lg-3 col-md-4 col-sm-6 mix {{ $produit->categorie->nom }}">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="{{ asset('img/produit/'.$produit->image) }}">
                            <ul class="featured__item__pic__hover">
                                <li><a href="produitDetails"><i class="fa fa-info-circle"></i></a></li>                              
                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="product__discount__item__text">
                            <span>{{ $produit->categorie->nom }}</span>
                            <h5><a href="{{route('produitDetails',['id'=>$produit->id]) }}">{{ $produit->nom }}</a></h5>
                            <div class="product__item__price">{{ number_format($produit->prix,2) }} Ar</div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </section>
    <!-- Featured Section End -->

    <!-- Banner Begin -->
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="{{asset('img/banner/banner-1.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="{{asset('img/banner/banner-2.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->

    <!-- Blog Section Begin -->
    <section class="from-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title from-blog__title">
                        <h2>Par les Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="{{asset('img/blog/blog-1.jpg')}}" alt="">
                        </div>
                        <div class="blog__item__text">
                                    <ul>
                                        <li><i class="fa fa-calendar-o"></i> 13 MAI 2022</li>
                                        <li><i class="fa fa-comment-o"></i>1</li>
                                    </ul>
                                    <h5><a href="https://www.hervecuisine.com/recette/la-recette-du-vegan-butter-chicken/">La recette du vegan butter chicken</a></h5>
                                    <p>Une recette vegan, gourmande et relevée ? Je vous propose la recette du vegan butter chicken. Que ce soit par choix ou par curiosité, testez la recette, bien relevée et pleine de saveurs ! A la recherche d’autres plats vegan ? Pourquoi ne pas essayer aussi ma Recette du One Pot Rice VEGAN ou encore ma Recette du croque veggie avocat tomate […]</p>
                                    <a href="https://www.hervecuisine.com/recette/la-recette-du-vegan-butter-chicken/" class="blog__btn">Lire la suite<span class="arrow_right"></span></a>
                                </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="{{asset('img/blog/blog-2.jpg')}}" alt="">
                        </div>
                        <div class="blog__item__text">
                                    <ul>
                                        <li><i class="fa fa-calendar-o"></i> 13 MAI 2022</li>
                                        <li><i class="fa fa-comment-o"></i>2</li>
                                    </ul>
                                    <h5><a href="https://www.hervecuisine.com/recette/recette-des-tartelettes-aux-fraises-mariguettes-label-rouge/">Recette des tartelettes aux fraises Mariguettes label rouge</a></h5>
                                    <p>C’est la saison des fraises, alors profitez-en ! Aujourd’hui, je vous propose ma recette de tartelettes aux fraises Mariguettes label rouge cultivées dans le Lot et Garonne. La Mariguette se reconnait facilement avec sa forme allongée et son bon goût sucré...</p>
                                    <a href="https://www.hervecuisine.com/recette/recette-des-tartelettes-aux-fraises-mariguettes-label-rouge/" class="blog__btn">Lire la suite<span class="arrow_right"></span></a>
                                </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="{{asset('img/blog/blog-3.jpg')}}" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> 24 JUIN 2021</li>
                                <li><i class="fa fa-comment-o"></i>6</li>
                            </ul>
                            <h5><a href="https://www.hervecuisine.com/recette/recette-de-la-tarte-rustique-aux-abricots/">Recette de la tarte rustique aux abricots 6 BY HERVÉ PALMIERI DERNIÈRE MISE À JOUR LE 24 JUIN 2021</a></h5>
                            <p>Aujourd’hui, je vous propose la recette de la tarte rustique aux abricots ! C’est une recette super simple de tarte rustique ! Vous pouvez faire aussi bien la faire aux abricots qu’aux pommes ou encore aux poires ! Surtout n’hésitez ...</p>
                            <a href="https://www.hervecuisine.com/recette/recette-de-la-tarte-rustique-aux-abricots/" class="blog__btn">Lire la suite<span class="arrow_right"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->
@endsection