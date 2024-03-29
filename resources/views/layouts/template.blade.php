<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <!-- Google Font -->
    <link href="{{asset('css/fonts.css')}}" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="{{ asset('img/logo.png') }}" alt=""></a>
        </div>
        @if(Session::has('utilisateur'))
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>{{ Cart::session(session()->get('utilisateur')['id'])->getTotalQuantity()}}</span></a></li>
            </ul>
            <div class="header__cart__price">Total: <span>{{ number_format(Cart::session(session()->get('utilisateur')['id'])->getSubTotal(),2) }} Ar</span>
            </div>
        </div>
        @else
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="/panier"><i class="fa fa-shopping-bag"></i> <span>0</span></a></li>
            </ul>
            <div class="header__cart__price">Total: <span>0 Ar</span>
            </div>
        </div>
        @endif
        <div class="humberger__menu__widget">
            <div class="header__top__right__language">
                <img src="{{ asset('img/language.png') }}" alt="">
                <div>Malagasy</div>
            </div>
            @if(Session::has('utilisateur'))
            <div class="header__top__right__auth">
                <a href="/login"><i class="fa fa-user"></i>Deconnexion</a>
            </div>
            @else
            <div class="header__top__right__auth">
                <a href="/login"><i class="fa fa-user"></i>Connexion</a>
            </div>
            <div class="header__top__right__auth">
                <a href="/inscription"><i class="fa fa-user"></i>Inscription</a>
            </div>
            @endif
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="@if(Route::is('accueil')) active @endif"><a href="/">Accueil</a></li>
                <li class="@if(Route::is('shop')) active @endif"><a href="/shop">Shop</a></li>
                <li class="@if(Route::is('panier')) active @endif"><a href="/panier">Panier</a></li>
                <li class="@if(Route::is('blog')) active @endif"><a href="/blog">Blog</a></li>
                <li class="@if(Route::is('contact')) active @endif"><a href="/contact">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="https://www.facebook.com/mika.tankim/"><i class="fa fa-facebook"></i></a>
            <a href="https://www.instagram.com/shelby.rk/"><i class="fa fa-instagram"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> mika.rakotondraibe@gmail.com</li>
                <li>Free Shipping for all Order of $99</li>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i>mika.rakotondraibe@gmail.com</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="https://www.facebook.com/mika.tankim/"><i class="fa fa-facebook"></i></a>
                                <a href="https://www.instagram.com/shelby.rk/"><i class="fa fa-instagram"></i></a>
                            </div>
                            <div class="header__top__right__language">
                                <img src="{{ asset('img/language.png') }}" alt="">
                                <div>Malagasy</div>  
                            </div>
                            @if(Session::has('utilisateur'))
                            <div class="header__top__right__auth">
                                <a href="/deconnexion"><i class="fa fa-user"></i>Deconnexion</a>
                            </div>
                            @else
                            <div class="header__top__right__auth">
                                <a href="/login"><i class="fa fa-user"></i>Connexion |</a>
                            </div>
                            <div class="header__top__right__auth">
                                <a href="/inscription">Inscription</a>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="/"><img src="{{ asset('img/logo.png') }}" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="@if(Route::is('accueil')) active @endif"><a href="/">accueil</a></li>
                            <li class="@if(Route::is('shop')) active @endif"><a href="/shop">Shop</a></li>
                            <li class="@if(Route::is('panier')) active @endif"><a href="/panier">Panier</a></li>
                            <li class="@if(Route::is('blog')) active @endif"><a href="/blog">Blog</a></li>
                            <li class="@if(Route::is('contact')) active @endif"><a href="/contact">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                @if(Session::has('utilisateur'))
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><a href="/panier"><i class="fa fa-shopping-bag"></i> <span>{{ Cart::session(session()->get('utilisateur')['id'])->getTotalQuantity()}}</span></a></li>
                        </ul>
                        <div class="header__cart__price">Total: <span>{{ number_format(Cart::session(session()->get('utilisateur')['id'])->getSubTotal(),2) }} Ar</span></div>
                    </div>
                </div>
                @else
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><a href="/panier"><i class="fa fa-shopping-bag"></i> <span>0</span></a></li>
                        </ul>
                        <div class="header__cart__price">Total: <span>0 Ar</span></div>
                    </div>
                </div>
                @endif
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero @if(! Route::is('accueil')) hero-normal @endif">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>CATEGORIES</span>
                        </div>
                        <ul>
                            @foreach($categories as $categorie)
                            <li><a href="{{route('categorie',['id'=>$categorie->id]) }}">{{ $categorie->nom }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="/recherche">
                                <div class="hero__search__categories">
                                       Tous les catégories
                                </div>
                                <input type="text" name="query"placeholder="Inona no tianao jerena ?">
                                <button type="submit" class="site-btn">RECHERCHE</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>0349852916</h5>
                                <span>Disponible</span>
                            </div>
                        </div>
                    </div>
                    @yield('banner')
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    @yield('content')

    @include('layouts.footer')

    <!-- Js Plugins -->
    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('js/jquery.slicknav.js')}}"></script>
    <script src="{{asset('js/mixitup.min.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>

</body>

</html>