
	<h2 class="cmp-title"><span>Projects archive</span></h2>
	<div class="cmp-content clearfix">
	<? foreach($pages as $webpage) : 
		$thumbnail = get_post_meta($webpage->ID, 'thumbnail', true);?>
		<div class="cmp-project clearfix">
			<a href="/dev/compostcreative/project/index.php?id=<?=$webpage->ID ?>">
				<img class="pjt-image" src="<?=$thumbnail ?>" alt="Image for <?=$webpage->post_title ?>" />
				<p class="pjt-title"><span><?=$webpage->post_title ?></span></p>
			</a>
		</div>
	<?endforeach; ?>
	</div>
