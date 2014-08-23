<?

/* template */
$template = get_page(92);
$navigation_background_image = get_post_meta($template->ID, 'navigation_background_image', true);
$mobile_navigation_background_image = get_post_meta($template->ID, 'mobile_navigation_background_image', true);

/* home */
$home = get_page(89);
$home_carousel_mobile_one = get_post_meta($home->ID, 'home_carousel_mobile_one', true);
$home_carousel_mobile_two = get_post_meta($home->ID, 'home_carousel_mobile_two', true);
$home_carousel_mobile_three = get_post_meta($home->ID, 'home_carousel_mobile_three', true);
$home_carousel_mobile_four = get_post_meta($home->ID, 'home_carousel_mobile_four', true);
$home_carousel_mobile_five = get_post_meta($home->ID, 'home_carousel_mobile_five', true);
$home_carousel_mobile_six = get_post_meta($home->ID, 'home_carousel_mobile_six', true);
$home_carousel_mobile_seven = get_post_meta($home->ID, 'home_carousel_mobile_seven', true);
$home_carousel_mobile_eight = get_post_meta($home->ID, 'home_carousel_mobile_eight', true);
$home_carousel_mobile_nine = get_post_meta($home->ID, 'home_carousel_mobile_nine', true);
$home_carousel_mobile_ten = get_post_meta($home->ID, 'home_carousel_mobile_ten', true);

$home_carousel_tablet_one = get_post_meta($home->ID, 'home_carousel_tablet_one', true);
$home_carousel_tablet_two = get_post_meta($home->ID, 'home_carousel_tablet_two', true);
$home_carousel_tablet_three = get_post_meta($home->ID, 'home_carousel_tablet_three', true);
$home_carousel_tablet_four = get_post_meta($home->ID, 'home_carousel_tablet_four', true);
$home_carousel_tablet_five = get_post_meta($home->ID, 'home_carousel_tablet_five', true);
$home_carousel_tablet_six = get_post_meta($home->ID, 'home_carousel_tablet_six', true);
$home_carousel_tablet_seven = get_post_meta($home->ID, 'home_carousel_tablet_seven', true);
$home_carousel_tablet_eight = get_post_meta($home->ID, 'home_carousel_tablet_eight', true);
$home_carousel_tablet_nine = get_post_meta($home->ID, 'home_carousel_tablet_nine', true);
$home_carousel_tablet_ten = get_post_meta($home->ID, 'home_carousel_tablet_ten', true);

/* showreels */
$showreels = get_page(8);
$showreels_background_image_desktop = get_post_meta($showreels->ID, 'background_image_desktop', true);
$showreels_background_image_tablet = get_post_meta($showreels->ID, 'background_image_tablet', true);
$showreels_background_image_mobile = get_post_meta($showreels->ID, 'background_image_mobile', true);

/* projects */
$projects = get_page(6);
$projects_background_image_desktop = get_post_meta($projects->ID, 'background_image_desktop', true);
$projects_background_image_tablet = get_post_meta($projects->ID, 'background_image_tablet', true);
$projects_background_image_mobile = get_post_meta($projects->ID, 'background_image_mobile', true);

/* about */
$about = get_page(2);
$about_background_image_desktop = get_post_meta($about->ID, 'background_image_desktop', true);
$about_background_image_tablet = get_post_meta($about->ID, 'background_image_tablet', true);
$about_background_image_mobile = get_post_meta($about->ID, 'background_image_mobile', true);

/* contact */
$contact = get_page(4);
$contact_background_image_desktop = get_post_meta($contact->ID, 'background_image_desktop', true);
$contact_background_image_tablet = get_post_meta($contact->ID, 'background_image_tablet', true);
$contact_background_image_mobile = get_post_meta($contact->ID, 'background_image_mobile', true);

?>
<style type="text/css">

/* Smartphones (portrait and landscape) ----------- */
@media only screen and (min-width : 0px) and (max-width : 599px) {

    /* showreels */
    .showreels-page {
      background-image: url(<?=$showreels_background_image_mobile ?>);
      background-size: cover;
    }

    /* project */
    .project-page, 
    .projects-page {
      background-image: url(<?=$projects_background_image_mobile ?>);
      background-size: cover;
    }

    /* about */
    .about-page {
      background-image: url(<?=$about_background_image_mobile ?>);
      background-size: cover;
    }

    /* contact */
    .contact-page {
      background-image: url(<?=$contact_background_image_mobile ?>);
      background-size: cover;
    }

  /* navigation background */
  .cmp-sidebar .pixels, 
  .cmp-navigation {
      background: url(<?=$mobile_navigation_background_image ?>) repeat 0 0;
  }

      /* background images  */

    .one {
      background-image: url(<?=$home_carousel_mobile_one?>);
      background-size: cover;
    }

    .two {
      background-image: url(<?=$home_carousel_mobile_two?>);
      background-size: cover;
    }

    .three {
      background-image: url(<?=$home_carousel_mobile_three?>);
      background-size: cover;
    }

    .four {
      background-image: url(<?=$home_carousel_mobile_four?>);
      background-size: cover;
    }

    .five {
      background-image: url(<?=$home_carousel_mobile_five?>);
      background-size: cover;
    }

    .six {
      background-image: url(<?=$home_carousel_mobile_six?>);
      background-size: cover;
    }

    .seven {
      background-image: url(<?=$home_carousel_mobile_seven?>);
      background-size: cover;
    }

    .eight {
      background-image: url(<?=$home_carousel_mobile_eight?>);
      background-size: cover;
    }

    .nine {
      background-image: url(<?=$home_carousel_mobile_nine?>);
      background-size: cover;
    }

    .ten {
      background-image: url(<?=$home_carousel_mobile_ten?>);
      background-size: cover;
    }
}

/* tablet (portrait and landscape) ----------- */
@media only screen and (min-width : 600px) and (max-width : 977px) {

    /* showreels */
    .showreels-page {
      background-image: url(<?=$showreels_background_image_tablet ?>);
      background-size: cover;
    }

    /* project */
    .project-page, 
    .projects-page {
      background-image: url(<?=$projects_background_image_tablet ?>);
      background-size: cover;
    }

    /* about */
    .about-page {
      background-image: url(<?=$about_background_image_tablet ?>);
      background-size: cover;
    }

    /* contact */
    .contact-page {
      background-image: url(<?=$contact_background_image_tablet ?>);
      background-size: cover;
    }
    
  /* navigation background */
  .cmp-sidebar .pixels {
      background: url(<?=$mobile_navigation_background_image ?>) repeat 0 0;
  }

      /* background images  */

    .one {
      background-image: url(<?=$home_carousel_tablet_one?>);
      background-size: cover;
    }

    .two {
      background-image: url(<?=$home_carousel_tablet_two?>);
      background-size: cover;
    }

    .three {
      background-image: url(<?=$home_carousel_tablet_three?>);
      background-size: cover;
    }

    .four {
      background-image: url(<?=$home_carousel_tablet_four?>);
      background-size: cover;
    }

    .five {
      background-image: url(<?=$home_carousel_tablet_five?>);
      background-size: cover;
    }

        .six {
      background-image: url(<?=$home_carousel_tablet_six?>);
      background-size: cover;
    }

    .seven {
      background-image: url(<?=$home_carousel_tablet_seven?>);
      background-size: cover;
    }

    .eight {
      background-image: url(<?=$home_carousel_tablet_eight?>);
      background-size: cover;
    }

    .nine {
      background-image: url(<?=$home_carousel_tablet_nine?>);
      background-size: cover;
    }

    .ten {
      background-image: url(<?=$home_carousel_tablet_ten?>);
      background-size: cover;
    }
}

/* tablet (landscape) ----------- */
@media only screen and (min-width : 799px) and (max-width : 1024px) {
/* navigation background */
    .cmp-sidebar .pixels {
      background: url(<?=$navigation_background_image ?>) repeat-y 0 0;
    }

    .cmp-navigation {
      background: none!important;
    }

          /* background images  */

    .one {
      background-image: url(<?=$home_carousel_tablet_one?>);
      background-size: cover;
    }

    .two {
      background-image: url(<?=$home_carousel_tablet_two?>);
      background-size: cover;
    }

    .three {
      background-image: url(<?=$home_carousel_tablet_three?>);
      background-size: cover;
    }

    .four {
      background-image: url(<?=$home_carousel_tablet_four?>);
      background-size: cover;
    }

    .five {
      background-image: url(<?=$home_carousel_tablet_five?>);
      background-size: cover;
    }

    .six {
      background-image: url(<?=$home_carousel_tablet_six?>);
      background-size: cover;
    }

    .seven {
      background-image: url(<?=$home_carousel_tablet_seven?>);
      background-size: cover;
    }

    .eight {
      background-image: url(<?=$home_carousel_tablet_eight?>);
      background-size: cover;
    }

    .nine {
      background-image: url(<?=$home_carousel_tablet_nine?>);
      background-size: cover;
    }

    .ten {
      background-image: url(<?=$home_carousel_tablet_ten?>);
      background-size: cover;
    }

    /* showreels */
    .showreels-page {
      background-image: url(<?=$showreels_background_image_tablet ?>);
      background-size: cover;
    }

     /* project */
    .project-page, 
    .projects-page {
      background-image: url(<?=$projects_background_image_tablet ?>);
      background-size: cover;
    }


    /* about */
    .about-page {
      background-image: url(<?=$about_background_image_tablet ?>);
      background-size: cover;
    }

    /* contact */
    .contact-page {
      background-image: url(<?=$contact_background_image_tablet ?>);
      background-size: cover;
    }
}

/* DESKTOP */
@media only screen and (min-width : 1025px) {

	/* navigation background */
	.cmp-sidebar .pixels {
    	background: url(<?=$navigation_background_image ?>) repeat-y 0 0;
	}

	/* showreels */
    .showreels-page {
      background-image: url(<?=$showreels_background_image_desktop ?>);
      background-size: cover;
    }

    /* project */
    .project-page, 
    .projects-page {
      background-image: url(<?=$projects_background_image_desktop ?>);
      background-size: cover;
    }

    /* about */
    .about-page {
      background-image: url(<?=$about_background_image_desktop ?>);
      background-size: cover;
    }

}
</style>