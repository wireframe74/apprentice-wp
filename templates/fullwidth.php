<?php
/*
 
Template Name: Full Width Template

*/
?>
<?php 
get_header();?>
<?php 
echo'<div id="aigwd-maincontentcontainer" class="row">';
             
            // the_loop begin
            if (have_posts()) : while (have_posts()) : the_post();

 	
  
  echo'<div class="employerscontainer">  <div id="employerscontainer">';
   
  
  
  echo'<div class="postCollapse fullwidth">';
            // the_loop begin
           
			echo'<section>';
   
    ?>
<?php the_content();?>
<?php 
   
 echo'</section></div>';

  
            // anything after the loop?
            endwhile;  endif;  
          
  

 echo '</div>';
  echo '</div>';
     
  
echo'</div>';
 get_footer(); ?>
