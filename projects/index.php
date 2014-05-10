<?
require ('../admin/wp-blog-header.php');
$args = array('post_parent' => 6,'post_type' => 'any', 'numberposts' => -1, 'post_status' => 'any', 'order' => 'ASC');
$pages = get_children($args);
$page = 'projects'; 
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Projects - Compost Creative</title>
        <meta name="description" content="We are a visual effects team creating leading broadcast graphics for TV, corporate and
advertising clients">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- for Facebook -->          
        <meta property="og:title" content="<?=$project->post_title ?> - Compost Creative" />
        <meta property="og:image" content="http://twotwentytwo.co.uk/dev/compostcreative/img/template/sharing.png" />
        <meta property="og:url" content="http://twotwentytwo.co.uk/dev/compostcreative/project/index.php?id=<?=$id?>" />
        <meta property="og:description" content="We are a visual effects team creating leading broadcast graphics for TV, corporate and
advertising clients" />

        <!-- for Twitter -->          
        <meta name="twitter:card" content="summary" />
        <meta name="twitter:title" content="<?=$project->post_title ?> - Compost Creative" />
        <meta name="twitter:url" content="http://twotwentytwo.co.uk/dev/compostcreative/project/index.php?id=<?=$id?>" />
        <meta name="twitter:image" content="http://twotwentytwo.co.uk/dev/compostcreative/img/template/sharing.png" />
        <meta name="twitter:description" content="We are a visual effects team creating leading broadcast graphics for TV, corporate and
advertising clients" />

        <link href='http://fonts.googleapis.com/css?family=Lekton' rel='stylesheet' type='text/css'>

        <link rel="stylesheet" href="../css/style.css">
        <script src="../scripts/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body class="compost <?=$page?>-page">
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <? include('../includes/navigation.php'); ?>

        <div class="cmp-content clearfix">
        	<h2>Projects</h2>
            <? foreach($pages as $webpage) : 
            	$thumbnail = get_post_meta($webpage->ID, 'thumbnail', true);?>
            	<div class="cmp-project">
            		<a href="/dev/compostcreative/project/index.php?id=<?=$webpage->ID ?>">
            			<img class="pjt-image" src="<?=$thumbnail ?>" alt="Image for <?=$webpage->post_title ?>" />
            			<p class="pjt-title"><?=$webpage->post_title ?></p>
					</a>
				</div>
			<?endforeach; ?>
        </div>

        <script data-main="../scripts/minified/bootstrap" src="../scripts/require.js"></script>

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
