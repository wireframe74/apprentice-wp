<?php
/*
Template Name Posts: Productivity Centre Individual Page
Description: This is the template used for The Productivity Centre individual pages
*/
?>
<?php 
get_header();

 // FOOTER AWARDS MENU
		 
	   
	    
 
echo'<div id="aigwd-maincontentcontainer" class="row">';
             
            // the_loop begin
            if (have_posts()) : while (have_posts()) : the_post();

 	
  
  echo'<div class="employerscontainer">  <div id="employerscontainer">
   
 <div id="newscolumn" class="internalcolumn col-xs-12 col-md-3"> ';
     	       // navigation  
	wp_nav_menu(array(
		'theme_location' => 'tertiary_menu', // menu slug from step 1
		'container' => false, // 'div' container will not be added
		'menu_class' => 'nav', // <ul class="nav"> 
		'fallback_cb' => 'default_header_nav', // name of default function from step 2
	));
 
  echo'</div> ';
  
  echo'<div class="postCollapse employers col-xs-12 col-md-6">';
            // the_loop begin
           
			echo'<section>';
     
	  echo' <a id="top" class="scroll"></a>';
	  
	  ?>
<?php  
 echo '<h1>';the_title();echo'</h1>';
 the_content();
 
   
 echo'</section></div>';

  
            // anything after the loop?
            endwhile;  endif;  
          
  echo' 

   <div id="rightcolumn" class="col-xs-12 col-md-3">';
//include(TEMPLATEPATH . '/page-furniture/employernews.php');
  include(TEMPLATEPATH . '/page-furniture/productivitycentre-boxouts-right.php');

  get_sidebar( '' );  
 
   echo'</div>'; 	
   
 echo '</div>';
  echo '</div>';
     
  
echo'</div>
 ';
 get_footer(); ?>
