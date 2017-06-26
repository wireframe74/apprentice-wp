<div class="newsarchive">
  <h2 class="archivehead">ARCHIVE</h2>
  <?php query_posts( 
  array( 'post_type' => 'news-items',
		'taxonomy'  => 'news-category',
		'term' => 'archived-story',
		'posts_per_page' => -1,
		'orderby' => 
		'menu_order',
		'order' => 'ASC')); 
	while (have_posts()) : the_post();
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
	echo '</div>';
	endwhile;  wp_reset_query(); ?>
</div>
