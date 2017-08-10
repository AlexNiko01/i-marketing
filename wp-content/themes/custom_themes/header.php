<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <html>
        <head>
			<?php if (is_single() ) echo get_post_meta($post->ID, 'google_meta', true); ?>
            <meta charset="<?php bloginfo('charset'); ?>">
            <meta name="viewport" content="width=device-width">
            <meta name="google-site-verification" content="REJLvBzs2sjSuIvHcxbyzF1jNqNSu_B_jXqAK2BPVdE" />
            <title><?php wp_title('|', true, 'right'); ?></title>
            <link rel="profile" href="http://gmpg.org/xfn/11">
            <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

            <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />

            <link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/css/style.css">
            <link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/css/responsive.css">
            <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300,500&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=Ubuntu:400,500,700' rel='stylesheet' type='text/css'>
            <link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/fw/css/font-awesome.min.css">

            <script type='text/javascript' src='<?php bloginfo("template_url"); ?>/js/lib/jquery-1.11.2.js'></script>
            <script type='text/javascript' src='<?php bloginfo("template_url"); ?>/js/lib/jquery.magnific-popup.js'></script>
            <script type='text/javascript' src='<?php bloginfo("template_url"); ?>/js/accordeon.js'></script>
            
            <script src="<?php bloginfo("template_url"); ?>/js/inputmask.js"></script>
            <script src="<?php bloginfo("template_url"); ?>/js/inputmask.phone.extensions.js"></script>
            <script src="<?php bloginfo("template_url"); ?>/js/jquery.inputmask.js"></script>

            <script src="<?php bloginfo("template_url"); ?>/js/jquery.collageCaption.min.js"></script>
            <script src="<?php bloginfo("template_url"); ?>/js/jquery.collagePlus.min.js"></script>
            <script src="<?php bloginfo("template_url"); ?>/js/jquery.removeWhitespace.min.js"></script>

            <script type='text/javascript' src='<?php bloginfo("template_url"); ?>/js/main.js'></script>

            <link rel="stylesheet" href="<?php bloginfo("template_url"); ?>/css/magnific-popup.css">

            <?php wp_head(); ?>
            <script>
                (function (i, s, o, g, r, a, m) {
                    i['GoogleAnalyticsObject'] = r;
                    i[r] = i[r] || function () {
                        (i[r].q = i[r].q || []).push(arguments)
                    }, i[r].l = 1 * new Date();
                    a = s.createElement(o),
                            m = s.getElementsByTagName(o)[0];
                    a.async = 1;
                    a.src = g;
                    m.parentNode.insertBefore(a, m)
                })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

                ga('create', 'UA-35199619-1', 'auto');
                ga('send', 'pageview');

            </script>

            <!-- Facebook Pixel Code -->
            <script>
                !function (f, b, e, v, n, t, s) {
                    if (f.fbq)
                        return;
                    n = f.fbq = function () {
                        n.callMethod ?
                                n.callMethod.apply(n, arguments) : n.queue.push(arguments)
                    };
                    if (!f._fbq)
                        f._fbq = n;
                    n.push = n;
                    n.loaded = !0;
                    n.version = '2.0';
                    n.queue = [];
                    t = b.createElement(e);
                    t.async = !0;
                    t.src = v;
                    s = b.getElementsByTagName(e)[0];
                    s.parentNode.insertBefore(t, s)
                }(window,
                        document, 'script', '//connect.facebook.net/en_US/fbevents.js');

                fbq('init', '613146075470125');
                fbq('track', "PageView");</script>
        <noscript><img height="1" width="1" style="display:none"
                       src="https://www.facebook.com/tr?id=613146075470125&ev=PageView&noscript=1"
                       /></noscript>
        <!-- End Facebook Pixel Code -->

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KD63GB');</script>
<!-- End Google Tag Manager -->
    </head>

    <body <?php body_class(); ?>>

        <?php
        $defaults = array(
            'theme_location' => '',
            'menu' => 'main',
            'container' => 'nav',
            'container_class' => 'main_menu_mob mobile-only',
            'items_wrap' => '<ul>%3$s</ul>'
        );

        wp_nav_menu($defaults);
        ?>



        <div id="wrapper">
            <header id="header">
                <div class="container">
                    <a class="menu_button mobile-only" href="#"><i class="fa fa-bars"></i> </a>
                    <a class="main_logo" href="<?php echo site_url(); ?>">
                        <img class='inner-page' src="<?php bloginfo("template_url"); ?>/img/images/descktop_logo.png" alt="">
                        <img class='home-page' src="<?php bloginfo("template_url"); ?>/img/images/descktop_logo_home.png" alt="">
                    </a>
                    <span class="call_us desktop-only">Позвоните нам: <a href="tel:+380 (44) 361-18-16"><i class="fa fa-phone"></i> (044) 361 1816</a>, <a href="tel:+380 (50) 207 36-73"> (050) 207 3673</a>, <a href="tel:+380 (97) 214-79-15"> (097) 214 7915</a></span>

                    <?php
                    $defaults = array(
                        'theme_location' => '',
                        'menu' => 'main',
                        'container' => 'nav',
                        'container_class' => 'main_menu desktop-only',
                        'items_wrap' => '<ul>%3$s</ul>'
                    );

                    wp_nav_menu($defaults);
                    ?>

                </div>
            </header>
