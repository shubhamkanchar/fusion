<!DOCTYPE html>
<html lang="en">

<head>
  @include('layouts.top')
  @yield('css')
  <style>
    .video-play-button {
      position: absolute;
      z-index: 10;
      top: 80%;
      left: 50%;
      transform: translateX(-50%) translateY(-50%);
      box-sizing: content-box;
      display: block;
      width: 15px;
      height: 12px;
      background: #43cb89;
      border-radius: 50%;
      padding: 9px 24px 18px 28px;
    }

    .video-play-button:before {
      content: "";
      position: absolute;
      z-index: 0;
      left: 50%;
      top: 50%;
      transform: translateX(-50%) translateY(-50%);
      display: block;
      width: 75px;
      height: 75px;
      background: #43cb89;
      border-radius: 50%;
      animation: pulse-border 1500ms ease-out infinite;
    }

    .video-play-button:after {
      content: "";
      position: absolute;
      z-index: 1;
      left: 50%;
      top: 50%;
      transform: translateX(-50%) translateY(-50%);
      display: block;
      width: 70px;
      height: 70px;
      background: #43cb89;
      border-radius: 50%;
      transition: all 200ms;
      border: solid 4px #fff;
    }


    .video-play-button span {
      display: block;
      position: relative;
      z-index: 3;
      width: 0;
      height: 0;
      border-left: 18px solid #fff;
      border-top: 10px solid transparent;
      border-bottom: 12px solid transparent;
    }

    @keyframes pulse-border {
      0% {
        transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1);
        opacity: 1;
      }

      100% {
        transform: translateX(-50%) translateY(-50%) translateZ(0) scale(1.5);
        opacity: 0;
      }
    }
  </style>
  <link rel="canonical" href="https://fusion-institute.com/" />
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
  <script type="application/ld+json">
    {
      "@context": "https://schema.org/",
      "@type": "WebSite",
      "name": "Fusion Software Institute Pune",
      "url": "https://fusion-institute.com/",
      "potentialAction": {
        "@type": "SearchAction",
        "target": "{search_term_string}",
        "query-input": "required name=search_term_string"
      }
    }
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