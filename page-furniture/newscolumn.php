
<h1>LATEST NEWS</h1>

<?php query_posts( array( 'post_type' => 'news-items','posts_per_page' => 2));
	while (have_posts()) : the_post(); 
	echo '<div class="newsitem leftcol">';
	echo '<a href="';the_permalink();
	echo '">';
	the_excerpt(); 
	echo '</a>';
	$the_post = get_post($post_ID);
$dateline = $the_post->post_date;
echo '<p class="published">Published - '.date('d/m/y',strtotime($dateline));
//the_date();
echo '</p>';
	echo '</div>';
	endwhile;  wp_reset_query(); ?>