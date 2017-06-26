   
	<table><tr><th>DETAILS</th><th>ID</th><th>LISTED</th><th>LOCATION</th></tr>
     
	<?php query_posts( array( 'post_type' => 'aig-jobs','posts_per_page' => -1,'orderby' => 'sh_job-id','date' => 'ASC'));  while (have_posts()) : the_post();   
 
                 echo'<tr><td>';
				 echo '<h2 style="margin-bottom:0;">';the_title();echo'</h2>';
				 echo '<p style="text-align:left!important;">'; echo excerpt(30);echo'</p>';
				  echo '<div class="applybutton"><a href="';the_permalink();echo'">VIEW THIS JOB</a></div>';
				 echo'</td>'; 
				 echo '<td>';echo do_shortcode (get_post_meta($post->ID, 'sh_job-id', true));echo'</td>';
				 echo '<td>';echo changeDateFormat($post->post_date,'Y-m-d H:i:s','d/m/Y'); echo'</td>';
				 echo '<td nowrap>';echo do_shortcode (get_post_meta($post->ID, 'sh_location', true)); echo'</td>';
         		 echo '</tr>';
 				
            endwhile;  wp_reset_query(); ?>
            
            </table>