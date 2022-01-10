<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta name="facebook-domain-verification" content="qjv7e98v8jl5uggwbqe484jov7bmit" />
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width" />
  <meta name="robots" content="index" />
  <script src="https://kit.fontawesome.com/33391c5587.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&family=Poppins:ital,wght@0,300;0,700;1,400&display=swap" rel="stylesheet">
  <?php wp_head(); ?>
  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-KPM8PN4');</script>
  <!-- End Google Tag Manager -->
  <!-- Facebook Pixel Code -->

  <script>
    ! function(f, b, e, v, n, t, s)

    {
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

    fbq('init', '646808949357062');

    fbq('track', 'PageView');
  </script>

  <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=646808949357062&ev=PageView&noscript=1" /></noscript>

  <!-- End Facebook Pixel Code -->
</head>
<div class="topbar" id="home-topbar">
  During this national emergency, we need your help the most. Learn how you can <a href="/get-involved">get involved</a> today!
  <button onclick="closeTopbar()">X</button>
</div>
<section id="suggestion-box-popover">
  <div class="suggestion-box-popover-content fade-in-up sticky">
    <a href="/suggestion-box">Suggestion Box</a>
    <button onclick="closeSuggestionPopover()">X</button>
  </div>
</section>
<section id="popover">
  <div class="popover-content fade-in sticky donation-popover">
    <div class="content-wrapper">
      <button onclick="closePopover()">X</button>
      <h1>Help Homebound Seniors</h1>
      <h2>During COVID-19.</h2>
      <div class="donation-form-container">
        <a href="/donate" class="donate-button" target="_blank">Donate</a>
      </div>
    </div>
  </div>
</section>
<header id="header-nav" class="header-desktop-adjust">
  <a href="<?php echo get_home_url(); ?>">
    <img src="<?php echo get_template_directory_uri(); ?>/img/lime_logo.png" width="87" height="60">
  </a>
  <?php wp_nav_menu(array('theme_location' => 'main-menu')); ?>
</header>
<div id="translate-option" class="translate-section">
  <?php echo do_shortcode('[prisna-google-website-translator]'); ?>
</div>

<body id="body-adjust" <?php body_class(); ?>>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KPM8PN4"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <div id="container">