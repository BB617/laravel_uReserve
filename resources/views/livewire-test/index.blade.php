<html>
  <head>
    @livewireStyles
  </head>
  <body>
    livewireテストです。
    {{-- <livewire:counter /> --}}
    <div>
      @if (session()->has('message'))
          <div class="alert alert-success">
              {{ session('message') }}
          </div>
      @endif
    </div>

    @livewire('counter')
    @livewireScripts
  </body>
</html>


