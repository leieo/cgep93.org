<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-117091282-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'UA-117091282-1');
        </script>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CGEP 93</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
        <link href='https://api.mapbox.com/mapbox-gl-js/v0.42.0/mapbox-gl.css' rel='stylesheet' />

        <style>

          .sitemap {
            padding: 30px;
            color: grey;
            background-color: black;
            font-size: 12px;
            display: grid;
            grid-template-columns: 200px 200px 200px;
          }

          .sitemap a {
            color: grey;
          }

          .sitemap-part1 {
            grid-column: 1 / 2;
          }

          .sitemap-part2 {
            grid-column: 2 / 3 ;
          }
          .sitemap-part3 {
            grid-column: 3 / 4 ;
          }

          /* CSS pour la carte interactive*/

          body {
    font-family: serif;
    background-color: #F5F5F5;
    color: #415F77;
}

* {
    box-sizing: border-box;
}

.map {
    position: relative;
    overflow: hidden;
    background-color: #fff;
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
    width: 70vw;
    height: auto;
    margin: 20px auto;
}

.map__image {
    position: absolute;
    top: 10px;
    left: 10px;
    right:300px;
    bottom: 0;
}

.map__image svg {
    width: 100%;
    height: 100%;
}

.map__image path {
    fill: #415F77;
    stroke: #769cb5;
    stroke-width: 1px;
    transition: fill 0.3s;
}

.map__image .is-active path {
    fill: #FC5050;
}

/* Liste
   ========================================================================== */
.map__list {
    float: right;
    width: 280px;
    border-left: 1px solid #dbdbdb;
}

.map__list ul, .map__list li{
    margin: 0;
    padding: 0;
    list-style: none;
}

.map__list a {
    padding-left: 10px;
    display: inline-block;
    height: 30px;
    width: 100%;
    line-height: 30px;
    color: inherit;
    text-decoration: none;
    transition: 0.3s;
}

.map__list a.is-active {
    color: #FC5050;
    background-color: #f4f4f4;
}

@media screen and (max-width: 720px){
    .map__list {
        float: none;
        width: 100%;
        border-left: 1px solid #dbdbdb;
    }
    .map__image{
        padding: 10px;
        position: static;
        width: 100%;
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
      <script src='https://api.mapbox.com/mapbox-gl-js/v0.42.0/mapbox-gl.js'></script>
      <script src="{{asset('js/map.js')}}"></script>
      <script src="{{asset('js/carte.js')}}"></script>


    </body>
</html>
