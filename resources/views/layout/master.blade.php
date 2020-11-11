<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

@include('layout.header')

<body>
  
@include('layout.navbar')

@yield('content')

@include('layout.footer')

@yield('script')

@yield('modal')
    
</body>

</html>