<?

/* home */
$homepage = get_page(89);
$homepage_background_video_id = get_post_meta($homepage->ID, 'background_video_id', true);

/* about */
$about_id = 2;
$about = get_page($about_id);

/* contact */
$contact_id = 4;
$contact = get_page($contact_id);
$contact_background_video_id = get_post_meta($contact->ID, 'background_video_id', true);

/* project */
$project_id = htmlspecialchars($_GET["id"]);
$project = get_page($project_id);
$project_video_id = get_post_meta($project->ID, 'video_id', true);
$project_type = get_post_meta($project->ID, 'type', true);
$gallery_image_one = get_post_meta($project->ID, 'gallery_image_one', true);
$gallery_image_two = get_post_meta($project->ID, 'gallery_image_two', true);
$gallery_image_three = get_post_meta($project->ID, 'gallery_image_three', true);
$gallery_image_four = get_post_meta($project->ID, 'gallery_image_four', true);
$gallery_image_five = get_post_meta($project->ID, 'gallery_image_five', true);

?>