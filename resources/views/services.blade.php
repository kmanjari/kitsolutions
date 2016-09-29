@extends('base')

@section('content')
    <!-- WRAPPER -->
    <div class="wrapper">
        <!-- HEADER -->
        <header id="header" class="header-fullwidth header-transparent  header-dark header-navigation-light">
            <div id="header-wrap">
                <div class="container">
                    <!--LOGO-->
                    <div id="logo">
                        <a href="#" class="logo" data-dark-logo="images/logo-dark.png">
                            <img src="/images/logo.png" alt="Polo Logo">
                        </a>
                    </div>
                    <!--END: LOGO-->

                    <!--MOBILE MENU -->
                    <div class="nav-main-menu-responsive">
                        <button class="lines-button x">
                            <span class="lines"></span>
                        </button>
                    </div>
                    <!--END: MOBILE MENU -->

                    <!--SHOPPING CART -->
                    <div id="shopping-cart">
                        <span class="shopping-cart-items"></span>
                        <a href="#"><i class="fa fa-shopping-cart"></i></a>
                    </div>
                    <!--END: SHOPPING CART -->

                    <!--TOP SEARCH -->
                    <div id="top-search"> <a id="top-search-trigger"><i class="fa fa-search"></i><i class="fa fa-close"></i></a>
                        <form action="#" method="get">
                            <input type="text" name="q" class="form-control" value="" placeholder="Start typing & press  &quot;Enter&quot;">
                        </form>
                    </div>
                    <!--END: TOP SEARCH -->

                    <!--NAVIGATION-->
                @include('menu')

                <!--END: NAVIGATION-->
                </div>
            </div>
        </header>
        <!-- END: HEADER -->

        <!-- SECTION FULLSCREEN -->
        <section class="parallax text-light fullscreen fullscreen" style="background-image: url('/homepages/corporate-v6/images/7.jpg');">
            <div class="background-overlay"></div>
            <div class="container container-fullscreen">
                <div class="text-middle text-center text-light">
                    <h1 class="text-uppercase text-large" data-animation="fadeInDown" data-animation-delay="100">SERVICES</h1>
                    <p class="lead" data-animation="fadeInDown" data-animation-delay="300">What We Do</p>
                </div>

            </div>
        </section>
        <!-- END: SECTION FULLSCREEN -->

    <section>
        <div class="container">
            <div class="heading heading-center"> </div>

            <div class="row">
                @foreach($services as $service)
                    <div class="col-md-4">
                        <div class="icon-box effect medium border center">
                            <div class="icon">
                                <a href="#"><i class="{{$service->image}}"></i></a>
                            </div>
                            <h3>{{$service->heading}}</h3>
                            <p>{{$service->description}}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

    </section>

    {{--<div class="jumbotron jumbotron-fullwidth background-colored text-light m-b-0">
        <div class="container">
            <h3>Simply, we are the best!</h3>
            <p>This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
            <a class="button transparent icon-right" href="#"><span>Buy POLO</span></a>
        </div>
    </div>--}}


    @include('footer')

@endsection()