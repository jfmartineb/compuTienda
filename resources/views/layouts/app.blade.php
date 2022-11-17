<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous" />
    <!-- fontawesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- css-->
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet" />

    <title>@yield('title', 'Online Store')</title>
</head>

<body>
        <!-- navbar -->
    <nav class = "navbar navbar-expand-lg navbar-light bg-white py-4 fixed-top">
        <div class = "container">
            <a class = "navbar-brand d-flex justify-content-between align-items-center order-lg-0" href = "index.html">
                <img src = "images/shopping-bag-icon.png" alt = "site icon">
                <span class = "text-uppercase fw-lighter ms-2">{{ __('layouts.attire') }}</span>
            </a>
            <div class="order-lg-2 nav-btns text-center">
                <div class="vr bg-white mx-2 d-none d-lg-block"></div>
                @guest
                <a class="nav-link active" href="{{ route('login') }}">{{__('layouts.login')}}</a>
                <a class="nav-link active" href="{{ route('register') }}">{{__('layouts.register')}}</a>
                @else
                <a class="nav-link active" href="{{ route('myaccount.orders') }}">{{__('layouts.myOrders')}}</a>
                <form id="logout" action="{{ route('logout') }}" method="POST">
                    <a role="button" class="nav-link active" onclick="document.getElementById('logout').submit();">{{__('layouts.logout')}}</a>
                    @csrf
                </form>
                @endguest
            </div>

            <button class = "navbar-toggler border-0" type = "button" data-bs-toggle = "collapse" data-bs-target = "#navMenu">
                <span class = "navbar-toggler-icon"></span>
            </button>

            <div class = "collapse navbar-collapse order-lg-1" id = "navMenu">
                <ul class = "navbar-nav mx-auto text-center">
                    <li class = "nav-item px-2 py-2">
                        <a class = "nav-link text-uppercase text-dark" href="{{ route('home.index') }}">{{__('layouts.home')}}</a>
                    </li>
                    <li class = "nav-item px-2 py-2">
                        <a class = "nav-link text-uppercase text-dark" href="{{ route('home.about') }}">{{__('layouts.about')}}</a>
                    </li>
                    <li class = "nav-item px-2 py-2">
                        <a class = "nav-link text-uppercase text-dark" href = "{{ route('cart.index') }}">{{__('layouts.cart')}}</a>
                    </li>
                    <li class = "nav-item px-2 py-2 border-0">
                        <a class = "nav-link text-uppercase text-dark" href = "#popular">{{__('layouts.popular')}}</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
                            @switch(session()->get('locale'))
                            @case('es')
                            <img src="{{asset('/flag/co.png')}}" width="25" height="25"> {{__('layouts.spanish')}}
                            @break
                            @default
                            <img src="{{asset('/flag/en.png')}}" width="25" height="25"> {{__('layouts.english')}}
                            @endswitch
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('language', ['locale'=> 'en']) }}"><img src="{{asset('flag/en.png')}}" width="25" height="25"> {{__('layouts.english')}}</a></li>
                            <li><a class="dropdown-item" href="{{ route('language', ['locale'=> 'es']) }}"><img src="{{asset('flag/co.png')}}" width="25" height="25"> {{__('layouts.spanish')}}</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- navbar -->
    
    <!-- Container -->
    <div class="container my-4">
    @yield('content')
</div>
<!-- Container -->

<!-- footer -->
<footer class = "bg-dark py-5">
        <div class = "container">
            <div class = "row text-white g-4">
                <div class = "col-md-6 col-lg-3">
                    <a class = "text-uppercase text-decoration-none brand text-white" href = "index.html">{{__('layouts.attire')}}</a>
                    <p class = "text-white text-muted mt-3">{{__('layouts.loremIpsum')}}</p>
                </div>

                <div class = "col-md-6 col-lg-3">
                    <h5 class = "fw-light">{{__('layouts.links')}}</h5>
                    <ul class = "list-unstyled">
                        <li class = "my-3">
                            <a href = "#" class = "text-white text-decoration-none text-muted">
                                <i class = "fas fa-chevron-right me-1"></i> {{__('layouts.home')}}
                            </a>
                        </li>
                        <li class = "my-3">
                            <a href = "#" class = "text-white text-decoration-none text-muted">
                                <i class = "fas fa-chevron-right me-1"></i> {{__('layouts.collections')}}
                            </a>
                        </li>
                        <li class = "my-3">
                            <a href = "#" class = "text-white text-decoration-none text-muted">
                                <i class = "fas fa-chevron-right me-1"></i> {{__('layouts.blogs')}}
                            </a>
                        </li>
                        <li class = "my-3">
                            <a href = "#" class = "text-white text-decoration-none text-muted">
                                <i class = "fas fa-chevron-right me-1"></i> {{__('layouts.about')}}
                            </a>
                        </li>
                    </ul>
                </div>

                <div class = "col-md-6 col-lg-3">
                    <h5 class = "fw-light mb-3">{{__('layouts.contact')}}</h5>
                    <div class = "d-flex justify-content-start align-items-start my-2 text-muted">
                        <span class = "me-3">
                            <i class = "fas fa-map-marked-alt"></i>
                        </span>
                        <span class = "fw-light">
                            Albert Street, New York, AS 756, United States of America
                        </span>
                    </div>
                    <div class = "d-flex justify-content-start align-items-start my-2 text-muted">
                        <span class = "me-3">
                            <i class = "fas fa-envelope"></i>
                        </span>
                        <span class = "fw-light">
                            attire.support@gmail.com
                        </span>
                    </div>
                    <div class = "d-flex justify-content-start align-items-start my-2 text-muted">
                        <span class = "me-3">
                            <i class = "fas fa-phone-alt"></i>
                        </span>
                        <span class = "fw-light">
                            +9786 6776 236
                        </span>
                    </div>
                </div>

                <div class = "col-md-6 col-lg-3">
                    <h5 class = "fw-light mb-3">{{__('layouts.follow')}}</h5>
                    <div>
                        <ul class = "list-unstyled d-flex">
                            <li>
                                <a href = "#" class = "text-white text-decoration-none text-muted fs-4 me-4">
                                    <i class = "fab fa-facebook-f"></i>
                                </a>
                            </li>
                            <li>
                                <a href = "#" class = "text-white text-decoration-none text-muted fs-4 me-4">
                                    <i class = "fab fa-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href = "#" class = "text-white text-decoration-none text-muted fs-4 me-4">
                                    <i class = "fab fa-instagram"></i>
                                </a>
                            </li>
                            <li>
                                <a href = "#" class = "text-white text-decoration-none text-muted fs-4 me-4">
                                    <i class = "fab fa-pinterest"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end of footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"> </script>
</body>

</html>