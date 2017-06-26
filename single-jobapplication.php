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
 <?php 
echo'<div id="aigwd-maincontentcontainer" class="row">';
             
            // the_loop begin
            if (have_posts()) : while (have_posts()) : the_post();
  
  echo'<div class="apprenticescontainer"> '; 
   
  echo'<div class="postCollapse registrationform">';
            // the_loop begin
           
echo '<section class="problems" style="text-align: center; font-size: 13px; font-weight: 600; color: #EF9604; line-height: 18px;">';
echo 'PROBLEMS APPLYING ONLINE?&nbsp;&nbsp; Please call: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;VIC: 03 9867 0149 or 03 5440 3900&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NSW: 02 6041 0607&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;QLD: 03 5440 3900&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;WA/SA/NT: 08 8394 0032';
echo '</section>';
			echo'<section>';   
echo'<iframe src="http://apply.aigroupapprentices.com.au/signin.php?ID=';if ( get_post_meta($post->ID, 'sh_jobapplication', true)) echo do_shortcode (get_post_meta($post->ID, 'sh_jobapplication', true));echo '"';  echo'width="1240px" height="1000px" style="height: 83vh"></iframe>
</iframe>';

  
   
 echo'</section></div>';
  
            // anything after the loop?
            endwhile;  endif;  
           
   echo'</div> ';
  
   
    
   echo '</div>';
     
  

 get_footer(); ?>