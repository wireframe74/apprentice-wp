<?php query_posts( array( 'post_type' => 'boxouts',
			 'taxonomy'  => 'boxout-position','term' => 'productivity-centre-2','posts_per_page' => 1)); 
			 while (have_posts()) : the_post();  
   
	 echo'<div class="employer-boxout box2 aigwd2">';
        
    
	
			 $image_id = get_post_thumbnail_id(); $image_url = wp_get_attachment_image_src($image_id,'thumbnail', true); 
			 echo'<img src="';echo $image_url[0]; echo'"  alt="the_title();" />
    <h2>';
      the_title();
	  echo'</h2>';
    echo'<a href="';echo do_shortcode (get_post_meta($post->ID, 'sh_url', true));echo '">';
	  echo'<div class="enterbutton">';
	  echo'ENTER &nbsp;  &nbsp; <span class="wpjb-glyphs wpjb-icon-right-open"></span></div></a>';
	endwhile;  wp_reset_query(); 
	echo'</div>';?>
<?php query_posts( array( 'post_type' => 'boxouts',
			 'taxonomy'  => 'boxout-position','term' => 'productivity-centre-3','posts_per_page' => 1));
			 while (have_posts()) : the_post(); 
   
	 echo '<div class="employer-boxout box3 aigwd3">';
    
			 $image_id = get_post_thumbnail_id(); $image_url = wp_get_attachment_image_src($image_id,'thumbnail', true); 
			echo'<img src="'; echo $image_url[0]; echo'"  alt="';the_title();echo'" />
    <h2>';
      the_title(); 
	  echo'</h2>';
	  echo'<a href="';echo do_shortcode (get_post_meta($post->ID, 'sh_url', true)); echo'">';
	  echo'<div class="enterbutton">';
	  echo'ENTER &nbsp;  &nbsp; <span class="wpjb-glyphs wpjb-icon-right-open"></span></div></a>';
    endwhile;  wp_reset_query(); 
	echo'</div></a>';
	?>
