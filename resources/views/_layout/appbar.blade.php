<header id="header" class="header-one">
{{--    <div class="bg-white">--}}
{{--        <div class="container">--}}
{{--            <div class="logo-area">--}}
{{--                <div class="row align-items-center">--}}
{{--                    <div class="logo col-lg-3 text-center text-lg-left mb-3 mb-md-5 mb-lg-0">--}}
{{--                        <a class="d-block" href="index.html">--}}
{{--                            <img loading="lazy" src="images/logo.png" alt="Constra">--}}
{{--                        </a>--}}
{{--                    </div><!-- logo end -->--}}

{{--                    <div class="col-lg-9 header-right">--}}
{{--                        <ul class="top-info-box">--}}
{{--                            <li>--}}
{{--                                <div class="info-box">--}}
{{--                                    <div class="info-box-content">--}}
{{--                                        <p class="info-box-title">Call Us</p>--}}
{{--                                        <p class="info-box-subtitle">(+9) 847-291-4353</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                            <li>--}}
{{--                                <div class="info-box">--}}
{{--                                    <div class="info-box-content">--}}
{{--                                        <p class="info-box-title">Email Us</p>--}}
{{--                                        <p class="info-box-subtitle">office@Constra.com</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                            <li class="last">--}}
{{--                                <div class="info-box last">--}}
{{--                                    <div class="info-box-content">--}}
{{--                                        <p class="info-box-title">Global Certificate</p>--}}
{{--                                        <p class="info-box-subtitle">ISO 9001:2017</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </li>--}}
{{--                            <li class="header-get-a-quote">--}}
{{--                                <a class="btn btn-primary" href="contact.html">Get A Quote</a>--}}
{{--                            </li>--}}
{{--                        </ul><!-- Ul end -->--}}
{{--                    </div><!-- header right end -->--}}
{{--                </div><!-- logo area end -->--}}

{{--            </div><!-- Row end -->--}}
{{--        </div><!-- Container end -->--}}
{{--    </div>--}}

    <div class="site-navigation">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-dark p-0">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div id="navbar-collapse" class="collapse navbar-collapse">
                            <ul class="nav navbar-nav mr-auto">
                                <li class="nav-item active"><a class="nav-link" href="{{route('home')}}">
                                        <img src="images/EDENIS-GROUP.png" width="50">
                                        EDENIS GROUP
                                    </a></li>
                                <li class="nav-item dropdown ">
                                    <a href="{{route('home')}}" class="nav-link dropdown-toggle" data-toggle="dropdown">Accueil <i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="{{route('home')}}">Qui sommes-nous ?</a></li>
                                        <li><a href="{{route('home')}}">Valeur & Vision</a></li>
                                        <li><a href="{{route('home')}}">Mission & Leadership</a></li>
                                        <li><a href="{{route('home')}}">D'où venons nous ?</a></li>
                                        <li><a href="{{route('home')}}">Où allons nous ?</a></li>

                                    </ul>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="{{route('our_service')}}">Notre Ecosystem</a></li>

                                <li class="nav-item dropdown">
                                    <a href="{{ route('join_us') }}" class="nav-link">Engager vous avec nous </a>
                                </li>

                                <li class="nav-item"><a class="nav-link" href="{{route('blog')}}">Blog</a></li>

                                <li class="nav-item"><a class="nav-link" href="{{route('contact')}}">Contact</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <!--/ Col end -->
            </div>
            <!--/ Row end -->

            <div class="nav-search">
                <span id="search"><i class="fa fa-search"></i></span>
            </div><!-- Search end -->

            <div class="search-block" style="display: none;">
                <label for="search-field" class="w-100 mb-0">
                    <input type="text" class="form-control" id="search-field" placeholder="Type what you want and enter">
                </label>
                <span class="search-close">&times;</span>
            </div><!-- Site search end -->
        </div>
        <!--/ Container end -->

    </div>
    <!--/ Navigation end -->
</header>
