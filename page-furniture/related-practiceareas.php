<div class="related">

<h2 class="archivehead">PRACTICE AREAS</h2>

<?php
foreach ( $practice_areas as $term ) {
	$term_link = get_term_link( $term, 'expertise-category' );
	if( is_wp_error( $term_link ) ) continue;
	echo '<a href="/practiceareas/' . $term->slug . '">' . $term->name . '</a>';
} 
?>
</div>
