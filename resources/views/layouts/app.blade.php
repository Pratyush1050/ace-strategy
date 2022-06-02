<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ace Strategy</title>
  <!-- Style  -->
  <link rel="stylesheet" href="{{asset('css/style.css')}}">

  <!-- Font awesome cdn -->
  <script src="https://kit.fontawesome.com/ffb0922cfe.js" crossorigin="anonymous"></script>
   <!-- font valera  -->
   <link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
  <!-- Font jakarta  -->
  <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">

<!-- font  Benchnine-->
<link href="https://fonts.googleapis.com/css2?family=BenchNine:wght@300&family=Montserrat:wght@400;700&family=Outfit:wght@200&display=swap" rel="stylesheet">

   <!--font raleway-->
   <link rel="preconnect" href="https://fonts.gstatic.com" />
   <link
     href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;600;700&display=swap"
     rel="stylesheet"
   />
  {{-- Select 2 --}}
   <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <!-- Bootstrap  -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.17/css/intlTelInput.css" integrity="sha512-gxWow8Mo6q6pLa1XH/CcH8JyiSDEtiwJV78E+D+QP0EVasFs8wKXq16G8CLD4CJ2SnonHr4Lm/yY2fSI2+cbmw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>
<body>

    <body id="index-page">
      @include('layouts.navbar')
    @yield('contents')
      
    
    @include('layouts.footer')



</body>
<!-- Jquery  -->
<script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>


@include('sweetalert::alert')

<!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

  <!-- Script  -->
<script src="{{ asset('js/script.js')}}"></script>
{{-- Select 2 --}}
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.17/js/intlTelInput.min.js" integrity="sha512-1NlRc/n6l/Gl7K7u9g6Z9kxZsKqcJV5uWM/Tv/WCjxDBqUSlxlgHgQI4Z17RW7BdNJjgLj0l6x0kGd0DOvu4AQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.17/js/utils.min.js" integrity="sha512-Uyf+0OJZ2DBNO2156wplv4+1FZuZVsguTkfrO//Kg+BjaaauYSQWGJZBXmQiFkIrKsYQeUdnFi3zYZxGTsc2Mg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
@yield('scripts')

</html>