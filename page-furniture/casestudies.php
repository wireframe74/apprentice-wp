<h2>Case Studies</h2>
<?php
 	
	query_posts( array( 'post_type' => 'testimonials'//,'taxonomy'  => 'expertise-category','term' => $term->slug
	,'posts_per_page' => -1));
	if ( have_posts() ) : while (have_posts()) :
	
		the_post(); ?>

<?php $the_post = get_post($post_ID);
$dateline = $the_post->post_date; ?>


<div class="row">
<div class="col-md-12 case-study">
<h4><?php the_title(); ?></h4>
<?php the_date(); ?>
<?php the_excerpt(); ?>
<a href="<?php the_permalink(); ?>">Read More</a>
</div>
</div>

<?php endwhile;   else :  
	echo '<p style="font-size:.75em;">There are not currently any Case Studies</p>';
    
    endif; wp_reset_query(); ?>
