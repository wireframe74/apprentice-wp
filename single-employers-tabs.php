<?php
/**
 * Template Name: Info on Apprenticeships
 *


 */

 
            
  

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
  
  echo'<div class="postCollapse tabs">';
            // the_loop begin
           
			echo'<section> 
     

	  
	  <div class="entry tabarea" >';
       include(TEMPLATEPATH . '/page-furniture/tabs.php');
	   echo'</div>


			 
	</section>';
		 


  
            // anything after the loop?
            endwhile;  endif;  
           
  echo'</div> 
  
   <div id="rightcolumn">';

  get_sidebar( '' );  
 
   echo'</div>'; 	
   
 echo '</div>';
  echo '</div>';
     
  
echo'</div>
 ';
 get_footer(); ?>
