
	<h2 class="cmp-title"><span><?=$project->post_title ?></span></h2>
	<div class="cmp-content">
		<?if($type != 'gallery'):?>
		<div class="js-video widescreen vimeo">
			<iframe src="//player.vimeo.com/video/<?=$video_id?>?title=0&badge=0&byline=0" width="960" height="540" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
		</div>
		<?else:?>
			<div class="carousel" data-transition="slide">
				<?if(isset($gallery_image_one)):?>
		            <div>
		                <img src="<?=$gallery_image_one?>">
		            </div>
	            <?endif;?>
	            <?if(isset($gallery_image_two)):?>
		            <div>
		                <img src="<?=$gallery_image_two?>">
		            </div>
	            <?endif;?>
	            <?if(isset($gallery_image_three)):?>
		            <div>
		                <img src="<?=$gallery_image_three?>">
		            </div>
	            <?endif;?>
	            <?if(isset($gallery_image_four)):?>
		            <div>
		                <img src="<?=$gallery_image_four?>">
		            </div>
	            <?endif;?>
	            <?if(isset($gallery_image_five)):?>
		            <div>
		                <img src="<?=$gallery_image_five?>">
		            </div>
	            <?endif;?>
            </div>
		<?endif;?>
		<?if(isset($project->post_content) && !empty($project->post_content)):?>
			<p class="pjt-description"><?=$project->post_content ?></p>
		<?endif;?>
	</div>