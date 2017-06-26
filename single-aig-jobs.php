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
		 
	 ?>
<?php include(TEMPLATEPATH . '/page-furniture/jobslider.php'); ?>
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
  
  echo'<div class="postCollapse apprentices col-sm-6">';
            // the_loop begin
           
			echo'<section>';
     
	  echo' <a id="top" class="scroll"></a>';?>
<?php echo '<h2>';the_title(); echo '</h2>';?>
<?php the_content();?>
<?php	echo' </section>';
  
            // anything after the loop?
            endwhile;  endif;  
           
   echo'</div> 
  
   <div id="rightcolumn" class="jobpage col-xs-12 col-md-3">';

  echo '<div class="applybutton"><a href="/apply/job-';if ( get_post_meta($post->ID, 'sh_job-id', true)) echo do_shortcode (get_post_meta($post->ID, 'sh_job-id', true));echo'">APPLY</a></div>';
  
  echo '<p><strong>Job Title</strong><br/>';
  the_title();echo'</p>';
  
  if ( get_post_meta($post->ID, 'sh_job-id', true)) echo '<p><strong>Job ID</strong><br/>';
  if ( get_post_meta($post->ID, 'sh_job-id', true)) echo do_shortcode (get_post_meta($post->ID, 'sh_job-id', true)); 
  if ( get_post_meta($post->ID, 'sh_job-id', true)) echo '</p>';
  
  if ( get_post_meta($post->ID, 'sh_location', true)) echo '<p><strong>Location</strong><br/>';
  if ( get_post_meta($post->ID, 'sh_location', true)) echo do_shortcode (get_post_meta($post->ID, 'sh_location', true));
  if ( get_post_meta($post->ID, 'sh_location', true)) echo '</p>';
  
  if ( get_post_meta($post->ID, 'sh_listing_date', true)) echo '<p><strong>Listed</strong><br/>';
echo changeDateFormat($post->post_date,'Y-m-d H:i:s','d/m/Y');
//  if ( get_post_meta($post->ID, 'sh_listing_date', true)) echo do_shortcode (get_post_meta($post->ID, 'sh_listing_date', true));
  if ( get_post_meta($post->ID, 'sh_listing_date', true)) echo '</p>';
  


  if ( get_post_meta($post->ID, 'sh_salary', true)) echo '<p><strong>Salary</strong><br/>';
  if ( get_post_meta($post->ID, 'sh_salary', true)) echo do_shortcode (get_post_meta($post->ID, 'sh_salary', true));
  if ( get_post_meta($post->ID, 'sh_salary', true)) echo '</p>';
  
  echo '<p><strong>Job Description</strong><br>';echo excerpt(20);echo '</p>';
 
  	// ANCHOR 2 LI
   
	if ( get_post_meta($post->ID, 'sh_anchor2header', true) ) 
	
	if ( get_post_meta($post->ID, 'sh_anchor2header', true) ) 
 
   echo '</div>'; 	   
   echo '</div>';
   echo '</div>';
     
  

 get_footer(); ?>