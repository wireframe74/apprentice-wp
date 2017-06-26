<div id="expertisemenu1">
<ul class="expertise-tabs">
<li class="overview"><a href="#overview">Overview</a></li>
<li class="experience"><a href="#experience">Experience</a></li>
<li class="keypeople"><a href="#keypeople">Key People</a></li>
</ul>
</div>

<div id="overview" style="padding:10px;">
<h2>OVERVIEW</h2>
<?php if ( get_post_meta($post->ID, 'sh_overview', true) ) { 
	echo do_shortcode (get_post_meta($post->ID, 'sh_overview', true));
}
echo'</div>

  <div id="experience" style="display:none; padding:10px;">';
 
 if ( get_post_meta($post->ID, 'sh_experience', true) ) {
	echo '<div class="experiencearea">'; 
	echo do_shortcode (get_post_meta($post->ID, 'sh_experience', true));
	echo '</div>';
	if ( get_post_meta($post->ID, 'sh_experience', true) ) 
	echo '<div class="experiencearea">'; 
	echo do_shortcode (get_post_meta($post->ID, 'sh_experience2', true));
	echo '</div>';
	if ( get_post_meta($post->ID, 'sh_experience', true) ) 
	echo '<div class="experiencearealast">'; 
	echo do_shortcode (get_post_meta($post->ID, 'sh_experience3', true));
	echo '</div>';
} 
echo'
</div>  

<div id="keypeople"  style="display:none; padding:15px 10px 10px 10px;">';
include(TEMPLATEPATH . '/page-furniture/keypeople-snippet.php'); 
 ?>
</div>