
@extends('base')

@section('content')
    <div class="banner-carousel banner-carousel-1 mb-0">
        <div class="banner-carousel-item" style="background-image:url(images/slider-main/bg1.jpg)">
            <div class="slider-content">
                <div class="container h-100">
                    <div class="row align-items-center h-100">
                        <div class="col-md-12 text-center">
                            <h2 class="slide-sub-title display-3 bold" style='color:#FFD700' data-animation-in="slideInLeft">Edenis Group</h2>
                            <h3 class="slide-sub-title" data-animation-in="slideInRight">Une vision africaine, conçue par les africains, pour l'Afrique </h3>
                            <p data-animation-in="slideInLeft" data-duration-in="1.2">
                                <a href="{{ route('our_service') }}" class="slider btn btn-primary">Notre écosysteme</a>
                                <a href="{{ route('join_us') }}" class="slider btn btn-primary border">Rejoignez nous</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="banner-carousel-item" style="background-image:url(images/slider-main/bg2.jpg)">
            <div class="slider-content text-left">
                <div class="container h-100">
                    <div class="row align-items-center h-100">
                        <div class="col-md-12">

                            <h3 class="slide-sub-title" data-animation-in="slideInLeft">Proudly <span style='color:#FFD700'>African</span></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="banner-carousel-item" style="background-image:url(images/slider-main/bg3.jpg)">
            <div class="slider-content text-right">
                <div class="container h-100">
                    <div class="row align-items-center h-100">
                        <div class="col-md-12">
                            <h2 class="slide-title" style='color:#FFD700;font-weight:900' data-animation-in="slideInDown">Edenis group</h2>
                            <h3 class="slide-sub-title" data-animation-in="fadeIn">Leader de la construction de la nouvelle Afrique</h3>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <section id="ts-features" class="ts-features">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="ts-intro">
                        <h3 id="about_us" class="into-sub-title" >Qui sommes nous ?</h3>
                        {!! \App\Models\Textes::query()->where('nom','QUI SOMMES NOUS ?')->first()->contenu !!}
                    </div><!-- Intro box end -->




                </div><!-- Col end -->

                <div class="col-lg-6 mt-4 mt-lg-0">
                    <h3 class="into-sub-title">Nos valeurs</h3>

                    <div class="accordion accordion-group" id="our-values-accordion">
                        <div class="card">
                            <div class="card-header p-0 bg-transparent" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Être créatifs et innovants
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#our-values-accordion">
                                <div class="card-body">
                                La créativité et l’innovation sont inscrites dans les gènes de EDENIS GROUP et auront, au fil du temps, assuré le succès de nos sociétés et assis leur légitimité.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header p-0 bg-transparent" id="headingTwo">
                                <h2 class="mb-0">
                                    <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Offrir l’excellence
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#our-values-accordion">
                                <div class="card-body">
                                Au sein du Groupe, aucun compromis n’est possible sur la qualité. Une attention minutieuse est portée aux détails et à la qualité  : du produit au service, c’est dans cette
                                quête  permanente d’excellence que EDENIS GROUP cultive sa différence.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header p-0 bg-transparent" id="headingThree">
                                <h2 class="mb-0">
                                    <button class="btn btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Cultiver l’esprit d’entreprise
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#our-values-accordion">
                                <div class="card-body">
                                Agile, l’organisation décentralisée de EDENIS GROUP favorise l’efficacité et la réactivité. Elle stimule
                                les initiatives individuelles en confiant des responsabilités importantes à chaque membre.
                                 Cela facilite la prise de risque, dans la persévérance soutenu par un esprit pragmatique
                                et une aptitude à federer les  / équipes en les entraînant vers des objectifs plus ambitieux
                                </div>
                            </div>
                        </div>
                        <div class="gap-20"></div>
                        <div class="gap-20"></div>
                        <h3 class="into-sub-title">Notre Mission</h3>
                        <h4>Devenir leader de la construction de la nouvelle Afrique</h4>
                            <div class="gap-20"></div>
                            <div class="gap-20"></div>
                            <div class="gap-20"></div>
                        <div class="row">
                        <div class="col-md-6">
                            <div class="ts-service-box">
                    <span class="ts-service-icon">
                      <i class="fas fa-trophy"></i>
                    </span>
                                <div class="ts-service-box-content">
                                    <h3 class="service-box-title">Nous prônons l'excellence,</h3>
                                </div>
                            </div><!-- Service 1 end -->
                        </div><!-- col end -->

                        <div class="col-md-6">
                            <div class="ts-service-box">
                    <span class="ts-service-icon">
                      <i class="fas fa-sliders-h"></i>
                    </span>
                                <div class="ts-service-box-content">
                                    <h3 class="service-box-title">Dans un partenariat durable,</h3>
                                </div>
                            </div><!-- Service 2 end -->
                        </div><!-- col end -->
                    </div><!-- Content row 1 end -->

                    <div class="row">
                        <div class="col-md-6">
                            <div class="ts-service-box">
                    <span class="ts-service-icon">
                      <i class="fas fa-thumbs-up"></i>
                    </span>
                                <div class="ts-service-box-content">
                                    <h3 class="service-box-title">Guidés par l'engagement</h3>
                                </div>
                            </div><!-- Service 1 end -->
                        </div><!-- col end -->

                        <div class="col-md-6">
                            <div class="ts-service-box">
                    <span class="ts-service-icon">
                      <i class="fas fa-users"></i>
                    </span>
                                <div class="ts-service-box-content">
                                    <h3 class="service-box-title">Avec une équipe de professionels</h3>
                                </div>
                            </div><!-- Service 2 end -->
                        </div><!-- col end -->
                    </div><!-- Content row 1 end -->
                    </div>
                    <!--/ Accordion end -->
                    <div>
                        <h1 class="into-sub-title">Leadership</h1>
                        {!! \App\Models\Textes::query()->where('nom','LEADERSHIP')->first()->contenu !!}
                    </div>

                </div><!-- Col end -->
            </div><!-- Row end -->
        </div><!-- Container end -->
    </section><!-- Feature are end -->

    <section id="facts" class="facts-area dark-bg">
        <div class="container">
            <div class="facts-wrapper">
                <div class="row">
                    <div class="col-md-4 col-sm-6 ts-facts">
                        <div class="ts-facts-img">
                            <img loading="lazy" src="images/icon-image/fact1.png" alt="facts-img">
                        </div>
                        <div class="ts-facts-content">
                            <h2 class="ts-facts-num"><span class="counterUp" data-count="750">0</span></h2>
                            <h3 class="ts-facts-title">Nombres de visiteurs</h3>
                        </div>
                    </div><!-- Col end -->

                    <div class="col-md-4 col-sm-6 ts-facts mt-5 mt-sm-0">
                        <div class="ts-facts-img">
                            <img loading="lazy" src="images/icon-image/fact2.png" alt="facts-img">
                        </div>
                        <div class="ts-facts-content">
                            <h2 class="ts-facts-num"><span class="counterUp" data-count="{{ \App\Models\Adhesion::query()->count() + 200 }}">0</span></h2>
                            <h3 class="ts-facts-title">Membres</h3>
                        </div>
                    </div><!-- Col end -->


                    <div class="col-md-4 col-sm-6 ts-facts mt-5 mt-md-0">
                        <div class="ts-facts-img">
                            <img loading="lazy" src="images/icon-image/fact4.png" alt="facts-img">
                        </div>
                        <div class="ts-facts-content">
                            <h2 class="ts-facts-num"><span class="counterUp" data-count="{{\App\Models\Adhesion::query()->groupBy(['pays'])->count() + 8 }}">0</span></h2>
                            <h3 class="ts-facts-title">Pays touchés</h3>
                        </div>
                    </div><!-- Col end -->

                </div> <!-- Facts end -->
            </div>
            <!--/ Content row end -->
        </div>
        <!--/ Container end -->
    </section><!-- Facts end -->


{{--    <section class="content">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-12">--}}
{{--                    <h3 class="column-title">Ce qu'ils en pensent </h3>--}}

{{--                    <div id="testimonial-slide" class="testimonial-slide">--}}
{{--                        <div class="item">--}}
{{--                            <div class="quote-item">--}}
{{--                    <span class="quote-text">--}}
{{--                      Question ran over her cheek When she reached the first hills of the Italic Mountains, she had a last--}}
{{--                      view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the--}}
{{--                      subline of her own road.--}}
{{--                    </span>--}}

{{--                                <div class="quote-item-footer">--}}
{{--                                    <!-- <img loading="lazy" class="testimonial-thumb" src="" alt="testimonial"> -->--}}
{{--                                    <div class="quote-item-info">--}}
{{--                                        <h3 class="quote-author">Gabriel Denis</h3>--}}
{{--                                        <span class="quote-subtext">Chairman, OKT</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div><!-- Quote item end -->--}}
{{--                        </div>--}}
{{--                        <!--/ Item 1 end -->--}}

{{--                        <div class="item">--}}
{{--                            <div class="quote-item">--}}
{{--                    <span class="quote-text">--}}
{{--                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci done idunt ut--}}
{{--                      labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitoa tion ullamco laboris--}}
{{--                      nisi aliquip consequat.--}}
{{--                    </span>--}}

{{--                                <div class="quote-item-footer">--}}
{{--                                    <!-- <img loading="lazy" class="testimonial-thumb" src="images/clients/testimonial2.png" alt="testimonial"> -->--}}
{{--                                    <div class="quote-item-info">--}}
{{--                                        <h3 class="quote-author">Weldon Cash</h3>--}}
{{--                                        <span class="quote-subtext">CFO, First Choice</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div><!-- Quote item end -->--}}
{{--                        </div>--}}
{{--                        <!--/ Item 2 end -->--}}

{{--                        <div class="item">--}}
{{--                            <div class="quote-item">--}}
{{--                    <span class="quote-text">--}}
{{--                      Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor inci done idunt ut--}}
{{--                      labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitoa tion ullamco laboris--}}
{{--                      nisi ut commodo consequat.--}}
{{--                    </span>--}}

{{--                                <div class="quote-item-footer">--}}
{{--                                    <!-- <img loading="lazy" class="testimonial-thumb" src="images/clients/testimonial3.png" alt="testimonial"> -->--}}
{{--                                    <div class="quote-item-info">--}}
{{--                                        <h3 class="quote-author">Minter Puchan</h3>--}}
{{--                                        <span class="quote-subtext">Director, AKT</span>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div><!-- Quote item end -->--}}
{{--                        </div>--}}
{{--                        <!--/ Item 3 end -->--}}

{{--                    </div>--}}
{{--                    <!--/ Testimonial carousel end-->--}}
{{--                </div><!-- Col end -->--}}

{{--                --}}{{----}}
{{--                <div class="col-lg-6 mt-5 mt-lg-0">--}}

{{--                    <h3 class="column-title">Happy Clients</h3>--}}

{{--                    <div class="row all-clients">--}}
{{--                        <div class="col-sm-4 col-6">--}}
{{--                            <figure class="clients-logo">--}}
{{--                                <a href="#!"><img loading="lazy" class="img-fluid" src="images/clients/client1.png" alt="clients-logo" /></a>--}}
{{--                            </figure>--}}
{{--                        </div><!-- Client 1 end -->--}}

{{--                        <div class="col-sm-4 col-6">--}}
{{--                            <figure class="clients-logo">--}}
{{--                                <a href="#!"><img loading="lazy" class="img-fluid" src="images/clients/client2.png" alt="clients-logo" /></a>--}}
{{--                            </figure>--}}
{{--                        </div><!-- Client 2 end -->--}}

{{--                        <div class="col-sm-4 col-6">--}}
{{--                            <figure class="clients-logo">--}}
{{--                                <a href="#!"><img loading="lazy" class="img-fluid" src="images/clients/client3.png" alt="clients-logo" /></a>--}}
{{--                            </figure>--}}
{{--                        </div><!-- Client 3 end -->--}}

{{--                        <div class="col-sm-4 col-6">--}}
{{--                            <figure class="clients-logo">--}}
{{--                                <a href="#!"><img loading="lazy" class="img-fluid" src="images/clients/client4.png" alt="clients-logo" /></a>--}}
{{--                            </figure>--}}
{{--                        </div><!-- Client 4 end -->--}}

{{--                        <div class="col-sm-4 col-6">--}}
{{--                            <figure class="clients-logo">--}}
{{--                                <a href="#!"><img loading="lazy" class="img-fluid" src="images/clients/client5.png" alt="clients-logo" /></a>--}}
{{--                            </figure>--}}
{{--                        </div><!-- Client 5 end -->--}}

{{--                        <div class="col-sm-4 col-6">--}}
{{--                            <figure class="clients-logo">--}}
{{--                                <a href="#!"><img loading="lazy" class="img-fluid" src="images/clients/client6.png" alt="clients-logo" /></a>--}}
{{--                            </figure>--}}
{{--                        </div><!-- Client 6 end -->--}}

{{--                    </div><!-- Clients row end -->--}}

{{--                </div><!-- Col end -->--}}
{{--                --}}

{{--            </div>--}}
{{--            <!--/ Content row end -->--}}
{{--        </div>--}}
{{--        <!--/ Container end -->--}}
{{--    </section><!-- Content end -->--}}

    <section class="subscribe no-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="subscribe-call-to-acton">
                        <h3>Besoin d'aide ?</h3>
                        <h4>+226-651-616-86</h4>
                    </div>
                </div><!-- Col end -->

                <div class="col-lg-8">
                    <div class="ts-newsletter row align-items-center">
                        <div class="col-md-5 newsletter-introtext">
                            <h4 class="text-white mb-0">Inscrivez-vous à notre Newsletter</h4>
                        </div>

                        <div class="col-md-7">
                            <form method='post' action='{{ route("post-newsmail")}}'>
                                @csrf
                                <div class="form-group" >
                                    <label for="newsletter-email" class="content-hidden">Newsletter Email</label>
                                    <input type="email" name="email" id="newsletter-email" class="form-control form-control-lg" placeholder="Entrez votre e-mail"/>
                                </div>
                                <button type='submit' class='btn btn-primary text-white'>Valider</button>
                            </form>
                        </div>
                    </div><!-- Newsletter end -->
                </div><!-- Col end -->

            </div><!-- Content row end -->
        </div>
        <!--/ Container end -->
    </section>
    <!--/ subscribe end -->



@endsection
