<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />
    <meta name="robots" content="index" />
    <?php wp_head(); ?>
    <!-- Global site tag (gtag.js) - Google Ads: 700123484 -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=AW-700123484"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', 'AW-700123484');
    </script>
    <script>
    gtag('config', 'AW-700123484/uSLFCIjtz7cBENyS7M0C', {
    'phone_conversion_number': '1 (312) 967-4666'
    });
    </script>
    <!-- Facebook Pixel Code -->
    <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window,document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '379768886556965'); 
    fbq('track', 'PageView');
    </script>
    <noscript>
    <img height="1" width="1" 
    src="https://www.facebook.com/tr?id=379768886556965&ev=PageView
    &noscript=1"/>
    </noscript>
    <!-- End Facebook Pixel Code -->
</head>
<section id="suggestion-box-popover">
    <div class="suggestion-box-popover-content fade-in-up sticky">
        <a href="/suggestion-box">Suggestion Box</a>
        <button onclick="closeSuggestionPopover()">X</button>
    </div>
</section>
<header id="header-nav">
<a href="<?php echo get_home_url(); ?>">
    <img src="<?php echo get_template_directory_uri(); ?>/img/lime_logo.png" width="87" height="60">
  </a>
  <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
</header>
<div id="translate-option" class="translate-section">
    <?php echo do_shortcode('[prisna-google-website-translator]'); ?>
</div>

<body id="body-adjust-main" <?php body_class(); ?>>
    <div id="container">