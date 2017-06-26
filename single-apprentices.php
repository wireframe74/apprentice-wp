<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 
 */   

get_header();

 // FOOTER AWARDS MENU
	;?>	 
<?php include(TEMPLATEPATH . '/page-furniture/jobslider.php'); ?>
<?php 
echo'<div id="aigwd-maincontentcontainer" class="row">';
             
            // the_loop begin
            if (have_posts()) : while (have_posts()) : the_post();
  
  echo'<div class="apprenticescontainer">  
   
  <div id="newscolumn" class="internalcolumn col-xs-12 col-md-3"> ';
     	       // LEFT HAND NAVIGATION  
	wp_nav_menu(array(
		'theme_location' => 'secondary_menu', // menu slug from step 1
		'container' => false, // 'div' container will not be added
		'menu_class' => 'nav', // <ul class="nav"> 
		'fallback_cb' => 'default_header_nav', // name of default function from step 2
	));
 
  echo'</div> ';
  
  echo'<div class="postCollapse apprentices col-xs-12  col-sm-6">';
            // the_loop begin
           
			echo'<section>';
     
	  echo' <a id="top" class="scroll"></a>';?>
<?php the_content();?>
<?php include(TEMPLATEPATH . '/page-furniture/jump.php');   ?>
<?php	echo' </section>';
  
            // anything after the loop?
            endwhile;  endif;  
           
   echo'</div> 
  
   <div id="rightcolumn" class="col-xs-12 col-md-3">';

  get_sidebar( '' );  
 
   echo '</div>'; 	   
   echo '</div>';
   echo '</div>';
     
  

 get_footer(); ?>
