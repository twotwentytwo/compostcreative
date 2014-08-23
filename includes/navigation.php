<?
if($page == 'project') :
	$args = array('post_parent' => 6,'post_type' => 'any', 'numberposts' => -1, 'post_status' => 'any', 'order' => 'ASC');
	$pages = get_children($args);
endif;
?>
<div class="cmp-sidebar clearfix">
    <div class="pixels"></div>
    <a href="/dev/compostcreative/"><h1 class="cmp-logo" title="Compost Creative"><span></span>Compost Creative</h1></a>
    <div class="cmp-navigation-toggle">
        <a href="#" id="navigation-toggle">
            <img src="/dev/compostcreative/img/template/burger2.png" />
        </a>
    </div>

    <ul class="cmp-navigation">
        <li class="showreels"><a class="nav-item" href="/dev/compostcreative/showreels/">Showreels</a></li>
        <li class="project">
        	<a href="/dev/compostcreative/projects/" class="nav-item">Projects</a>
        </li>
        <li class="about">
        	<a class="nav-item" href="/dev/compostcreative/about/">About</a>
        	<!--
            <?// if($page == 'about'): ?>
    			<div class="info"></div>
    		<?// endif; ?>
            -->
        </li>
        <li class="contact">
        	<a class="nav-item" href="/dev/compostcreative/contact/">Contact</a>
        	<? if($page == 'contact'): ?>
    			<div class="info"></div>
    		<? endif; ?>
       	</li>
    </ul>
    <div class="social-links-container">
        <ul class="social-links">
            <li class="vimeo"><a href="http://vimeo.com/compostcreative" target="_blank"><span class="visuallyhidden">Vimeo</span></a></li>
            <li class="youtube"><a href="https://www.youtube.com/user/colinthornton" target="_blank"><span class="visuallyhidden">Youtube</span></a></li>
            <li class="twitter"><a href="https://twitter.com/CompostCreative" target="_blank"><span class="visuallyhidden">Twitter</span></a></li>
        </ul>
    </div>
</div>