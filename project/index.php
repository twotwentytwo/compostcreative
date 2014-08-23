<?
require ('../admin/wp-blog-header.php');
$id = htmlspecialchars($_GET["id"]);
$project = get_page($id);
$video_id = get_post_meta($project->ID, 'video_id', true);
$type = get_post_meta($project->ID, 'type', true);
$gallery_image_one = get_post_meta($project->ID, 'gallery_image_one', true);
$gallery_image_two = get_post_meta($project->ID, 'gallery_image_two', true);
$gallery_image_three = get_post_meta($project->ID, 'gallery_image_three', true);
$gallery_image_four = get_post_meta($project->ID, 'gallery_image_four', true);
$gallery_image_five = get_post_meta($project->ID, 'gallery_image_five', true);
$page = 'project'; 
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?=$project->post_title ?> - Compost Creative</title>
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
        <? if($type == 'gallery'): ?>
        <link rel="stylesheet" href="../css/responsive-carousel.css" media="screen">
        <link rel="stylesheet" href="../css/responsive-carousel.slide.css" media="screen">
        <? endif; ?>
        <script src="../scripts/vendor/modernizr-2.6.2.min.js"></script>
        <? include('../includes/variables.php'); ?>
    </head>
    <body class="compost <?=$page?>-page">
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <? include('../includes/navigation.php'); ?>
        <div class="cmp-content-container">
            <? include('../includes/project.php'); ?>
        </div>
        <script data-main="../scripts/minified/bootstrap" src="../scripts/require.js"></script>
    </body>
</html>
