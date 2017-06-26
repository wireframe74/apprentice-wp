<?php
/*
 
Template Name: THIRD PARTY JOB SEARCH PAGE 

*/
?>
<?php 
get_header();?>

<?php include(TEMPLATEPATH . '/page-furniture/jobslider.php'); ?>

<?php 
echo'<div id="aigwd-maincontentcontainer" class="row">';
             
            // the_loop begin
            if (have_posts()) : while (have_posts()) : the_post();

 	
  
  echo'<div class="employerscontainer">  <div id="employerscontainer">';
   
 echo '<div id="newscolumn" class="internalcolumn col-xs-12 col-md-3"> ';
     	       // navigation  
	wp_nav_menu(array(
		'theme_location' => 'secondary_menu', // menu slug from step 1
		'container' => false, // 'div' container will not be added
		'menu_class' => 'nav', // <ul class="nav"> 
		'fallback_cb' => 'default_header_nav', // name of default function from step 2
	));
 
  echo'</div> ';
  
  echo'<div class="postCollapse jobsearch">';
            // the_loop begin
           
			echo'<section>';
   
  // SIGN IN FORM // ?>
 <?php the_content();?>
   
<?php 
   
 echo'</section></div>';

  
            // anything after the loop?
            endwhile;  endif;  
          
  

 echo '</div>';
  echo '</div>';
     
  
echo'</div>';
 get_footer(); ?>
