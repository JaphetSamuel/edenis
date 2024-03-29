@extends('base')

@section('content')
<div id="banner-area" class="banner-area" style="background-image:url(images/banner/banner4.jpg)">
  <div class="banner-text">
    <div class="container">
        <div class="row">
          <div class="col-lg-12">
              <div class="banner-heading">
                <h1 class="banner-title">Contactez-nous</h1>
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
    <!-- <h2 class="section-title">Reaching our Office</h2> -->
    <h3 class="section-sub-title">Comment nous contacter</h3>
  </div>
</div>
<!--/ Title row end -->

<div class="row">
<!-- 
  <div class="col-md-4">
    <div class="ts-service-box-bg text-center h-100">
      <span class="ts-service-icon icon-round">
        <i class="fas fa-map-marker-alt mr-0"></i>
      </span>
      <div class="ts-service-box-content">
        <h4>Visit Our Office</h4>
        <p>9051 Constra Incorporate, USA</p>
      </div>
    </div>
  </div> Col 1 end -->
  <div class="col-md-2"></div>

  <div class="col-md-4 col-offset-2">
    <div class="ts-service-box-bg text-center h-100">
      <span class="ts-service-icon icon-round">
        <i class="fa fa-envelope mr-0"></i>
      </span>
      <div class="ts-service-box-content">
        <h4>Email </h4>
        <p>office@group-edenis.com</p>
      </div>
    </div>
  </div><!-- Col 2 end -->

  <div class="col-md-4">
    <div class="ts-service-box-bg text-center h-100">
      <span class="ts-service-icon icon-round">
        <i class="fa fa-phone-square mr-0"></i>
      </span>
      <div class="ts-service-box-content">
        <h4>Telephone</h4>
        <p>+226-651-616-86</p>
      </div>
    </div>
  </div><!-- Col 3 end -->

</div><!-- 1st row end -->

<div class="gap-60"></div>



<div class="gap-40"></div>

<div class="row">
  <div class="col-md-12">
    <h3 class="column-title">Formulaire de contact</h3>
    <!-- contact form works with formspree.io  -->
    <!-- contact form activation doc: https://docs.themefisher.com/constra/contact-form/ -->
    <form id="contact-form"  role="form" method="post" action="{{route('save_contact_form')}}">
      <div class="error-container"></div>
      <div class="row">
        <div class="col-md-4">
          <div class="form-group">
            <label>Nom</label>
            <input class="form-control form-control-name" name="name" id="name" placeholder="" type="text" required="">
          </div>
        </div>
       
        <div class="col-md-4">
          <div class="form-group">
            <label>Prenom</label>
            <input class="form-control form-control-subject" name="subject" id="subject" placeholder="" required="">
          </div>
        </div>

        <div class="col-md-4">
          <div class="form-group">
            <label>Sexe</label>
            <select class="form-control form-control-email" name="sexe" id="sexe" placeholder="" required="">
              <option>Homme</option>
              <option>Femme</option>
            </select>
          </div>
        </div>

        <div class="col-md-4">
          <div class="form-group">
            <label>Pays</label>
            <input class="form-control form-control-email" name="text" id="pays" placeholder="" type="text" auto-complete="ganah" required="">
          </div>
        </div>

        <div class="col-md-4">
          <div class="form-group">
            <label>Telephone</label>
            <input class="form-control form-control-email" name="phone" id="phone" placeholder="" type="phone" required="">
          </div>
        </div>

      </div>
      <div class="form-group">
        <label>Commentaire</label>
        <textarea class="form-control form-control-message" name="message" id="message" placeholder="" rows="10" required=""></textarea>
      </div>
      <div class="text-right"><br>
        <button class="btn btn-primary solid blank" type="submit">Envoyer</button>
      </div>
    </form>
  </div>

</div><!-- Content row -->
</div>

    <!-- Content row -->
  </div><!-- Conatiner end -->
</section><!-- Main container end -->

@endsection
