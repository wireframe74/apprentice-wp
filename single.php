<?php
/*
 
Description: This is the template used for Single News Pages
*/
?>
<?php 
get_header();

 // FOOTER AWARDS MENU
		 
	   
	    
 
echo'<div id="aigwd-maincontentcontainer" class="row">';
             
            // the_loop begin
            if (have_posts()) : while (have_posts()) : the_post();

 	
  
  echo'<div class="employerscontainer">  <div id="employerscontainer">';
   
 
  
  echo'<div class="postCollapse blogposts">';
            // the_loop begin
           
			echo'<section>
     <h1>Blog</h1>
<div  class="blogpostscontainer individualblog">';
	 
	  
	  ?>
<?php  
 echo'<div class="blogpostinternalimage">'; if ( has_post_thumbnail() ) { the_post_thumbnail(); } echo'</div>';  echo '<h1>';the_title();echo'</h1>';
 the_content();
 
   
 echo'</section></div>';

  
            // anything after the loop?
            endwhile;  endif;  
          
  echo' 

  <div id="rightcolumn" style="margin-top:4em;">';?> 

  
			 
		 <?php // FOLLOW US WIDGET
		if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Follow Us Widget') ) :   endif; 
		 
        	 
		  // FOLLOW US WIDGET
		if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Find out more') ) :   endif; 
		
		echo do_shortcode( '[mpsp_posts_slider id="517"] ') 
		   ?>
 
  </div>
  <?php 
 echo '</div>';
  echo '</div>';
     
  
echo'</div>
 ';
 get_footer(); ?>
