<?php

 		// CAREER HIGHLIGHTS //
		echo'<div class="detailcontainer">';
		echo '<h2>CAREER HIGHLIGHTS</h2>';
		
		if ( get_post_meta($post->ID, 'sh_career-highlights', true) ) 
		echo '<div class="teamcareer">'; 
		echo do_shortcode (get_post_meta($post->ID, 'sh_career-highlights', true)); 
		if ( get_post_meta($post->ID, 'sh_career-highlights', true) ) 
		echo '</div>';
		
		echo '<div class="teammember-col1"></div> 
			  <div class="teammember-col2">';
			       
	 
	if ( get_post_meta($post->ID, 'sh_career-highlights-pdf', true) ) 
		echo '<div class="teamcareers"><a href="';
		echo do_shortcode (get_post_meta($post->ID, 'sh_career-highlights-pdf', true));
		if ( get_post_meta($post->ID, 'sh_career-highlights-pdf', true) ) 
		echo'" target="_blank">SEE ALL CAREER HIGHLIGHTS</a></div>';
	 	
		echo '</div>';
		echo '</div>';
		
		
		// CONTACT DETAILS //
		echo'<div class="detailcontainer">';
		echo '<h2>CONTACT DETAILS</h2>';
		echo '<div class="teammember-col1">';
		
		// TELEPHONE 
		if ( get_post_meta($post->ID, 'sh_telephone', true) ) 
		echo '<div class="teamphone">'; echo do_shortcode (get_post_meta($post->ID, 'sh_telephone', true)); 
		if ( get_post_meta($post->ID, 'sh_telephone', true) ) 
		echo '</div>';
		
		// FAX
		if ( get_post_meta($post->ID, 'sh_fax', true) ) 
		echo '<div class="teamfax">'; echo do_shortcode (get_post_meta($post->ID, 'sh_fax', true)); 
		if ( get_post_meta($post->ID, 'sh_fax', true) ) 
		echo '</div>';
		// END FAX 
		
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
		
			// LINKED IN 
		$linkedin = get_post_meta($post->ID, 'sh_linkedin', true);
		if ( $linkedin ) {
			echo '<div class="teamlinkedin"><a href="http://linkedin.com'; 
			echo do_shortcode ($linkedin);
			echo'" target="_blank">';
			echo do_shortcode ($linkedin);
			echo'</a>'; 
			echo '</div>';
		}
		// END LINKED IN
		echo '</div>';
		
		
		echo '<div class="teammember-col2">';
		
		// ASSISTANT 
		if ( get_post_meta($post->ID, 'sh_assistant-name', true) ) 
		echo '<div class="teamassistant"><h3>ASSISTANT</h3>'; echo do_shortcode (get_post_meta($post->ID, 'sh_assistant-name', true)); 
		if ( get_post_meta($post->ID, 'sh_assistant-name', true) ) 
		echo '</div>';
		// END ASSISTANT //
		
		// ASSISTANT PHONE
		if ( get_post_meta($post->ID, 'sh_assistant-phone', true) ) 
		echo '<div class="teamphone">'; echo do_shortcode (get_post_meta($post->ID, 'sh_assistant-phone', true)); 
		if ( get_post_meta($post->ID, 'sh_assistant-phone', true) ) 
		echo '</div>';
		// END ASSISTANT //
		
		// LOCATION
		// get the office location
		$location_terms = get_the_terms( $post->ID, 'location' );
		if (count($location_terms) > 0) {
			$location_term = array_shift($location_terms);
			$locations = get_posts(array(
				'post_type' => 'locations',
				'taxonomy'  => 'location',
				'term' => $location_term->slug,
				'posts_per_page' => -1,
				'orderby' => 'menu_order',
				'order' => 'ASC'
			));
  // print_r($locations);
			if (count($locations) > 0) {
				$location = $locations[0];
			} else {
				$location = false;
			}
		} else {
			$location = false;
		}
		echo '<div class="teamlocation">';  
		if ($location) {
			$address = get_post_meta($location->ID, 'sh_address', true);
			if ( $address) {
				echo do_shortcode (get_post_meta($location->ID, 'sh_address', true)); 
				
			} else {
				// no address found
				echo '';
			}
		} else {
			// no location specified
			echo '';
		}
		echo '</div>';
		// END LOCATION //
		
		echo '</div>';
