<?php
/**
 * The template for displaying Search Results pages
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

{
    while (have_posts()) : the_post(); 
    echo '<div class="internalheaderimage">';$image_id = get_post_thumbnail_id(); $image_url = wp_get_attachment_image_src($image_id,'thumbnail', true); 
	echo'</div>';
    endwhile ; wp_reset_query();
 } 
            
  
  // /hero image bannerarea 
  // END FULL WIDTH CONTAINER DIV   --> 
  
echo '</div></div>';
get_header(); ?>

<div id="aigwd-maincontentcontainer" class="row">
  <div class="postCollapse internalwide">

	 

	 
			 

			 

			<article id="post-0" class="post no-results not-found">
				<header class="entry-header">
					<h1 class="entry-title"><?php _e( 'Nothing Found', '' ); ?></h1>
				</header>

				<div class="entry-content">
					<p>Sorry but the page you requested was not found, please use the search facility below...</p>
					<br/>
					<?php get_search_form(); ?>
				</div><!-- .entry-content -->
			</article><!-- #post-0 -->

		 
 </div>
  
</div>
<?php get_footer(); ?>