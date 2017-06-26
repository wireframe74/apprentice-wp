<div class="related">

<h2 class="archivehead">INDUSTRY AREAS</h2>

<?php
foreach ( $industry_sectors as $term ) {
	$term_link = get_term_link( $term, 'expertise-category' );
	if( is_wp_error( $term_link ) ) continue;
	echo '<a href="/industrysectors/' . $term->slug . '">' . $term->name . '</a>';
} 

?>

</div>
