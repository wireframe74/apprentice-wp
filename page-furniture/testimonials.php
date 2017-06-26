
<?php 
/*$testimonials = bawmrp_get_all_related_posts($post);

<!--Array
(
    [0] => WP_Post Object
        (
            [ID] => 260
            [post_author] => 1
            [post_date] => 2014-08-14 20:53:59
            [post_date_gmt] => 2014-08-14 10:53:59
            [post_content] => Mauris egestas consequat pulvinar. Etiam consequat fermentum aliquet. Pellentesque semper orci ut ante tincidunt vestibulum. Aliquam at pellentesque diam. Proin tempor ac mauris eget fringilla. Integer ultrices enim id felis cursus cursus. Sed pelleque ullamcorper tellus, sit amet bibendum erat cursusac, Proin tempor ac mauris eget fringilla. Integer ultrices enim id felis cursus cursus pellentesque ullamcorper tellus, sit amet bidum cursusac.

Tom Jones, Managing Director, FedEx
            [post_title] => Tom Jones, Managing Director, FedEx
            [post_excerpt] => 
            [post_status] => publish
            [comment_status] => closed
            [ping_status] => closed
            [post_password] => 
            [post_name] => tom-jones-managing-director-fedex
            [to_ping] => 
            [pinged] => 
            [post_modified] => 2014-08-14 20:53:59
            [post_modified_gmt] => 2014-08-14 10:53:59
            [post_content_filtered] => 
            [post_parent] => 0
            [guid] => http://aigwd.splashagency.com.au/?post_type=testimonials&#038;p=260
            [menu_order] => 0
            [post_type] => testimonials
            [post_mime_type] => 
            [comment_count] => 0
            [filter] => raw
        )

)


foreach ($testimonials as $testimonial) {
	echo '<div class="testimonial-box">';
	
 	echo '<p class="testimonial">'.$testimonial->post_content.'</p>';
	
	echo '<p class="testimonial-by">'.$testimonial->post_title.'</p>';
	  echo '</div>';
	
}  
?>
</div>-->


echo '<div id="testimonials">
<h2>TESTIMONIALS</h2>';
  echo do_shortcode( '[manual_related_posts]' );
   
  
*/	
   ?>
   
    
    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Related Posts') ) ?>
 