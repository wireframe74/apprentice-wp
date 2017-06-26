<?php
/*
 
Template Name: ALL JOBS

*/

get_header();

 // FOOTER AWARDS MENU
		 
	 ?>
<?php include(TEMPLATEPATH . '/page-furniture/jobslider.php');
 ?>
<?php 
echo'<div id="aigwd-maincontentcontainer" class="row">';
             
            // the_loop begin
            if (have_posts()) : while (have_posts()) : the_post();
  
  echo'<div class="apprenticescontainer">  
   
  <div id="newscolumn" class="internalcolumn col-xs-12 col-md-3"> ';
     	       // LEFT HAND REGISTER & SIGN IN LINKS
			   include(TEMPLATEPATH . '/page-furniture/registerlinks.php');
			  include(TEMPLATEPATH . '/page-furniture/findajob.php'); 
 
  echo'</div> ';
  
  echo'<div class="postCollapse apprentices alljobs">';
            // the_loop begin
           
			echo'<section>';
     
	  echo' <a id="top" class="scroll"></a>';?>
<?php echo '<h2>';the_title(); echo '</h2>';?>
<?php the_content();
include(TEMPLATEPATH . '/page-furniture/alljobs.php'); ?>
<?php	echo' </section>';
  
            // anything after the loop?
            endwhile;  endif;  
           
   echo'</div> ';
  
    
   echo '</div>';
   echo '</div>';
     
  

 get_footer(); ?>
