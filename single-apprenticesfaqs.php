<?php
/*
Template Name Posts: FAQs
Description: This is the template used for FAQs in Apprentices
*/
?>
<?php 
get_header();

 // FOOTER AWARDS MENU
		 ?><?php include(TEMPLATEPATH . '/page-furniture/jobslider.php'); ?>
<?php 
echo'<div id="aigwd-maincontentcontainer" class="row">';
             
            // the_loop begin
            if (have_posts()) : while (have_posts()) : the_post();

 	
  
  echo'<div class="apprenticescontainer">  <div id="apprenticescontainer">
   
  <div id="newscolumn" class="internalcolumn col-xs-12 col-md-3"> ';
     	       // navigation  
	wp_nav_menu(array(
		'theme_location' => 'secondary_menu', // menu slug from step 1
		'container' => false, // 'div' container will not be added
		'menu_class' => 'nav', // <ul class="nav"> 
		'fallback_cb' => 'default_header_nav', // name of default function from step 2
	));
 
  echo'</div> ';
  
  echo'<div class="postCollapse apprentices col-xs-12 col-md-3">';
            // the_loop begin
           
			echo'<section>';
     
	  echo' <a id="top" class="scroll"></a>';
	  
	  the_content();?>
<?php include(TEMPLATEPATH . '/page-furniture/faqs.php'); echo'</section></div>';

  
            // anything after the loop?
            endwhile;  endif;  
          
  echo' 

   <div id="rightcolumn">';

  get_sidebar( '' );  
 
   echo'</div>'; 	
   
 echo '</div>';
  echo '</div>';
     
  
echo'</div>
 ';
 get_footer(); ?>
