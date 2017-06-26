<h2>Case Studies</h2>
<?php
 	
	query_posts( array( 'post_type' => 'testimonials'//,'taxonomy'  => 'expertise-category','term' => $term->slug
	,'posts_per_page' => -1));
	if ( have_posts() ) : while (have_posts()) :
	
		the_post();
		
	echo '<div class="casestudies-overallcontainer">
	<div class="circle black">'; 
			$the_post = get_post($post_ID);
$dateline = $the_post->post_date;
echo '<div class="date"> '.date('j<\b\r/>M<\b\r/>Y',strtotime($dateline));
//the_date();
echo '</div>';
    	echo'</div><div class="casestudycontent"> 
    <h3>';the_title();echo'</h3>';
	
    the_excerpt(); 
    echo'<a href="';the_permalink();echo'"><div class="enterbutton">READ MORE</div></a>
</div> 

     
</div>';



endwhile;   else :  
	echo '<p style="font-size:.75em;">There are not currently any Case Studies</p>';
    
    endif;
 
	
 
 
wp_reset_query(); ?>
