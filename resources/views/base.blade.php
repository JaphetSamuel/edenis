<!DOCTYPE html>
<html lang="fr">
<head>

    <!-- Basic Page Needs
  ================================================== -->
    <meta charset="utf-8">
    <title>EDENIS GROUP</title>

    <!-- Mobile Specific Metas
  ================================================== -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Edenis groupe">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">

    <!-- Favicon
  ================================================== -->
    <link rel="icon" type="image/png" href="images/favicon.png">

    <!-- CSS
  ================================================== -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
    <!-- FontAwesome -->
    <link rel="stylesheet" href="plugins/fontawesome/css/all.min.css">
    <!-- Animation -->
    <link rel="stylesheet" href="plugins/animate-css/animate.css">
    <!-- slick Carousel -->
    <link rel="stylesheet" href="plugins/slick/slick.css">
    <link rel="stylesheet" href="plugins/slick/slick-theme.css">
    <!-- Colorbox -->
    <link rel="stylesheet" href="plugins/colorbox/colorbox.css">
    
    <!-- Template styles-->
    <link rel="stylesheet" href="css/style.css">
    <style>
        body {
            user-select: none;
            -webkit-user-select: none;
            -webkit-touch-callout: none;
            -moz-user-select: none;
            -ms-user-select: none;

        }
    </style>
    @livewireStyles

</head>
<body>
<div class="body-inner">


    <!--/ Topbar end -->
    <!-- Header start -->
    @include('_layout.appbar')


    <!--/ Header end -->

    @yield('content')


    <!-- Action end -->

    <!-- Feature are end -->

    <!-- Facts end -->

    <!-- Service end -->

    <!-- Project area end -->

    <!-- Content end -->

    <!--/ subscribe end -->
    <!--/ News end -->
    @include('_layout.footer')
    <!-- Footer end -->


    <!-- Javascript Files
    ================================================== -->

    @livewireScripts


    <!-- initialize jQuery Library -->
    <script src="plugins/jQuery/jquery.min.js"></script>
    <!-- Bootstrap jQuery -->
    <script src="plugins/bootstrap/bootstrap.min.js" defer></script>
    <!-- Slick Carousel -->
    <script src="plugins/slick/slick.min.js"></script>
    <script src="plugins/slick/slick-animation.min.js"></script>
    <!-- Color box -->
    <script src="plugins/colorbox/jquery.colorbox.js"></script>
    <!-- shuffle -->
    <script src="plugins/shuffle/shuffle.min.js" defer></script>


    <!-- Google Map API Key-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
    <!-- Google Map Plugin-->
    <script src="plugins/google-map/map.js" defer></script>

    <!-- Template custom -->
    <script src="js/script.js"></script>
    <link rel="stylesheet" href="plugins/lessmore.js">

    <script>

      $(function(){
    $('.dolessmore').dolessmore({
      lHeight : 10
      });
    });
    </script>

</div><!-- Body inner end -->
</body>

</html>
