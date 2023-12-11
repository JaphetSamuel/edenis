@extends('base')

@section('content')
<div id="banner-area" class="banner-area" style="background-image:url(images/banner/banner4.jpg)">
  <div class="banner-text">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title">Notre Ecosysteme</h1>
              </div>
          </div><!-- Col end -->
        </div><!-- Row end -->
    </div><!-- Container end -->
  </div><!-- Banner text end -->
</div><!-- Banner area end -->

<section id="main-container" class="main-container">
  <div class="container">

  <section id="ts-service-area" class="ts-service-area pb-0">
        <div class="container">
            <div class="row text-center">
                <div class="col-12">
                    <h2 class="section-title">L'ensemble de nos Societés</h2>
                    <h3 class="section-sub-title">Ce que nous faisons</h3>
                </div>
            </div>
            <!--/ Title row end -->

            <div class="row">
                <div class="col-lg-4">  
                    <div class="ts-service-box d-flex">
                        <div class="ts-service-box-img">
                            <img loading="lazy" width='90px' src="images/edenis-maket.jpg" alt="service-icon">
                        </div>
                        <div class="ts-service-box-info">
                            <h3 class="service-box-title"><a href="{{route('service_market')}}">Edenis Market</a></h3>
                            <p>e-commerce et marketplace pour les entreprises africaines.
                              Nous comptons être présent dans les 54 pays de l'Afrique au bout de 2 ans.
                              Nous avons l' experience des pays et une équipe de marketing qui nous représente
                              dans beaucoup de pays</p>
                            <button type="button" class="btn btn-primary" data-toggle="modal" datas-target="#exampleModal">
                                voir plus
                            </button>
                        </div>
                    </div><!-- Service 1 end -->

                    <div class="ts-service-box d-flex">
                        <div class="ts-service-box-img">
                            <img loading="lazy" width='90px'   src="images/logo/logistic.jpg" alt="service-icon">
                        </div>
                        <div class="ts-service-box-info">
                            <h3 class="service-box-title"><a href="#">Edenis Logistics</a></h3>
                            <p>pour le transport et livraison des biens et repas il sera également le service de livraison 
                              de EDENIS MARKET et de EDENIS FARM. Les pionniers niveau pays achètent la franchise de livraison 
                              pour assurer la logistique et le transport au service d cela communauté EDENIS</p>
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                voir plus
                            </button>
                        </div>
                    </div><!-- Service 2 end -->

                    <div class="ts-service-box d-flex">
                        <div class="ts-service-box-img">
                            <img loading="lazy" width='90px' src="images/logo/pay.jpg"  alt="service-icon">
                        </div>
                        <div class="ts-service-box-info">
                            <h3 class="service-box-title"><a href="#">Edenis Pay</a></h3>
                            <p>Plateforme d'échange qui facilitera les transactions entre 
                              toutes monnaies africaines et autre devise, EDENCOIN.
                               cette monnaie sera acceptée dans toutes les sociétés de EDENIS GROUP</p>
                            <x-ecosystemmodal tag="edenis_pay"></x-ecosystemmodal>
                        </div>
                    </div><!-- Service 3 end -->

                    <div class="ts-service-box d-flex">
                        <div class="ts-service-box-img">
                            <img loading="lazy" width='90px' src="images/logo/label.jpg"  alt="service-icon">
                        </div>
                        <div class="ts-service-box-info">
                            <h3 class="service-box-title"><a href="#">Edenis Label</a></h3>
                            <p>Promouvoir et financier la recherche et le développement de produits labellisés EDENIS.
                               Des concours de recherches et d’invention et promotion des meilleurs produits</p>
                        </div>
                    </div><!-- Service 3 end -->

                </div><!-- Col end -->
                <div class="col-lg-4">  
                    <div class="ts-service-box d-flex">
                        <div class="ts-service-box-img">
                            <img loading="lazy" width='90px' src="images/logo/blockchain.jpg" alt="service-icon">
                        </div>
                        <div class="ts-service-box-info">
                            <h3 class="service-box-title"><a href="#">Edenis blockchain</a></h3>
                            <p>Projets cryptographiques, SmartDeFi, NFTs, Metaverse EDENIS, DAO, DNS etc…</p>
                        </div>
                    </div><!-- Service 1 end -->

                    <div class="ts-service-box d-flex">
                        <div class="ts-service-box-img">
                            <img loading="lazy" width='90px' src="images/logo/brand.jpg" alt="service-icon">
                        </div>
                        <div class="ts-service-box-info">
                            <h3 class="service-box-title"><a href="#">Edenis Brand</a></h3>
                            <p>pour la marque EDENIS, nous comptons créer une marque africaine appelée EDENIS.
                               La plus grande marque la plus consommée en Afrique </p>
                        </div>
                    </div><!-- Service 2 end -->

                    <div class="ts-service-box d-flex">
                        <div class="ts-service-box-img">
                            <img loading="lazy" width='90px' src="images/logo/media.jpg"  alt="service-icon">
                        </div>
                        <div class="ts-service-box-info">
                            <h3 class="service-box-title"><a href="#">Edenis Media</a></h3>
                            <p>pour la communication, le marketing, la formation au metier du digital,
                               la Télévision EDENIS TV. Promotion de la culture africaine.
                               C'est la plus grande agence de communication de l’Afrique en 2030,</p>
                        </div>
                    </div><!-- Service 3 end -->

                    <div class="ts-service-box d-flex">
                        <div class="ts-service-box-img">
                            <img loading="lazy" width='90px' src="images/logo/database.jpg"  alt="service-icon">
                        </div>
                        <div class="ts-service-box-info">
                            <h3 class="service-box-title"><a href="#">Edenis Database</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat</p>
                        </div>
                    </div><!-- Service 3 end -->

                    <div class="ts-service-box d-flex">
                        <div class="ts-service-box-img">
                            <img loading="lazy" width='90px' src="images/logo/banque.jpg"  alt="service-icon">
                        </div>
                        <div class="ts-service-box-info">
                            <h3 class="service-box-title"><a href="#">Edenis Bank & Insurance</a></h3>
                            <section class="dolessmore dolessmoreblock dlmcontract">
                                {!!
                                    \App\Models\Textes::query()->where('nom','EDENIS BANK & INSURANCE ')->first()->contenu
                                !!}
                                </section>
                        </div>
                    </div><!-- Service 3 end -->

                </div><!-- Col end -->

                <div class="col-lg-4 mt-5 mt-lg-0 mb-4 mb-lg-0">
                    <div class="ts-service-box d-flex">
                        <div class="ts-service-box-img">
                            <img loading="lazy" width='90px' src="images/logo/factories.jpg" alt="service-icon">
                        </div>
                        <div class="ts-service-box-info">
                            <h3 class="service-box-title"><a href="#">Edenis Factory</a></h3>
                            <p>pour la transformation des produits agricoles et autres. 
                              Des raffineries d'huile et autres produits de première nécessité.  
                              La première usine se mettra en place au debut de la deuxième année de lancement de EDENIS MARKET</p>
                        </div>
                    </div><!-- Service 4 end -->

                    <div class="ts-service-box d-flex">
                        <div class="ts-service-box-img">
                            <img loading="lazy" width='90px' src="images/logo/farm.jpg" alt="service-icon">
                        </div>
                        <div class="ts-service-box-info">
                            <h3 class="service-box-title"><a href="#">Edenis Farm</a></h3>
                            <p>Pour la production agricole afin d'assurer l'autosuffisance alimentaire
                              des africains le surplus pourra être exporter. Nous lançons la premiere ferme  
                              expérimentale fin avril 2022 au Togo</p>
                        </div>
                    </div><!-- Service 5 end -->

                    <div class="ts-service-box d-flex">
                        <div class="ts-service-box-img">
                        <img loading="lazy" width='90px' src="images/logo/real.jpg" alt="service-icon">
                        </div>
                        <div class="ts-service-box-info">
                            <h3 class="service-box-title"><a href="#">Edenis Real Estate</a></h3>
                            <p>pour assurer un logement de qualité respectueux de l'environnement 
                              et à un prix abordable á toutes personne vivant sur le continent africain.</p>
                        </div>
                    </div><!-- Service 6 end -->
                    <div class="ts-service-box d-flex">
                        <div class="ts-service-box-img">
                            <img loading="lazy" width='90px' src="images/logo/academy.jpg" alt="service-icon">
                        </div>
                        <div class="ts-service-box-info">
                            <h3 class="service-box-title"><a href="#">Edenis Academy</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit Integer adipiscing erat</p>
                        </div>
                    </div><!-- Service 6 end -->
                </div><!-- Col end -->
            </div><!-- Content row end -->

        </div>
        <!--/ Container end -->
    </section><!-- Service end -->

    <!-- Content row -->
  </div><!-- Conatiner end -->
</section><!-- Main container end -->

{{--    modal --}}
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>

@endsection
