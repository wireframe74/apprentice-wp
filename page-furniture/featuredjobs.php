   
	<div id="featuredjob"> 
     
	<?php query_posts( array( 'post_type' => 'aig-jobs','posts_per_page' => 1,'orderby' => 'menu_order','order' => 'DESC'));  while (have_posts()) : the_post();   
 
                 
				 echo '<h2>';the_title();echo'</h2>';
				 
				  echo '<p style="text-align:left!important;"><strong>JOB ID:</strong> ';echo do_shortcode (get_post_meta($post->ID, 'sh_job-id', true));echo'</p>';
				 
				 echo '<p style="text-align:left!important;"><strong>LOCATION:</strong> ';echo do_shortcode (get_post_meta($post->ID, 'sh_location', true));  echo'</p>';
				  echo '<br/><div class="applybutton"><a href="';the_permalink();echo'">VIEW JOB</a></div>';
				  
				
 				
            endwhile;  wp_reset_query(); ?>
            
            </div>