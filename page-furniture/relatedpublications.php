<div class="newsarchive">

<h2 class="archivehead">RELATED PUBLICATIONS</h2>




<?php
$terms = get_the_terms( $post->ID, 'expertise-category' );
if ( !empty( $terms ) ){
    // get the first term
    $term = array_shift( $terms );
	
	query_posts( array( 'post_type' => 'publications','taxonomy'  => 'expertise-category','term' => $term->slug,'posts_per_page' => -1));
	if ( have_posts() ) : while (have_posts()) :
	
		the_post();
		
		echo '<div class="newsitem archive">';
		echo '<a href="';the_permalink();
	echo '">';
	the_excerpt(); 
	echo '</a>';
	$the_post = get_post($post_ID);
$dateline = $the_post->post_date;
echo '<p class="published">Published - '.date('d/m/y',strtotime($dateline));
//the_date();
echo '</p>';
	 
	
echo '<a href="';the_permalink();echo'" class="readmore2">READ MORE</a>
</div>';
 

endwhile;   else :  
	echo '<p style="font-size:.75em;">There are not currently any related publications for this category</p>';
    
    endif;
 
	
}

 
wp_reset_query(); ?>
</div>
