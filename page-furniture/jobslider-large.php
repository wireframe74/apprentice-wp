<section class="section__bdr-top section-grey-bg section__bdr-orange">
<div class="container">
<div class="row section">
    <div class="col-sm-12 tcenter"><h2 class="nomnargin__top">Current Vacancies</h2></div>

    <div class="col-sm-12">
    <div class="owl-carousel owl-theme">

  <?php query_posts( array( 'post_type' => 'aig-jobs','posts_per_page' => -1,'orderby' => 'menu_order','order' => 'ASC'));  while (have_posts()) : the_post(); ?>

        <div class="item item-sm">
        <h4 class="item--title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
        <p><?php echo do_shortcode (get_post_meta($post->ID, 'sh_location', true));  ?></p>
     <p class="truncate"><?php custom_length_excerpt(50); ?></p>
         <a class="aig-btn aig-btn__small"  href="<?php the_permalink(); ?>" role="button">Discover More</a>
        </div>

<?php endwhile;  wp_reset_query(); ?>

               
    </div><!-- end owl-carousel -->
    </div><!-- col-sm-12 -->


</div><!-- row -->
</div><!-- container end VACANCIES -->

</section>


