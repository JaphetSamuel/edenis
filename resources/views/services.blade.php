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
                <div class="card mb-3 col-12 col-md-8" >
                    <div class="row g-0">
                        <div class="col-md-4 align-self-center">
                            <img loading="lazy" width='300px' src="images/edenis-maket.jpg" class="img-fluid rounded-start " alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h4 class="card-title">Edenis Market</h4>
                                <p class="card-text">e-commerce et marketplace pour les entreprises africaines.
                                    Nous comptons être présent dans les 54 pays de l'Afrique au bout de 2 ans.
                                    Nous avons l' experience des pays et une équipe de marketing qui nous représente
                                    dans beaucoup de pays</p>

                                <x-ecosystemmodal tag="edenis_market"></x-ecosystemmodal>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-25 "></div>
                <div class="w-25"></div>

                <div class="card mb-3 col-12 col-md-8" >
                    <div class="row g-0">
                        <div class="col-md-4 align-self-center">
                            <img loading="lazy" width='300px' src="images/logo/pay.jpg" class="img-fluid rounded-start " alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h4 class="card-title">Edenis pay</h4>
                                <p class="card-text">Plateforme d'échange qui facilitera les transactions entre
                                    toutes monnaies africaines et autre devise, EDENCOIN.
                                    cette monnaie sera acceptée dans toutes les sociétés de EDENIS GROUP</p>

                                <x-ecosystemmodal tag="edenis_pay"></x-ecosystemmodal>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-25 "></div>
                <div class="w-25"></div>

                <div class="card mb-3 col-12 col-md-8" >
                    <div class="row g-0">
                        <div class="col-md-4 align-self-center">
                            <img loading="lazy" width='300px' src="images/logo/logistic.jpg" class="img-fluid rounded-start " alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h4 class="card-title">Edenis Logistics</h4>
                                <p class="card-text">pour le transport et livraison des biens et repas il sera également le service de livraison
                                    de EDENIS MARKET et de EDENIS FARM. Les pionniers niveau pays achètent la franchise de livraison
                                    pour assurer la logistique et le transport au service d cela communauté EDENIS</p>
                                </p>

                                <x-ecosystemmodal tag="edenis_logistics"></x-ecosystemmodal>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-25 "></div>
                <div class="w-25"></div>

                <div class="card mb-3 col-12 col-md-8" >
                    <div class="row g-0">
                        <div class="col-md-4 align-self-center">
                            <img loading="lazy" width='300px' src="images/logo/label.jpg" class="img-fluid rounded-start " alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h4 class="card-title">Edenis Label</h4>
                                <p class="card-text">Promouvoir et financier la recherche et le développement de produits labellisés EDENIS.
                                    Des concours de recherches et d’invention et promotion des meilleurs produits</p>

                                <x-ecosystemmodal tag="edenis_label"></x-ecosystemmodal>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-25 "></div>
                <div class="w-25"></div>

                <div class="card mb-3 col-12 col-md-8" >
                    <div class="row g-0">
                        <div class="col-md-4 align-self-center">
                            <img loading="lazy" width='300px' src="images/logo/blockchain.jpg" class="img-fluid rounded-start " alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h4 class="card-title">Edenis Blockchain</h4>
                                <p class="card-text">Projets cryptographiques, SmartDeFi, NFTs, Metaverse EDENIS, DAO, DNS etc…</p>

                                <x-ecosystemmodal tag="edenis_blockchain"></x-ecosystemmodal>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-25 "></div>
                <div class="w-25"></div>

                <div class="card mb-3 col-12 col-md-8" >
                    <div class="row g-0">
                        <div class="col-md-4 align-self-center">
                            <img loading="lazy" width='300px' src="images/logo/brand.jpg" class="img-fluid rounded-start " alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h4 class="card-title">Edenis Brand</h4>
                                <p class="card-text">pour la marque EDENIS, nous comptons créer une marque africaine appelée EDENIS.
                                    La plus grande marque la plus consommée en Afrique </p>

                                <x-ecosystemmodal tag="edenis_brand"></x-ecosystemmodal>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-25 "></div>
                <div class="w-25"></div>

                <div class="card mb-3 col-12 col-md-8" >
                    <div class="row g-0">
                        <div class="col-md-4 align-self-center">
                            <img loading="lazy" width='300px' src="images/logo/media.jpg" class="img-fluid rounded-start " alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h4 class="card-title">Edenis Media</h4>
                                <p class="card-text">pour la communication, le marketing, la formation au metier du digital,
                                    la Télévision EDENIS TV. Promotion de la culture africaine.
                                    C'est la plus grande agence de communication de l’Afrique en 2030,</p>

                                <x-ecosystemmodal tag="edenis_media"></x-ecosystemmodal>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-25 "></div>
                <div class="w-25"></div>

                <div class="card mb-3 col-12 col-md-8" >
                    <div class="row g-0">
                        <div class="col-md-4 align-self-center">
                            <img loading="lazy" width='300px' src="images/logo/database.jpg" class="img-fluid rounded-start " alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h4 class="card-title">Edenis DATA BASE</h4>
                                <p class="card-text">EDENIS DATA BASE est une entreprise africaine spécialisée
                                    dans la production et la gestion de bases
                                    de données globales pour offrir des services de qualité à ses clients.</p>

                                <x-ecosystemmodal tag="edenis_database"></x-ecosystemmodal>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-25 "></div>
                <div class="w-25"></div>

                <div class="card mb-3 col-12 col-md-8" >
                    <div class="row g-0">
                        <div class="col-md-4 align-self-center">
                            <img loading="lazy" width='300px' src="images/logo/banque.jpg" class="img-fluid rounded-start " alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h4 class="card-title">Edenis Bank & Insurance</h4>
                                <p class="card-text">EDENIS Bank et Assurance est une institution
                                    financière africaine qui a pour objectif de promouvoir le développement
                                    économique et social en Afrique en offrant des solutions d'investissement,
                                    d'épargne et de financement aux entreprises, aux particuliers et aux institutions publiques.</p>

                                <x-ecosystemmodal tag="edenis_bank"></x-ecosystemmodal>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-25 "></div>
                <div class="w-25"></div>

                <div class="card mb-3 col-12 col-md-8" >
                    <div class="row g-0">
                        <div class="col-md-4 align-self-center">
                            <img loading="lazy" width='300px' src="images/logo/factories.jpg" class="img-fluid rounded-start " alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h4 class="card-title">Edenis Factory</h4>
                                <p class="card-text">pour la transformation des produits agricoles et autres.
                                    Des raffineries d'huile et autres produits de première nécessité.
                                    La première usine se mettra en place au debut de la deuxième année de lancement de EDENIS MARKET</p>

                                <x-ecosystemmodal tag="edenis_factory"></x-ecosystemmodal>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-25 "></div>
                <div class="w-25"></div>

                <div class="card mb-3 col-12 col-md-8" >
                    <div class="row g-0">
                        <div class="col-md-4 align-self-center">
                            <img loading="lazy" width='300px' src="images/logo/farm.jpg" class="img-fluid rounded-start " alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h4 class="card-title">Edenis FARMS</h4>
                                <p class="card-text">Pour la production agricole afin d'assurer l'autosuffisance alimentaire
                                    des africains le surplus pourra être exporter. Nous lançons la premiere ferme
                                    expérimentale fin août 2023 au Togo</p>

                                <x-ecosystemmodal tag="edenis_farms"></x-ecosystemmodal>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-25 "></div>
                <div class="w-25"></div>

                <div class="card mb-3 col-12 col-md-8" >
                    <div class="row g-0">
                        <div class="col-md-4 align-self-center">
                            <img loading="lazy" width='300px' src="images/logo/real.jpg" class="img-fluid rounded-start " alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h4 class="card-title">Edenis Real Estate</h4>
                                <p class="card-text">pour assurer un logement de qualité respectueux de l'environnement
                                    et à un prix abordable á toutes personne vivant sur le continent africain.</p>

                                <x-ecosystemmodal tag="edenis_estate"></x-ecosystemmodal>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-25 "></div>
                <div class="w-25"></div>

                <div class="card mb-3 col-12 col-md-8" >
                    <div class="row g-0">
                        <div class="col-md-4 align-self-center">
                            <img loading="lazy" width='300px' src="images/logo/academy.jpg" class="img-fluid rounded-start " alt="...">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h4 class="card-title">Edenis Academy</h4>
                                <p class="card-text">EDENIS ACADEMY est un institut de
                                    formation innovant qui vise à offrir une éducation de qualité aux étudiants africains.</p>

                                <x-ecosystemmodal tag="edenis_academy"></x-ecosystemmodal>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-25 "></div>
                <div class="w-25"></div>
            </div>
            <!-- Content row end -->

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
