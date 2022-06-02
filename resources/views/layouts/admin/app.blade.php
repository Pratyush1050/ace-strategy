<!DOCTYPE html>
<html lang="en">
  <head>
    <title>All Contract Buyers</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
      crossorigin="anonymous"
    />

    <!--font raleway-->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;600;700&display=swap"
      rel="stylesheet"
    />

    <!--Fonts Awesome icons-->
    <script src="https://kit.fontawesome.com/ffb0922cfe.js" crossorigin="anonymous"></script>

    <!--Font Roboto-->
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
      rel="stylesheet"
    />

    <!--Css styles-->
    <link rel="stylesheet" href="{{asset('css/admin-style.css')}}" />

    <link
      href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css"
      rel="stylesheet"
    />
  </head>

  <body>
    @include('layouts.admin.navigation')

    @yield('contents')


  </body>
  <script
  src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
  crossorigin="anonymous"
></script>
<!-- <script src="js/scripts.js"></script> -->
<script
  src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"
  crossorigin="anonymous"
></script>

<script
  src="https://cdn.jsdelivr.net/npm/simple-datatables@latest"
  crossorigin="anonymous"
></script>
<script src="{{asset('js/admin.js')}}"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" 
integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
@include('sweetalert::alert')
@yield('scripts')
</html>
