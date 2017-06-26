<?php /* Start the Loop */ ?>
<?php while ( have_posts() ) : the_post(); ?>

<?php // SET UP <SECTION TAG 
			echo'<section ';
			post_class('post'); 

			if(is_page('Contact') ) : 
  			echo 'class="internal">';  
  			
			elseif(is_search('publications') ) : 
  			echo 'style="width:690px;margin-left:0px;">';  
  			
			elseif (is_page('Testimonials') ) : 
  			echo 'style="margin:0px;">'; 
			elseif(is_home()) : echo 'class="blogposts">';
			
			else : 
			echo'>';
			endif; 
			
				 
			// ADD ENTRY TAG
			echo '<div class=" entry'; 
			
			if // ANY PAGE THAT ISN'T THE HOMEPAGE / FRONTPAGE
			(is_front_page()  || is_page()   && !is_page('Clients')) :
			echo ' standard">';   
			
			else : 
			// EVERY OTHER PAGE 
			echo'">';
			endif;
			?>
            
      
<?php  if // ADD LEFT HAND COLUMN TO -- ALL PAGES THAT IS NOT FRONT PAGE --
			( !is_front_page() && !is_home() ):
			echo'<div id="newscolumn" class="internalcolumn col-md-3">';
			include(TEMPLATEPATH . '/page-furniture/leftcolumn.php');  
			echo'</div><div class="content-column col-md-6">';
endif;    
 if // ADD LEFT HAND COLUMN TO -- ALL PAGES THAT IS NOT FRONT PAGE --
			( !is_home() ):
the_content(); 
else   : 

endif;



if // CLOSE CONTENT-COLUMN IF ISN'T FRONT PAGE --
			(!is_front_page()  ):
echo '</div>'; endif; ?>

<?php  if // ADD RIGHT HAND COLUMN -- TO ALL PAGES THAT IS NOT FRONT PAGE --
			(!is_front_page() &&!is_home() ):
			echo '<div id="rightcolumn" class="col-md-3">
				<div class="followus">'; 
		  // FOLLOW US WIDGET
		if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Follow Us Widget') ) :   endif; 
		echo '</div>'; 
        	echo'<div class="findoutmore">'; 
		  // FOLLOW US WIDGET
		if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Find out more') ) :   endif; 
		echo '</div>'; endif;  ?>
<?php if // ADD DISCOVER MORE LINK TO HOMEPAGE ONLY
			( is_front_page()  ):
			query_posts( array( 'post_type' => 'page-furniture',
			 'taxonomy'  => 'page-furniture-category','term' => 'homepagelink','posts_per_page' => 1)); 
			while (have_posts()) : the_post();   
			echo'<div class="box-text homepage">';
			echo'<a href="';echo do_shortcode (get_post_meta($post->ID, 'sh_url', true));echo'">';
			echo'<div class="enterbutton">DISCOVER MORE &nbsp;  &nbsp; <span class="wpjb-glyphs wpjb-icon-right-open"></span></div>';
			echo'</a></div> '; endwhile; wp_reset_query();endif;  ?>
<?php  if // CLOSE CONTENT DIV
			 
			 
			(!is_front_page()  ):
         echo'</div>';
		 
		 elseif (is_home()) :
		 echo 'this is broken'; 
		 
		 else : echo'</div> </section> </div>';
    	endif;  ?>
 
			
		<?php endwhile; ?>	

