<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CGEP 93</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="">

        <style>
            html, body {
                overflow-x: hidden; /* Prevent scroll on narrow devices */
                padding-top: 56px;
            }

            .navbar-brand {
              padding-bottom: 0px;
            }

            .navbar {
              padding-bottom: 0px;
            }

            .navbar-brand-laptop-subtitle {
              font-size: 14px;
            }

            @media (min-width: 769px) {
              .navbar-brand-mobile {
                display: none;
              }
            }

            @media (max-width: 768px) {
              .navbar-brand-laptop {
                display: none;
              }
            }

            @media (max-width: 767.98px) {
                .offcanvas-collapse {
                position: fixed;
                top: 56px; /* Height of navbar */
                bottom: 0;
                width: 100%;
                padding-right: 1rem;
                padding-left: 1rem;
                overflow-y: auto;
                background-color: var(--gray-dark);
                transition: -webkit-transform .3s ease-in-out;
                transition: transform .3s ease-in-out;
                transition: transform .3s ease-in-out, -webkit-transform .3s ease-in-out;
                -webkit-transform: translateX(100%);
                transform: translateX(100%);
                }
                .offcanvas-collapse.open {
                    -webkit-transform: translateX(-1rem);
                    transform: translateX(-1rem); /* Account for horizontal padding on navbar */
                }
            }

        </style>

    </head>

    <body class="bg-light">

      @include('layouts.nav')
          @yield('content')
      @include('layouts.footer')

      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

      <script type="text/javascript">
          $(function () {
              'use strict'
                $('[data-toggle="offcanvas"]').on('click', function () {
                    $('.offcanvas-collapse').toggleClass('open')
                })
          })
      </script>

    </body>
</html>
