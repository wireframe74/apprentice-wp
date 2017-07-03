<?php
/*
Template Name Posts: Job Search
Description: This is the template used for FAQs in Apprentices
*/
?>
<?php 
get_header();?>

  <?php include(TEMPLATEPATH . '/page-furniture/jobslider.php'); ?>

 <?php 
echo'<div id="aigwd-maincontentcontainer" class="row">';
             
            // the_loop begin
            if (have_posts()) : while (have_posts()) : the_post();

 	
  
  echo'<div class="employerscontainer">  <div id="employerscontainer">
   
  <div id="newscolumn" class="internalcolumn col-xs-12 col-md-3"> ';
     	       // navigation  
	wp_nav_menu(array(
		'theme_location' => 'secondary_menu', // menu slug from step 1
		'container' => false, // 'div' container will not be added
		'menu_class' => 'nav', // <ul class="nav"> 
		'fallback_cb' => 'default_header_nav', // name of default function from step 2
	));
 
  echo'</div> ';
   
 
  
  echo'<div class="postCollapse findajob">';
            // the_loop begin
           
			echo'<section>
   
<div  class="apprenticescontainer">';
	 
	  
	 
      
     

  
  
 the_content();
 
 
 echo '<h2>Find a Job</h2>';
 echo '<p>';
 include(TEMPLATEPATH . '/page-furniture/registerlinks.php');
 echo'</p>
 
 <p>Browse our current vacancies listings and apply online!</p> 
<div class="applybutton"><a href="/all-jobs/">Browse All Jobs</a></div>

 ';
     include(TEMPLATEPATH . '/page-furniture/findajob.php'); 
 echo'</section></div>';

  
            // anything after the loop?
            endwhile;  endif;  
          
  echo' 

  <div id="rightcolumn" class="col-md-3">';?> 

  <?php  include(TEMPLATEPATH . '/page-furniture/featuredjobs.php'); ?>
			 
		 
  </div>
  <?php 
 echo '</div>';
  echo '</div>';
     
  
echo'</div>
 ';
 get_footer(); ?>
