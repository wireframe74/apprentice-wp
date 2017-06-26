<?php
/*
Template Name: Search Page
*/
 

get_header();

 // FOOTER AWARDS MENU
	;?>	 
 <?php 
echo'<div id="aigwd-maincontentcontainer" class="row">';
             
             
  
  echo'<div class="apprenticescontainer">  
   <div id="newscolumn" class="internalcolumn col-xs-12 col-md-3"> ';
     	       // LEFT HAND REGISTER & SIGN IN LINKS
			   include(TEMPLATEPATH . '/page-furniture/registerlinks.php');
			   include(TEMPLATEPATH . '/page-furniture/findajob.php');
 
  echo'</div> ';
 
  
  echo'<div class="postCollapse apprentices alljobs">';
            // the_loop begin
           
			echo'<section>'; ?>


<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'twentytwelve' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header>

			 

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				 <?php echo '<div class="detailcontainer searchresults"><h2>';
				echo'<a href="';the_permalink();echo'">';the_title();echo'</a>';
				 echo '</h2>';
				 echo'<p>';
				 the_excerpt();
				 echo '</p></div>';
			endwhile; ?>

			 

		<?php else : ?>

			<article id="post-0" class="post no-results not-found">
				<header class="entry-header">
					<h1 class="entry-title"><?php _e( 'Nothing Found', '' ); ?></h1>
				</header>

				<div class="entry-content">
					<p><?php _e( 'Sorry, but nothing matched your search criteria.<br/> Please try again with some different keywords.', '' ); ?></p>
					<br/>
					<?php get_search_form(); ?>
				</div><!-- .entry-content -->
			</article><!-- #post-0 -->

		<?php endif; ?>
        
        
 <?php	echo' </section>';
  
            // anything after the loop?
           
           
   echo'</div> 
  
   
   </div>';
   echo '</div>';
     
  

 get_footer(); ?>
