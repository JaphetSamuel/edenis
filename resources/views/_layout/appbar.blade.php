<header id="header" class="header-one">


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
                                <li class="nav-item active"><a class="nav-link"  href="{{route('home')}}">
                                        <img src="images/EDENIS-GROUP.png" width="50">
                                        <b style="color:#FFD700">EDENIS GROUP</b>
                                    </a></li>
                                <li class="nav-item dropdown ">
                                    <a href="{{route('home')}}" class="nav-link dropdown-toggle" data-toggle="dropdown">Accueil <i class="fa fa-angle-down"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="{{route('home')}}#about_us">Qui sommes-nous ?</a></li>
                                        <li><a href="{{route('home')}}">Valeur & Vision</a></li>
                                        <li><a href="{{route('home')}}">Mission & Leadership</a></li>
                                        <li><a href="{{route('home')}}">D'où venons nous ?</a></li>
                                        <li><a href="{{route('home')}}">Où allons nous ?</a></li>

                                    </ul>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="{{route('our_service')}}">Notre Ecosysteme</a></li>

                                <li class="nav-item dropdown">
                                    <a href="{{ route('join_us') }}" class="nav-link">Engagez-vous avec nous </a>
                                </li>

                                <li class="nav-item"><a class="nav-link" href="{{route('blog')}}">Blog</a></li>

                                <li class="nav-item"><a class="nav-link" href="{{route('fondation')}}">Notre Fondation</a></li>

                                <li class="nav-item"><a class="nav-link" href="{{route('contact')}}">Contact</a></li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <!--/ Col end -->
            </div>
            <!--/ Row end -->

            
        <!--/ Container end -->

    </div>
    <!--/ Navigation end -->
    
</header>
