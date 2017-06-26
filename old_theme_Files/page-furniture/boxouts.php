
</section><!-- END QUICK LINKS -->


			
					<div class="boxout box1">
			<?php query_posts( array( 'post_type' => 'boxouts',
			 'taxonomy'  => 'boxout-position','term' => 'homepage-large-1','posts_per_page' => 1)); 
			  
			 while (have_posts()) : the_post();
			echo'<figure class="effect-apprenticeboxout">';
			$image_id = get_post_thumbnail_id(); $image_url = wp_get_attachment_image_src($image_id,’thumbnail’, true); echo'<img src="'; echo $image_url[0]; echo'"  alt="';the_title();echo'" />';
						echo'<figcaption>
							<div><h2>';the_title();echo'</h2>';
								the_content();
							echo'</div>';
							echo'<a href="';echo do_shortcode (get_post_meta($post->ID, 'sh_url', true));
			echo'">';echo'View more</a>
						</figcaption>			
					</figure>';
					endwhile;  wp_reset_query(); ?> 
					</div>
			 <div class="boxout box2">
			<?php query_posts( array( 'post_type' => 'boxouts',
			 'taxonomy'  => 'boxout-position','term' => 'homepage-large-2','posts_per_page' => 1)); 
			  
			 while (have_posts()) : the_post();
			echo'<figure class="effect-apprenticeboxout">';
			$image_id = get_post_thumbnail_id(); $image_url = wp_get_attachment_image_src($image_id,’thumbnail’, true); echo'<img src="'; echo $image_url[0]; echo'"  alt="';the_title();echo'" />';
						echo'<figcaption>
							<div><h2>';the_title();echo'</h2>';
								the_content();
							echo'</div>';
							echo'<a href="';echo do_shortcode (get_post_meta($post->ID, 'sh_url', true));
			echo'">';echo'View more</a>
						</figcaption>			
					</figure>';
					endwhile;  wp_reset_query(); ?> 
					</div>
 
			 <div class="boxout box3">
			<?php query_posts( array( 'post_type' => 'boxouts',
			 'taxonomy'  => 'boxout-position','term' => 'homepage-large-3','posts_per_page' => 1)); 
			  
			 while (have_posts()) : the_post();
			echo'<figure class="effect-apprenticeboxout">';
			$image_id = get_post_thumbnail_id(); $image_url = wp_get_attachment_image_src($image_id,’thumbnail’, true); echo'<img src="'; echo $image_url[0]; echo'"  alt="';the_title();echo'" />';
						echo'<figcaption>
							<div><h2>';the_title();echo'</h2>';
								the_content();
							echo'</div>';
							echo'<a href="';echo do_shortcode (get_post_meta($post->ID, 'sh_url', true));
			echo'">';echo'View more</a>
						</figcaption>			
					</figure>';
					endwhile;  wp_reset_query(); ?> 
					</div>
			<div class="boxout box4">
			<?php query_posts( array( 'post_type' => 'boxouts',
			 'taxonomy'  => 'boxout-position','term' => 'homepage-large-4','posts_per_page' => 1)); 
			  
			 while (have_posts()) : the_post();
			echo'<figure class="effect-apprenticeboxout">';
			$image_id = get_post_thumbnail_id(); $image_url = wp_get_attachment_image_src($image_id,’thumbnail’, true); echo'<img src="'; echo $image_url[0]; echo'"  alt="';the_title();echo'" />';
						echo'<figcaption>
							<div><h2>';the_title();echo'</h2>';
								the_content();
							echo'</div>';
							echo'<a href="';echo do_shortcode (get_post_meta($post->ID, 'sh_url', true));
			echo'">';echo'View more</a>
						</figcaption>			
					</figure>';
					endwhile;  wp_reset_query(); ?> 
					</div>
			<?php query_posts( array( 'post_type' => 'boxouts',
			 'taxonomy'  => 'boxout-position','term' => 'homepage-small-1','posts_per_page' => 1)); 
			 while (have_posts()) : the_post();  
   		echo'<div class="boxout smallbox1">';
    	 $image_id = get_post_thumbnail_id(); $image_url = wp_get_attachment_image_src($image_id,’thumbnail’, true); 
		 echo'<a href="';echo do_shortcode (get_post_meta($post->ID, 'sh_url', true));echo '">';echo'<img src="'; echo $image_url[0]; echo'"  alt="the_title();" /></a>';
			echo'<h2>';the_title(); echo'</h2>';
      		 the_content();
			 echo'<div class="box-text">';
			  echo'<a href="';echo do_shortcode (get_post_meta($post->ID, 'sh_url', true));
			echo'">';echo'<div class="enterbutton">More Info  <span class="wpjb-glyphs wpjb-icon-right-open"></span></div> ';
			echo'</a></div></div>';
			endwhile;  wp_reset_query(); 
			 
			
			query_posts( array( 'post_type' => 'boxouts',
			 'taxonomy'  => 'boxout-position','term' => 'homepage-small-2','posts_per_page' => 1)); 
			 while (have_posts()) : the_post();  
   		echo'<div class="boxout smallbox2">';
    	 $image_id = get_post_thumbnail_id(); $image_url = wp_get_attachment_image_src($image_id,’thumbnail’, true); 
		 echo'<img src="'; echo $image_url[0]; echo'"  alt="the_title();" />';
			echo'<h2>';the_title(); echo'</h2>';
      		 the_content();
				 echo'<div class="box-text">';
			  echo'<a href="';echo do_shortcode (get_post_meta($post->ID, 'sh_url', true));
			echo'">';echo'<div class="enterbutton">More Info  <span class="wpjb-glyphs wpjb-icon-right-open"></span></div> ';
			echo'</a></div></div>';
			endwhile;  wp_reset_query(); 

			 
			
			query_posts( array( 'post_type' => 'boxouts',
			 'taxonomy'  => 'boxout-position','term' => 'homepage-small-3','posts_per_page' => 1)); 
			 while (have_posts()) : the_post();  
   		echo'<div class="boxout smallbox3">';
    	 $image_id = get_post_thumbnail_id(); $image_url = wp_get_attachment_image_src($image_id,’thumbnail’, true); 
		 echo'<img src="'; echo $image_url[0]; echo'"  alt="the_title();" />';
			echo'<h2>';the_title(); echo'</h2>';
      		 the_content();
			 echo'<div class="box-text">';
			  echo'<a href="';echo do_shortcode (get_post_meta($post->ID, 'sh_url', true));
			echo'">';echo'<div class="enterbutton">More Info  <span class="wpjb-glyphs wpjb-icon-right-open"></span></div> ';
			echo'</a></div></div>';
			endwhile;  wp_reset_query(); 
		 
			
			query_posts( array( 'post_type' => 'boxouts',
			 'taxonomy'  => 'boxout-position','term' => 'homepage-small-4','posts_per_page' => 1)); 
			 while (have_posts()) : the_post();  
   		echo'<div class="boxout smallbox4">';
    	 $image_id = get_post_thumbnail_id(); $image_url = wp_get_attachment_image_src($image_id,’thumbnail’, true); 
		 echo'<img src="'; echo $image_url[0]; echo'"  alt="the_title();" />';
			echo'<h2>';the_title(); echo'</h2>';
      		 the_content();
			 echo'<div class="box-text">';
			  echo'<a href="';echo do_shortcode (get_post_meta($post->ID, 'sh_url', true));
			echo'">';echo'<div class="enterbutton">More Info  <span class="wpjb-glyphs wpjb-icon-right-open"></span></div> ';
			echo'</a></div></div>';
			endwhile;  wp_reset_query(); 
