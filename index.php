<?
require("admin/wp-blog-header.php");
$page = 'home';

/* template */
$homepage = get_page(89);
$background_video_id = get_post_meta($homepage->ID, 'background_video_id', true);
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Compost Creative</title>
        <meta name="description" content="We are a visual effects team creating leading broadcast graphics for TV, corporate and
advertising clients">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- for Facebook -->          
        <meta property="og:title" content="Compost Creative" />
        <meta property="og:type" content="article" />
        <meta property="og:image" content="" />
        <meta property="og:url" content="http://www.compostcreative.com" />
        <meta property="og:description" content="We are a visual effects team creating leading broadcast graphics for TV, corporate and
advertising clients" />

        <!-- for Twitter -->          
        <meta name="twitter:card" content="summary" />
        <meta name="twitter:title" content="Compost Creative" />
        <meta name="twitter:url" content="http://www.compostcreative.com" />
        <meta name="twitter:description" content="" />
        <meta name="twitter:image" content="We are a visual effects team creating leading broadcast graphics for TV, corporate and
advertising clients" />

        <link href='http://fonts.googleapis.com/css?family=Lekton' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="css/style.css">
        <script src="scripts/vendor/modernizr-2.6.2.min.js"></script>
        <? include('includes/variables.php'); ?>
    </head>
    <body class="compost home-page">
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <? include('includes/navigation.php'); ?>

        <div class="carousel" data-autoplay>
            <div class="one image"></div>
            <div class="two image"></div>
            <div class="three image"></div>
            <div class="four image"></div>
            <div class="five image"></div>
            <div class="six image"></div>
            <div class="seven image"></div>
            <div class="eight image"></div>
            <div class="nine image"></div>
            <div class="ten image"></div>
        </div>

        <script data-main="scripts/minified/bootstrap" src="scripts/require.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. 
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='//www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X');ga('send','pageview');
        </script>
        -->

    </body>
</html>
