<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <title inertia>{{ config('app.name', 'Laravel') }}</title>

        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('./assets/img/logo.png') }}">
        <link rel="icon" type="image/png" href="{{ asset('./assets/img/logo.png')}}">

        <!--     Fonts and icons     -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />

        <!-- Nucleo Icons -->
        <link href="{{ asset('./assets/css/nucleo-icons.css')}}" rel="stylesheet" />
        <link href="{{ asset('./assets/css/nucleo-svg.css')}}" rel="stylesheet" />

        <!-- Font Awesome Icons -->
        <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
        <link href="{{ asset('./assets/css/nucleo-svg.css')}}" rel="stylesheet" />

        <!-- CSS Files -->
        <link id="pagestyle" href="{{ asset('./assets/css/soft-design-system.css?v=1.0.9') }}" rel="stylesheet" />
        <style>
            .faq-heading {
  margin-top: 45px;
  margin-bottom: 15px;
  text-align: center;
  font-weight: 400;
  font-size: 30px;
}

.faq-card {
  border: 1px solid #dce0e8;
  border-radius: 6px;
  padding: 24px 20px;
  margin-bottom: 12px;
  list-style: none;
  position: relative;
  cursor: pointer;
}

.faq-open-icon {
  font-size: 22px;
  position: absolute;
  top: 18px;
  right: 24px;
  font-weight: 700;
}

details[open] .faq-open-icon {
  top: 18px;
  right: 24px;
}

details > summary {
  list-style: none;
}

details > summary::-webkit-details-marker {
  display: none;
}

details[open] summary {
  color: #0186ff;
  font-weight: 500;
}

details[open] .faq-card-spoiler {
  display: inline-block;
  padding-top: 8px;
  color: #8b8b9a;
}

.faq-aftertext {
  text-align: center;
  color: #8b8b9a;
}
        </style>

        <!-- Scripts -->
        @routes
        @vite(['resources/js/app.js', "resources/js/Pages/{$page['component']}.vue"])
        @inertiaHead
    </head>
    <body class="g-sidenav-show">
        @inertia
                <!--   Core JS Files   -->
        <script src="{{ asset('./assets/js/core/popper.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('./assets/js/core/bootstrap.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('./assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
        <!--  Plugin for Parallax, full documentation here: https://github.com/wagerfield/parallax  -->
        <script src="{{ asset('./assets/js/plugins/parallax.min.js') }}"></script>
        <!-- Control Center for Soft UI Kit: parallax effects, scripts for the example pages etc -->
        <!--  Google Maps Plugin    -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDTTfWur0PDbZWPr7Pmq8K3jiDp0_xUziI"></script>
        <script src="{{ asset('./assets/js/soft-design-system.min.js?v=1.0.9') }}" type="text/javascript"></script>
    </body>
</html>
