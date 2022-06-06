<!DOCTYPE html>
<html lang="en">
    <head>
      @include('admin.layout.header')
      @yield('css')
    </head>
    <body id="page-top">
        @include('admin.layout.sidebar')
        @include('admin.layout.topbar')
        @yield('content')
        @include('admin.layout.footer')
        @yield('model')
        @include('admin.layout.bottom')
       
        @yield('jspage')
    </body>
</html>