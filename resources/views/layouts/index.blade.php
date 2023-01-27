<!DOCTYPE html>
<html lang="en">

<head>
  @include('layouts.top')
  @yield('css')
  <link rel="canonical" href="https://fusion-institute.com/" />
  <link rel="canonical" href="https://fusion-institute.com/ about-us/" />
  <link rel="canonical" href="https://fusion-institute.com/ courses/" />
  <link rel="canonical" href="https://fusion-institute.com/ batches/" />
  <link rel="canonical" href="https://fusion-institute.com/ contact-us /" />

  <!-- Meta Pixel Code -->
  <script>
    ! function(f, b, e, v, n, t, s) {
      if (f.fbq) return;
      n = f.fbq = function() {
        n.callMethod ?
          n.callMethod.apply(n, arguments) : n.queue.push(arguments)
      };
      if (!f._fbq) f._fbq = n;
      n.push = n;
      n.loaded = !0;
      n.version = '2.0';
      n.queue = [];
      t = b.createElement(e);
      t.async = !0;
      t.src = v;
      s = b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
      'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '3127621754196039');
    fbq('track', 'PageView');
  </script>
  <noscript><img height="1" width="1" class="d-none" src="https://www.facebook.com/tr?id=3127621754196039&ev=PageView&noscript=1" /></noscript>
  <!-- End Meta Pixel Code -->

  <!-- Google tag (gtag.js) -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-NF4RLJ5R13"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());
    gtag('config', 'G-NF4RLJ5R13');
  </script>
</head>

<body>
  @include('layouts.header')

  @yield('content')

  @yield('model')


  @include('layouts.footer')
  @include('layouts.bottom')
  @yield('jspage')
  <script src="//code.tidio.co/g0pmgzav3pnpdcwzfhdb7miljjkfzhew.js" async></script>
</body>

</html>