<div id="latestjobs" class="widget widget_wpjb-recent-jobs col-md-6"><h1>Latest Apprentice and Trainee Opportunities</h1>
<div class="wpjb wpjb-widget">
    <div class="wpjb-grid wpjb-grid-compact wpjb-grid-closed-top">
                
		  <?php query_posts( array( 'post_type' => 'aig-jobs','posts_per_page' => 3,'orderby' => 'menu_order','order' => 'ASC'));  while (have_posts()) : the_post();   
 
                 echo'<div class="wpjbx-overallcontainer">
            	<div class="wpjbx-jobcontainer">
                	<div class="wpjbx-jobname" style="width:70%;"><a href="';the_permalink();echo'">';the_title();echo'</a></div> 
					 
         			<div class="wpjbx-city" >';echo do_shortcode (get_post_meta($post->ID, 'sh_location', true)); echo'</div> 
 					 <div class="wpjbx-description" style="color:#333;margin-top:6px;">'; echo '<p>'; echo excerpt(25); echo' <a href="';the_permalink();echo'"><strong>Find out more</strong></a></p> </div> 
            	</div>
        </div>   ';  endwhile;  wp_reset_query(); ?>
		
                <div class="">
            <div class="wpjb-col-100">
                <span class="wpjb-widget-grid-link wpjb-widget-recent-jobs-all">           
                    <a class="wpjb-link-view-all" href="/all-jobs/">See more career opportunities</a>
                    <span class="wpjb-glyphs wpjb-icon-right-open"></span>
                </span>
            </div>
        </div>
         
    </div>
</div></div>

