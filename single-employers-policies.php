<?php
/*
Template Name Posts: Employers Policies
Description: This is the template used for Policies in Employers
*/
?>
<?php
get_header();

?>
<?php 
echo'<div id="aigwd-maincontentcontainer" class="row">';
             
            // the_loop begin
            if (have_posts()) : while (have_posts()) : the_post();
  
  echo'<div class="apprenticescontainer">  
   
  <div id="newscolumn" class="internalcolumn col-xs-12 col-md-3"> ';
     	       // LEFT HAND NAVIGATION  
	wp_nav_menu(array(
		'theme_location' => 'tertiary_menu', // menu slug from step 1
		'container' => false, // 'div' container will not be added
		'menu_class' => 'nav', // <ul class="nav"> 
		'fallback_cb' => 'default_header_nav', // name of default function from step 2
	));
 
  echo'</div> ';
  
  echo'<div class="postCollapse col-xs-12 col-md-9"';
            // the_loop begin
           
			echo'<section>';
     
	  echo' <a id="top" class="scroll"></a>';?>

       <h1 class="page-title"><?php the_title(); ?></h1>
<?php the_content();?>
<?php // include(TEMPLATEPATH . '/page-furniture/jumpcontent.php');   ?>
<?php	echo' </section>';
  
            // anything after the loop?
            endwhile;  endif;  
           
   echo'</div> 
  
   <!-- <div id="rightcolumn"> -->';

   // include(TEMPLATEPATH . '/page-furniture/jumpmenu.php');   
 
   echo '<!-- </div> -->'; 	   
   echo '</div>';
   echo '</div>';
     
  

 get_footer(); ?>