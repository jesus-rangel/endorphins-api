<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blogger Layout</title>

    {{-- Bootstrap CSS CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <link rel="stylesheet" href="{{asset('css/app.css')}}" />
    <link
      rel="stylesheet"
      href="{{asset('css/owl.carousel.min.css')}}"
    />
    <link
      rel="stylesheet"
      href="{{asset('css/owl.theme.default.min.css')}}"
    />
  </head>
  <body>
    
    {{ View::make('layouts.header') }}
    <!-- **** MAIN SECTION ****  -->
    <main>
    @yield('content')

    </main>
    <!-- **** END OF MAIN SECTION **** -->

    {{ View::make('layouts.footer') }}


  <!-- Third party Javascript Files -->
  <script src="{{asset('js/app.js')}}"></script>
  <script src="{{asset('js/jquery-3.6.0.min.js')}}"></script>
  <script src="{{asset('js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('js/aos.js')}}"></script>
  <script src="{{asset('js/main.js')}}"></script>
</body>
</html>
    