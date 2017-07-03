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
            if (have_posts()) : while (have_posts()) : the_post(); ?>
  


<?php  echo'<div class="postCollapse apprentices col-md-6">';
            // the_loop begin
           
			echo'<section>';
     
	  echo' <a id="top" class="scroll"></a>';?>

    <h2><?php the_title(); ?></h2>
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
