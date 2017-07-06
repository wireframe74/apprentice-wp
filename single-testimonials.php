<?php
/**
 * THIS IS THE SINGLE TESTIMONIALS TEMPLATE USED TO DISPLAY ALL SINGLE TESTIMONIAL / CASE STUDY PAGES
   
    
 *
 */   
get_header();
echo'<div id="aigwd-maincontentcontainer" class="row">';
            // the_loop begin
            if (have_posts()) : while (have_posts()) : the_post();
   echo'<div class="employerscontainer">
   <div id="employerscontainer">
  <div id="newscolumn" class="internalcolumn col-xs-12 col-md-3"> ';
  		// LEFT HAND NAVIGATION // USE TERTIARY MENU FOR EMPLOYERS // SECONDARY FOR APPRENTCIES // QUARTERNARY FOR ABOUT US  
		wp_nav_menu(array(
		'theme_location' => 'tertiary_menu', // menu slug from step 1
		'container' => false, // 'div' container will not be added
		'menu_class' => 'nav', // <ul class="nav"> 
		'fallback_cb' => 'default_header_nav', // name of default function from step 2
	));
  echo'</div> ';
  echo'<div class="postCollapse employers col-md-6">';
            // the_loop begin
			echo'<section>';
 		echo' <a id="top" class="scroll"></a>'; ?>
       <h1 class="page-title"><?php the_title(); ?></h1>
		<?php the_content();
		echo'<a href="/employers/how-we-can-help-your-business/"><div class="enterbutton">Back</div></a>';
		include(TEMPLATEPATH . '/page-furniture/jump.php');   
		echo'</section>';
            // anything after the loop?
            endwhile;  endif;  
  	echo'</div> 
   		<div id="rightcolumn" class="col-md-3">';
		get_sidebar( '' );  
   		echo'</div>'; 	
	echo '</div>';
  	echo '</div>';
echo'</div>';
 get_footer(); ?>
