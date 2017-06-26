
<h1>Latest News</h1>
<ul id="latestnews">
<?php query_posts( array( 'post_type' => 'news-items','posts_per_page' => 3));
	while (have_posts()) : the_post(); 
	echo '<li class="newsitem">';
	echo '<a href="';the_permalink();
	echo '">';
	echo '<p class="storytitle">';the_title();echo '</p>';
	echo '<div class="story">';the_excerpt(); 
	echo '</div>';
	 
echo '<div class="enterbutton">Read more</div>';
//the_date();
echo '</p>';
	echo '</li>';
	endwhile;  wp_reset_query(); ?>
	
    </ul>