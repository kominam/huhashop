<!DOCTYPE html>
<html>
  @include('layouts.include.head')
<body>
  @include('layouts.include.navigation')
  @yield('content')
  @include('layouts.include.footer')
  @include('layouts.include.script')
</body>
</html>
