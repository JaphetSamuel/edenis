@extends('base')

@section('content')
    <div id="banner-area" class="banner-area" style="background-image:url(images/banner/banner4.jpg)">
        <div class="banner-text">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="banner-heading">
                            <h1 class="banner-title">Engagez-vous avec nous</h1>
                        </div>
                    </div><!-- Col end -->
                </div><!-- Row end -->
            </div><!-- Container end -->
        </div><!-- Banner text end -->
    </div><!-- Banner area end -->

    <section id="main-container" class="main-container">
        <div class="container">
            <div class="container">
                <div class="row text-center">
                    <div class="col-12">
                        <h2 class="section-title">Edenis accepte de nouveaux associés</h2>
                        {!!
                                                    \App\Models\Textes::query()->where('nom',"5 AVANTAGEs d’être dans la base de données avant Octobre 2023")->first()->contenu
                                                !!}
                        @if(session('status'))
                            <div class="alert alert-success">
                                <h2>{{ session('status') }}</h2><br><br>
                                <span class="fa fa-mail-reply"></span><span>Un mail vous a été envoyé à l'adresse {{session('sended_email')}}</span>
                            </div>
                        @endif
                    </div>
                </div>
                <!--/ Title row end -->

                <div class="row">

                    <div class="col-lg-4 col-md-6">
                        <div class="ts-pricing-box">
                            <div class="ts-pricing-header">
                                <h2 class="ts-pricing-name">Devenir actionnaire</h2>
                            </div><!-- Pricing header -->
                            <div class="ts-pricing-features">
                            </div><!-- Features end -->
                            <div class="plan-action">
                                <button type="button" class="btn btn-dark" data-toggle="modal"
                                        data-target="#adhesionFomModal">je suis interresé
                                </button>
                            </div>
                        </div><!-- Plan 1 end -->
                    </div><!-- Col end -->

                    <div class="col-lg-4 col-md-6">
                        <div class="ts-pricing-box ts-pricing-featured">
                            <div class="ts-pricing-header" style="background-color: #FFD700">
                                <h2 class="ts-pricing-name text-black-50 text-bold">Stages & Emplois</h2>
                            </div><!-- Pricing header -->
                            <div class="ts-pricing-features">
                            </div><!-- Features end -->
                            <div class="plan-action">
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                        data-target="#stageFormModal">
                                    Je m'engage
                                </button>
                            </div>
                        </div><!-- Plan 2 end -->
                    </div><!-- Col end -->

                    <div class="col-lg-4 col-md-6">
                        <div class="ts-pricing-box">
                            <div class="ts-pricing-header">
                                <h2 class="ts-pricing-name">Club des actionnaires</h2>
                            </div><!-- Pricing header -->
                            <div class="ts-pricing-features">
                            </div><!-- Features end -->
                            <div class="plan-action">
                                <a href="{{ route('care-people')}}" class="btn btn-dark">Je me connecte</a>
                            </div>
                        </div><!-- Plan 3 end -->
                    </div><!-- Col end -->

                </div>
                <div class='col-12'>

                    <!-- Button trigger modal -->


                    <!-- Modal -->
                    <div class="modal fade" id="adhesionFomModal" tabindex="-1" role="dialog"
                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <form method='post' action='{{ route("post-adhesionform") }}' class="modal-content"
                                  style="height:100%;">
                                @csrf
                                <div class="modal-header" style="background-color: #FFD700;">
                                    <h3 class="modal-title align-content-center " id="exampleModalLabel">Formulaire
                                        d'adhesion</h3>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <!--      <iframe loader='eager' src="https://forms.gle/nSE3LfxigRMhdthD6" height=600></iframe> -->
                                <div class='modal-body row'>
                                    <div class="form-group  col-12 col-md-4">
                                        <label for="nom"><i style="color:red">*</i> Nom</label>
                                        <input required  type="text" name='nom' id='nom' class='form-control'>
                                    </div>
                                    <div class="form-group col-12 col-md-8">
                                        <label for="prenom"><i style="color:red">*</i> Prenoms</label>
                                        <input required type="text" name='prenom' id='prenom' class='form-control '>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="profession">Profession</label>
                                        <input type="text" name='profession' id='profession' class='form-control '>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="pays"> <i style="color:red">*</i> Pays</label>
                                        <select required class="selectpicker countrypicker form-control" data-flag="true"
                                                id='pays' name='pays'></select>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="email"><i style="color:red">*</i> Email</label>
                                        <input required type="email" name='email' id='email' class='form-control '>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="age"><i style="color:red">*</i> Age</label>
                                        <input required type="number" name='age' id='age' class='form-control '>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="telephone">Telephone</label>
                                        <input type="tel" name='telephone' id='telephone' class='form-control '>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="connu_par"><i style="color:red">*</i> Comment avez-vous connu Edenis Group ?</label>

                                        <select required type="text" name='connu_par' id='connu_par' class='form-control '>
                                            @foreach(\App\Models\Adhesion::connu_par_value() as $value)
                                                <option value={{$value}}> {{$value}}</option>
                                            @endforeach

                                        </select>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="statut"> <i style="color:red">*</i> Quel statut souhaitez-vous rejoindre ?</label>
                                        <select required type="text" name='statut' id='statut' class='form-control '>
                                            @foreach(\App\Models\Statut::all() as $statut)
                                                <option value={{$statut->id}}>{{$statut->libelle}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div>

                                        <fieldset class="form-group col-md-12 row  m-1">
                                            <legend>A quel projet souhaitez vous participer ?</legend>
                                            @foreach(\App\Models\Projet::all() as $projet)
                                                <div class="form-check card d-flex flex-row align-items-center col-md-4 align-content-center">

                                                    <input multiple type="checkbox" name='projet' id='{{$projet->id}}'
                                                           value="{{$projet->id}}" class='check-input'/>
                                                    <label for="{{$projet->id}}"
                                                           class="check-label align-text-bottom">{{$projet->nom}}</label>
                                                </div>
                                            @endforeach
                                        </fieldset>

                                        <div class="form-group col-md-12 mt-2">
                                            <label for="projet">Commentaire constructif *</label>
                                            <textarea required name='commentaire' id='commentaire' class='form-control '></textarea>
                                        </div>
                                    </div>

                                </div>

                                <div class="modal-footer">
                                    <button type='submit' class='btn btn-lg btn-primary right'>Soumettre</button>
                                </div>

                            </form>
                        </div>
                    </div>

                    <!--- Session Modal  --->


                    <!---End Session Modal  --->

                    <div class="modal fade" id="stageFormModal" tabindex="-1" role="dialog"
                         aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">

                                <div class="modal-body">
                                    <h2>Aucune offre disponible actuellement !</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/ Content row end -->

            </div>
        </div><!-- Container end -->
    </section><!-- Main container end -->

    <link rel="stylesheet" href="//unpkg.com/bootstrap@3.3.7/dist/css/bootstrap.min.css" type="text/css"/>
    <link rel="stylesheet" href="//unpkg.com/bootstrap-select@1.12.4/dist/css/bootstrap-select.min.css"
          type="text/css"/>
    <link rel="stylesheet" href="//unpkg.com/bootstrap-select-country@4.0.0/dist/css/bootstrap-select-country.min.css"
          type="text/css"/>

    <script src="//unpkg.com/jquery@3.4.1/dist/jquery.min.js"></script>
    <script src="//unpkg.com/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>
    <script src="//unpkg.com/bootstrap-select@1.12.4/dist/js/bootstrap-select.min.js"></script>
    <script src="//unpkg.com/bootstrap-select-country@4.0.0/dist/js/bootstrap-select-country.min.js"></script>
    <script>
        $('.countrypicker').countrypicker();
    </script>

@endsection
