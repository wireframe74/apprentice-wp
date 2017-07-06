<?php if (have_posts()): while (have_posts()) : the_post(); ?>
  


  <?php if(is_front_page()) :?>


<?php the_content(); ?>


<?php elseif (is_page('home-2')) :?>

<?php the_content(); ?>



<?php else: ?>

  <?php
  $bg = array('header-1.jpg', 'header-2.jpg', 'header-3.jpg', 'header-4.jpg', 'header-6.jpg', 'header-7.jpg' ); // array of filenames

  $i = rand(0, count($bg)-1); // generate random number size of the array
  $selectedBg = "$bg[$i]"; // set variable equal to which random filename was chosen
?>




  <section class="hero-container">
      <div  class="hero hero-video dark-bg parallax"  style="background-image:url(&quot;<?php if(get_field('header_image')):   $header = the_field('header_image'); echo $header; ?><?php else: ?><?php echo esc_url( get_template_directory_uri() ); ?>/images/headers/<?php echo $selectedBg ?><?php endif; ?> &quot;)">
        <div class="container hero__container">
          <div class="row hero__row">
            <div class="col-lg-6 col-md-6 col-sm-12 center">
              <h1 class="animated fadeInUp aig-heading hero--headline"><?php if(get_field('header_title')): ?><?php the_field('header_title'); ?><?php else: echo 'The right job helps you create the future you want.' ?><?php endif; ?></h1>

                <p style="visibility: hidden;" class="hero--paragraph animated second fadeInUp"><?php if(get_field('header_paragraph')): ?><?php the_field('header_paragraph'); ?><?php else : ?>AI Group Recruitment Services - Building Tomorrow's Workforce</p><?php endif; ?>

                <div class="clearfix"></div>

                <a style="visibility: hidden;" class="aig-btn aig-btn__reversed hero--btn third animated fadeInUp"  href="#" role="button"><?php if(get_field('header_link_text')): ?><?php the_field('header_link_text'); ?><?php else: ?>Register Today<?php endif; ?></a>

            </div>
          </div>
</div>

</div>
</section>



<?php endif; ?>

  </div>
  </div>
  </section>



<style>

/*  video { 
    position: fixed;

    min-width: 100%;
    min-height: 100%;
    width: auto;
    height: auto;
    z-index: -100;
    transform: translateX(-50%) translateY(-50%);
 background: url('//demosthenes.info/assets/images/polina.jpg') no-repeat;
  background-size: cover;
  transition: 1s opacity;
}*/

.header-container {
  width: 100%;  
  height: 450px;;
  position: relative;
  padding: 20px;
}

  .video-container { 
    position: absolute;
  top: 0;
  left: 0;
    width: 100%;
    height: 100%;
    overflow: hidden;
/*    width: auto;
    height: auto;
    z-index: -100;*/
/*    transform: translateX(-50%) translateY(-50%);*/
 background: url('//demosthenes.info/assets/images/polina.jpg') no-repeat;
  background-size: cover;
  transition: 1s opacity;




}

  video {
    z-index:-1;
    position: absolute;
    width: 100%;
    opacity: .8;
  }



</style>





  
<?php endwhile; endif; rewind_posts(); ?>


