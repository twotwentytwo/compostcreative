<?
if($page == 'project') :
	$args = array('post_parent' => 6,'post_type' => 'any', 'numberposts' => -1, 'post_status' => 'any', 'order' => 'ASC');
	$pages = get_children($args);
endif;
?>
<div class="cmp-sidebar">
    <div class="blur"></div>
    <div class="pixels"></div>
    <a href="/dev/compostcreative/"><h1 class="cmp-logo" title="Compost Creative"><span></span>Compost Creative</h1></a>
    <ul class="cmp-navigation">
        <li class="showreels"><a href="/dev/compostcreative/showreels/">Showreels</a></li>
        <li class="project">
        	<a href="/dev/compostcreative/project/index.php?id=11">Projects</a>
        	<? if($page == 'project') :?>
	        	<ul class="featured-projects">
	        		<? foreach($pages as $webpage) : ?>
	    				<? $appear_in_navigation = get_post_meta($webpage->ID, 'appear_in_navigation', true);?>
	    				<? if($appear_in_navigation == 'true'): ?>
	    					<li><a href="/dev/compostcreative/project/index.php?id=<?=$webpage->ID ?>"><?=$webpage->post_title ?></a></li>
						<? endif; ?>
					<?endforeach; ?>
				</ul>
			<? endif; ?>
        </li>
        <li class="about">
        	<a href="/dev/compostcreative/about/">About</a>
        	<? if($page == 'about'): ?>
    			<div class="info">
    				<p>We are a visual effects team creating leading broadcast graphics for TV, corporate and advertising clients. Formed after 8 years in house at the BBC, our hands on approach has brought us as many prop builds and costume changes as it has creative challenges and late nights.</p><p>﻿We approach every project with your needs and budget firmly in mind, always producing original concepts, on time and beyond your expectations. Even if it does mean donning the green catsuits again.</p><p>Dedication doesn’t always mean dignity.</p>
    			</div>
    		<? endif; ?>
        </li>
        <li class="contact">
        	<a href="/dev/compostcreative/contact/">Contact</a>
        	<? if($page == 'contact'): ?>
    			<div class="info">
  					<p class="telephone">(+44) 0207 6836280</p><p class="email"><a href="mailto:info@compostcreative.com">﻿info@compostcreative.com</a></p><p class="address">Buzzer 9<br>24-26 Shacklewell Lane<br>London<br><a href="https://www.google.com/maps/preview?oe=utf-8&q=E8+2EZ&ie=UTF-8&hq=&hnear=0x48761c8c9202505b:0x8ddebe1f2255aec2,London+E8+2EZ,+UK&ei=oEJVU6ilIYSVPammgdgE&ved=0CIwBELYDMAo" target="_blank">E8 2EZ</a></p>
    			</div>
    		<? endif; ?>
       	</li>
    </ul>
    <? if($page == 'home'): ?>
    	<p class="view-project"><a href="#">View project</a></p>
    <? endif; ?>
    <ul class="social-links">
        <li class="vimeo"><a href="http://vimeo.com/compostcreative" target="_blank" class="visuallyhidden">Vimeo</a></li>
        <li class="youtube"><a href="https://www.youtube.com/user/colinthornton" target="_blank" class="visuallyhidden">YouTube</a></li>
        <li class="twitter"><a href="https://twitter.com/CompostCreative" target="_blank" class="visuallyhidden">Twitter</a></li>
        <li class="easteregg"><a href="#" class="visuallyhidden">Other</a></li>
    </ul>
</div>