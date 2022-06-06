<!DOCTYPE html>
<html lang="en">

<head>
  @include('layouts.top')
  @yield('css')
</head>

<body>
  @include('layouts.header')

  @yield('content')

  @yield('model')


  @include('layouts.footer')
  @include('layouts.bottom')
  @yield('jspage')
  <script src="//code.tidio.co/zcqzrqtddnuexrgqkmcwbfzv06gzkos1.js" async></script>
</body>

</html>