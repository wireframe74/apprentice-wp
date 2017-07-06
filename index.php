<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 
 */   		get_header();



			if // ADDING HOMEPAGE CONTAINER TO HOMEPAGE / FRONTPAGE
			(is_front_page() ) : 
			  
			 echo'<div id="homepagecontainer">';
			endif;
			  
			 echo'<div id="aigwd-maincontentcontainer" class="row"'; 
		
			if // ADDS CLASS OF HOMEPAGE TO OPENING aigwd-MAINCONTENTCONTAINER
			(is_front_page() ) : 
			echo'class="homepage"';
			endif;
			echo '>';
	
			if (!is_single()   ||!is_front_page() || !is_page() ) :
         	echo " ";
		 	endif; 
         
		 	if ( is_search('publications') ) : 
		 	echo'<h1>Search results for';
      	 	the_search_query();
	   		echo'</h1>';
		
			elseif ( is_archive() ) :
	         
			echo "<h4 class=\"title\">" . single_cat_title("", false) . "</h4><h6 class=\"subtitle\">" . category_description() . "</h6>"; 
            echo " ";
			endif; 
            
			if //   
			  (is_page()) :
			 
			elseif (is_page('Contact') || (is_home())) :  
    		//<!-- no left column -->
    		else : 
			endif;
	
			if // CHANGING THE CLASS ON THE CONTENT COLUMN
			(  is_front_page() )  :
	 		echo'<div class="postCollapse homepagecontent col-md-6">'; 
	 
	 		elseif(is_archive() || is_search()  || is_page()  && !is_front_page()  && !is_page('Testimonials'))  :
			echo '<div class="postCollapse internal col-md-6">';
	  
	 		elseif(is_page('Testimonials') )  :
	 		echo'<div class="postCollapse internaltestimonials">';
			elseif (is_home()) :
			echo '<div class="postCollapse blogposts">';
	 		else : 
	 		echo'<div class="postCollapse col-xs-12 col-md-6">';
	 		endif; ?>

<?php edit_post_link(); ?>

<?php if (!is_home() ) include(TEMPLATEPATH . '/page-furniture/maincontent.php');  
else  include(TEMPLATEPATH . '/page-furniture/blogposts.php');?>

<?php
			 
  			 if (  is_front_page()) :
			  // LATEST JOBS 
			 
			  include(TEMPLATEPATH . '/page-furniture/jobsliderhome.php'); 
      
			endif;
	  
			if 
			// ADD BOXOUTS TO HOMEPAGE  -- 4 LARGE // 4 SMALL
			(  is_front_page() ) :  
			
			echo '<div id="boxouts">';   
			include(TEMPLATEPATH . '/page-furniture/boxouts.php');  
			echo '</div>';  
		 
			endif;
			echo'</div>';
			if   (is_front_page() ) : echo '';endif;
			get_footer(); ?>
