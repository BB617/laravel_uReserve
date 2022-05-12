<html>
  <head>
    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @livewireStyles

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
  </head>
  <body>
    livewireテストです。register

    @livewire('register')
    @livewireScripts
  </body>
</html>


