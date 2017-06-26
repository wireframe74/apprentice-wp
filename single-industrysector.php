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
echo'<div id="aigwd-maincontentcontainer" class="row">';
            // the_loop begin
            if (have_posts()) : while (have_posts()) : the_post(); 
			echo'<div id="newscolumn" class="internalcolumn col-xs-12 col-md-3"><div id="submenu">';
			{ 
		wp_nav_menu(array(
		'theme_location' => 'quaternary_menu', // menu slug from step 1
		'container' => false, // 'div' container will not be added
		'menu_class' => 'nav', // <ul class="nav"> 
		'fallback_cb' => 'default_header_nav', // name of default function from step 2
	));}  
	echo'
  </div>
   </div>
  
<div class="postCollapse expertisearea">
    
   
    
    <section ';post_class('post');echo'>
      
       <div class="entry expertisearea2">';
        
	include(TEMPLATEPATH . '/page-furniture/tabs.php');
	echo'</div>
      
  
    </section>';
   
    
            // anything after the loop?
            endwhile;  
            // 404 handling
            else :
			echo'<section>
      <h3 class="title">There should be something here.  But there isn\'t.</h3>
      <h5 class="title">
      can\'t find anything.
      </h2>
    </section>';
            // the_loop end            
            endif; 
			echo'</div>
   
 <div id="rightcolumn">';
 include(TEMPLATEPATH . '/page-furniture/findaspecialist.php'); 
 include(TEMPLATEPATH . '/page-furniture/makeanenquiry.php');
 include(TEMPLATEPATH . '/page-furniture/relatedpublications.php');
 echo' 
 </div>
  
  
   
</div>
</div>';
get_footer(); ?>
