<?php if (have_posts()): while (have_posts()) : the_post(); ?>
  
  <section class="hero-container">
      <div  class="hero hero-video dark-bg parallax"  style="background-image:url(&quot;<?php if(get_field('header_image')):   $header = the_field('header_image'); echo $header; ?><?php else: ?><?php echo esc_url( get_template_directory_uri() ); ?>/images/header.jpg<?php endif; ?> &quot;)">
        <div class="container hero__container">
          <div class="row hero__row">
            <div class="col-lg-6 col-md-6 col-sm-12 center">
              <h1 class="animated fadeInUp aig-heading hero--headline"><?php if(get_field('header_title')): ?><?php the_field('header_title'); ?><?php else: the_title(); ?><?php endif; ?></h1>

                <p style="visibility: hidden;" class="hero--paragraph animated second fadeInUp"><?php if(get_field('header_paragraph')): ?><?php the_field('header_paragraph'); ?><?php else : ?>AI Group Recruitment Services - Building Tomorrow's Workforce</p><?php endif; ?>

                <div class="clearfix"></div>

                <a style="visibility: hidden;" class="aig-btn aig-btn__reversed hero--btn third animated fadeInUp form-button"  href="<?php the_field('header_link'); ?>" role="button"><?php if(get_field('header_link_text')): ?><?php the_field('header_link_text'); ?><?php else: ?>Register Today<?php endif; ?></a>

            </div>
          </div>


  <?php if(is_front_page()) :?>
  <!-- <img src="<?php //echo esc_url( get_template_directory_uri()); ?>/images/abstract-bg.svg" alt="Abstract Background" class="hero--abstract-bg "> -->
  <?php endif; ?>

  </div>
  </div>
  </section>



<style>
  video { 
    position: fixed;
    top: 50%;
    left: 50%;
    min-width: 100%;
    min-height: 100%;
    width: auto;
    height: auto;
    z-index: -100;
    transform: translateX(-50%) translateY(-50%);
 background: url('//demosthenes.info/assets/images/polina.jpg') no-repeat;
  background-size: cover;
  transition: 1s opacity;
}
</style>



  <!-- <video poster="https://s3-us-west-2.amazonaws.com/s.cdpn.io/4273/polina.jpg" id="bgvid" playsinline autoplay muted loop> -->
  <!-- WCAG general accessibility recommendation is that media such as background video play through only once. Loop turned on for the purposes of illustration; if removed, the end of the video will fade in the same way created by pressing the "Pause" button  -->
<!-- <source src="http://thenewcode.com/assets/videos/polina.webm" type="video/webm"> -->
<!-- <source src="<?php // echo esc_url( get_template_directory_uri()); ?>/video/video.mp4" type="video/mp4"> -->
<!-- </video> -->


  
<?php endwhile; endif; rewind_posts(); ?>


