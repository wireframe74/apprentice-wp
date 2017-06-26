<div class="newsarchive">

<h2 class="archivehead">ARCHIVE</h2>

<? $custom_terms = get_terms('expertise-category');


foreach($custom_terms as $custom_term) {
    wp_reset_query();
    $args = array('post_type' => 'publications',
        'tax_query' => array(
            array(
                'taxonomy' => 'expertise-category',
                'field' => 'slug',
                'terms' => $custom_term->slug,
            ),
        ),
     );

     $loop = new WP_Query($args);
     if($loop->have_posts()) {
        echo '<h2><a href="';
		echo the_permalink();
		
		echo '">'; 
		echo $custom_term->name.'</a></h2> ';

        while($loop->have_posts()) : $loop->the_post();
            echo '<li><a href="'.get_permalink().'">'.get_the_title().'</a></li>';
        endwhile;
		echo '</ul>';
     }
}?>

</div>