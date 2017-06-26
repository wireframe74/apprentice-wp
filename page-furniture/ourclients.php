<h2>Technology</h2>
<?php query_posts( array( 'post_type' => 'clientlogo',
			 'taxonomy'  => 'clientlogo-category',
			 'term' => 'technology',
			 'posts_per_page' => 1,  
			 'order' => 'ASC', 
			 'orderby' => 'menu_order', ));
			 while (have_posts()) : the_post(); 
			 $image_id = get_post_thumbnail_id(); $image_url = wp_get_attachment_image_src($image_id,’thumbnail’, true);
			 echo'<img src="';
			 echo $image_url[0];
			 echo'"  alt="the_title();" />';
     		the_content();
			endwhile;  wp_reset_query();
			echo'<h2>Logistics</h2>';
			query_posts( array( 'post_type' => 'clientlogo',
			 'taxonomy'  => 'clientlogo-category','term' => 'logistics','posts_per_page' => 1,  'order' => 'ASC', 'orderby' => 'menu_order', )); 
			 while (have_posts()) : the_post(); 
			 $image_id = get_post_thumbnail_id(); $image_url = wp_get_attachment_image_src($image_id,’thumbnail’, true);
			 echo'<img src="<?php echo $image_url[0]; ?>"  alt="the_title();" />';
     		the_content();
			endwhile;  wp_reset_query(); ?>
