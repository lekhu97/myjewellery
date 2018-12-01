
@include('layouts.inc.head')
@include('layouts.inc.navbar')

    <main role="main">

      <div class="container">
         @yield('content')
      </div>
    
    </main>

   <script src="{{asset('js/all.js')}}"></script>


