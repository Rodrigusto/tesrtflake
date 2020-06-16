<!DOCTYPE html>
<html lang="en">

    @include('site.parts.head')

<body>

  <div class="click-closed"></div>
  
    @include('site.parts.nav')

    @yield('content')

    @include('site.parts.footer')
   

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

    @include('site.parts.scripts')
  
</body>
</html>
