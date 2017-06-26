<?php
/*
Template Name Posts: Blog
Description: This is the main blog page
*/
?>
<?php 
get_header();

 // FOOTER AWARDS MENU
		 
	   
	    
 
echo'<div id="aigwd-maincontentcontainer" class="row">';
             
            // the_loop begin
            if (have_posts()) : while (have_posts()) : the_post();

 	
  
  echo'<div class="employerscontainer">  <div id="employerscontainer">
   
  
  
  <div class="postCollapse blog col-md-6">';
            // the_loop begin
           
			echo'<section>';
     
	   
	  
	 include(TEMPLATEPATH . '/page-furniture/blogposts.php');
 
 
 
   
 echo'</section>';

  
            // anything after the loop?
            endwhile;  endif;  
          
  echo' 

   <div id="rightcolumn" class="col-md-3">';
   get_sidebar( '' );  
   get_footer(); ?>
