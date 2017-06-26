
		 <div class="topline">&nbsp;</div> 
		 <h2>ACCESS TO THE WORKPLACE RELATIONS SPECIALISTS OF THE AUSTRALIAN INDUSTRY GROUP</h2> 
 <?php  wp_reset_query(); query_posts( array( 
 			'post_type' => 'people',
			 'taxonomy'  => 'teamrole',
			 'term' => 'workplace-relations-specialist-level-1',
			  'orderby' => 'title', 
    'order' => 'ASC',
			 'posts_per_page' => -1)); 
			
			 while (have_posts()) : the_post(); 
			 
			 echo '<div class="specialistmember">';
					// NAME
					echo'<a href="';
					the_permalink();
					echo '"><h3>';
					if ( get_post_meta($post->ID, 'sh_firstname', true) )  
			echo do_shortcode (get_post_meta($post->ID, 'sh_firstname', true));
					echo '&nbsp;';
					the_title();
					echo '</h3></a><p>';
					if ( get_post_meta($post->ID, 'sh_title', true) )  
					
			echo do_shortcode (get_post_meta($post->ID, 'sh_title', true));
					echo '<br/>';
						echo get_the_term_list( $specialist->ID, 'location', '', ', ', '' );
					echo '</p>';
					echo '</div>';
		 
		endwhile;  wp_reset_query(); ?>
		
		 <?php  wp_reset_query(); query_posts( array( 
 			'post_type' => 'people',
			 'taxonomy'  => 'teamrole',
			 'term' => 'workplace-relations-specialist-level-2',
			'orderby'=> 'title', 
			'order' => 'ASC',
			 'posts_per_page' => -1)); 
			
			 while (have_posts()) : the_post(); 
			 
			 echo '<div class="specialistmember">';
					// NAME
					echo'<a href="';
					the_permalink();
					echo '"><h3>';
					if ( get_post_meta($post->ID, 'sh_firstname', true) )  
			echo do_shortcode (get_post_meta($post->ID, 'sh_firstname', true));
					echo '&nbsp;';
					the_title();
					echo '</h3></a><p>';
					if ( get_post_meta($post->ID, 'sh_title', true) )  
				
			echo do_shortcode (get_post_meta($post->ID, 'sh_title', true));
					echo '<br/>';
						echo get_the_term_list( $specialist->ID, 'location', '', ', ', '' );
					echo '</p>';
					echo '</div>';
		 
		endwhile;  wp_reset_query(); 
	 
 
