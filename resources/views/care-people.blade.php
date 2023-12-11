@extends('base')

@section('content')
<div id="banner-area" class="banner-area" style="background-image:url(images/banner/banner4.jpg)">
  <div class="banner-text">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title">CARE-PEOPLE</h1>
                  <h3 class="mt-2" style="color:#FFD700">People’s Legacy</h3>
              </div>
          </div><!-- Col end -->
        </div><!-- Row end -->
    </div><!-- Container end -->
  </div><!-- Banner text end -->
</div><!-- Banner area end -->

<section id="main-container" class="main-container">
    <div class="image text-align-center text-center mb-1">
        <!-- <img height="200" src="/images/logo/fondation.jpg"> -->
    </div>
  <div class="container">
  {!! \App\Models\Textes::query()->where('nom','CARE-PEOPLE')->first()->contenu !!}

    <!-- Content row -->
  </div><!-- Conatiner end -->
</section><!-- Main container end -->

@endsection
