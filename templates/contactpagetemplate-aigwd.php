<?php
/**
 * Template Name: Contact Page
 *
 */

get_header();

 ?><?php include(TEMPLATEPATH . '/page-furniture/jobslider.php'); ?>
		 
	  
<?php 
echo'<div id="aigwd-maincontentcontainer" class="row">';
             
            // the_loop begin
            if (have_posts()) : while (have_posts()) : the_post();
  
  echo'<div class="apprenticescontainer">';
  
  echo'<div class="postCollapse contactpage">';
            // the_loop begin
           
			echo'<section>';
     
	  ?>
       <h1 style="border-bottom:1px solid #1a1a1a;padding-bottom:10px!important;">Contact Us</h1>
<?php the_content();?>

	 <?php include(TEMPLATEPATH . '/page-furniture/statemanagement.php');?>
<?php	echo' </section>';
  
            // anything after the loop?
            endwhile;  endif;  
           
   echo'</div> 
  
   <div id="rightcolumn" class="col-md-3">';?>
 <h1 style="border-bottom:1px solid #1a1a1a;padding-bottom:10px!important;margin-top:10px!important;">National Management</h1>

<?php 
// METRO CONTENT
	
 query_posts( array( 'post_type' => 'nationalcontactinfo',
			 'taxonomy'  => 'national-management-contact-category','posts_per_page' => -1,'orderby' => 'menu_order','order' => 'ASC'));  while (have_posts()) : the_post();   
    
	echo '<div class="nationaloffice">';
	echo'<h3 class="officename">';the_title();echo'</h3>';
     echo '<p class="officecontent"';the_content();echo'</p>';
	
	echo '</div>';
	 
    endwhile;  wp_reset_query();?>

 



  
  <?php echo '</div>'; 	   
   echo '</div>';
   echo '</div>';
     
  

 get_footer(); ?>
