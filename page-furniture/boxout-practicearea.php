<?php echo'<div id="boxouts"><div class="boxout box3">';
	 query_posts( array( 'post_type' => 'boxouts',
			 'taxonomy'  => 'boxout-position','term' => 'practicearea','posts_per_page' => 1));  
			 while (have_posts()) : the_post();  $image_id = get_post_thumbnail_id(); $image_url = wp_get_attachment_image_src($image_id,'full', true); 
    echo'<img src="';echo $image_url[0]; echo'"  alt="';the_title();echo'" />';
    echo'<h2>';
      the_title();
    echo'</h2>';
   the_content();
    endwhile;  wp_reset_query();
  echo'</div></div>';?>