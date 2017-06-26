
<section class="jobs-scroller jobs-scroller-small border-bottom border-bottom-dark-grey section-sm">
<div class="container">


<div class="col-sm-12 bottommargin__sm">
  <h4 class="pull-left">Apprentice &amp; Trainee Career Jobs</h4>
  <a class="aig-btn aig-btn__small pull-right" href="<?php bloginfo('url' ); ?>/all-jobs/" role="button">View all Jobs</a>
</div>
    <div class="col-sm-12">
    <div class="owl-carousel owl-theme topmargin__sm">

  <?php query_posts( array( 'post_type' => 'aig-jobs','posts_per_page' => -1,'orderby' => 'menu_order','order' => 'ASC'));  while (have_posts()) : the_post(); ?>

        <div class="item item-sm">
        <h4 class="item--title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
        <p><?php echo do_shortcode (get_post_meta($post->ID, 'sh_location', true));  ?></p>
        </div>

<?php endwhile;  wp_reset_query(); ?>



    
               
    </div><!-- end owl-carousel -->
    </div><!-- col-sm-12 -->
</div>


</section>


 