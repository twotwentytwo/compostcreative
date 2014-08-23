<?
require("../admin/wp-blog-header.php");
include('../includes/header.php');
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Showreels - Compost Creative</title>
        <meta name="description" content="We are a visual effects team creating leading broadcast graphics for TV, corporate and
advertising clients">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- for Facebook -->          
        <meta property="og:title" content="Showreels - Compost Creative" />
        <meta property="og:type" content="article" />
        <meta property="og:image" content="" />
        <meta property="og:url" content="http://www.compostcreative.com/showreels" />
        <meta property="og:description" content="We are a visual effects team creating leading broadcast graphics for TV, corporate and
advertising clients" />
        <!-- for Twitter -->          
        <meta name="twitter:card" content="summary" />
        <meta name="twitter:title" content="Showreels - Compost Creative" />
        <meta name="twitter:url" content="http://www.compostcreative.com/showreels" />
        <meta name="twitter:image" content="" />
        <meta name="twitter:description" content="We are a visual effects team creating leading broadcast graphics for TV, corporate and
advertising clients" />
        <link href='http://fonts.googleapis.com/css?family=Lekton' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="../css/style.css">
        <script src="../scripts/vendor/modernizr-2.6.2.min.js"></script>
        <? include('../includes/variables.php'); ?>
    </head>
    <body class="compost showreels-page">
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <? include('../includes/navigation.php'); ?>
        <div class="cmp-content-container">
            <? include('../includes/showreels.php'); ?>
        </div>
        <script data-main="../scripts/minified/bootstrap" src="../scripts/require.js"></script>
    </body>
</html>
