<?php
// LISTS all PEOPLE IN THEIR CORRECT EXPERTISE CATEGORY BUT ONLY DIRECTORS 

$terms = get_the_terms( $post->ID, 'expertise-category' );
if ( !empty( $terms ) ){
    // get the first term
    $term = array_shift( $terms );
 
	
	// no need to sanitise - it's not used in a db query
	$location = isset($_GET['location']) ? $_GET['location'] : '';
	
	
 	query_posts( array( 'post_type' => 'people',
	'taxonomy'  => 'expertise-category',
 
	'term' =>  $term->slug,
 
	'orderby' => 'title', 
    'order' => 'ASC',
	'posts_per_page' => -1));
 
 
	while (have_posts()) :
		the_post();
		
		$sh_title = get_post_meta($post->ID, 'sh_title', true);
		$locations = array();
		if ($sh_title) {
			$location_terms = get_the_terms( $post->ID, 'location');
			foreach ($location_terms as $location_term) {
				$locations[$location_term->slug] = $location_term->name;
			}
		}
		
		if (empty($location) || isset($locations[$location])) {
		
			echo '<div class="boxout individual">';
			global $wpdb;
			$images = get_post_meta( get_the_ID(), 'sh_thumbnailimage', false );
			$images = implode( ',' , $images );
			// Re-arrange images with 'menu_order'
			$images = $wpdb->get_col( "
			SELECT ID FROM {$wpdb->posts}
			WHERE post_type = 'attachment'
			AND ID in ({$images})
			ORDER BY menu_order ASC
			" );
			foreach ( $images as $att ) {
				// Get image's source based on size, can be 'thumbnail', 'medium', 'large', 'full' or registed post thumbnails sizes
				$src = wp_get_attachment_image_src( $att, 'sh_thumbnailimage' );
				$src = $src[0];
				// Show image
				echo "<img src='{$src}' />";
			}
			echo '<div class="individual-container"><div class="individual-headercontainer"><h2><a href="';the_permalink();
			echo '">';
			if ( get_post_meta($post->ID, 'sh_firstname', true) )  
			echo do_shortcode (get_post_meta($post->ID, 'sh_firstname', true));echo'&nbsp;';the_title(); 
			echo '</a></h2>';
			 
			
			echo // JOB ITTLE
			'<h3>';
			if ( $sh_title ) {
				echo do_shortcode ($sh_title);
				echo '<br/>';
			
				echo ' ';
			
				echo // LOCATION
				implode(', ', $locations);
				//get_the_term_list( $post->ID, 'location', '', ', ', '' );
				echo '</h3></div>'; 
					
				echo'<div class="individual-detailcontainer">';
				// TELEPHONE 
				if ( get_post_meta($post->ID, 'sh_telephone', true) ) 
				echo '<div class="teamphone">'; echo do_shortcode (get_post_meta($post->ID, 'sh_telephone', true)); 
				if ( get_post_meta($post->ID, 'sh_telephone', true) ) 
				echo '</div>';
				
				// MOBILE
				if ( get_post_meta($post->ID, 'sh_mobile', true) ) 
				echo '<div class="teammobile">'; echo do_shortcode (get_post_meta($post->ID, 'sh_mobile', true)); 
				if ( get_post_meta($post->ID, 'sh_mobile', true) ) 
				echo '</div>';
				// END MOBILE 
				 
				
				
				// EMAIL 
				$email = get_post_meta($post->ID, 'sh_email', true);
				if ( $email ) {
					echo '<div class="teamemail"><a href="mailto:'; 
					echo do_shortcode ($email);
					echo'">';
					echo 'click to email';
					echo'</a>'; 
					echo '</div>';
				}
				// END EMAIL //	 
			 
			}  
				 
			echo '</div></div></div>';
		} // end if empty location
	endwhile;
	wp_reset_query();
}?>
