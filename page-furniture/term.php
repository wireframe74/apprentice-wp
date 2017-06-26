<?php $terms = get_the_terms( $post->ID, 'expertise-category' );
if ( !empty( $terms ) ){
    // get the first term
    $term = array_shift( $terms );
    echo $term->slug;
}?>