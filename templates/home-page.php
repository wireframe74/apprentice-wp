<?php
/*
 
Template Name: Home Page

*/
?>
<?php 
get_header();?>




<div class="clearfix"></div>





<!-- INTRO  -->
<section class="section">
<div class="container">
<div class="row tcenter">

<div class="col-md-8 col-md-offset-2 wow fadeInUp"><h2 class="nomnargin__top wow fadeInUp" data-wow-delay=".2s">Your partner in productivity</h2>

<p class="wow fadeInUp" data-wow-delay=".5s"">Ai Group Apprentice and Trainee Centre is part of a national system with over 35,000 apprentices and trainees in wide and varied trades and employment. We place apprentices and trainees with host organisations across all states and territories, and are a proud partner to more than 200 host organisations including some of Australia’s leading organisations</p>

<img class="img-responsive wow fadeInUp" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/logos.gif" alt="">

</div>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<!-- <div class="col-md-9">

<div class="row">
  <div class="col-xs-12 col-sm-6 wow fadeInUp"  data-wow-delay=".7s">
<?php // the_content(); ?></div>
  <div class="col-xs-12 col-sm-6 wow fadeInUp" data-wow-delay="1s">
    <?php//  the_field('secondary_editor'); ?>
  </div>
</div> -->



<?php edit_post_link(); ?>




</div>
<?php endwhile; ?>
<?php endif; ?>



</div>
</div>
</section>

<section>

    <div class="row">
    <div class="col-md-8 col-md-offset-2 wow fadeInUp"><h2 class=" tcenter  nomargin__bottom nomnargin__top wow fadeInUp" >Now Hiring</h2>
    </div>

<div class="wow fadeInUp">
    <?php include(TEMPLATEPATH . '/page-furniture/jobslider.php');  ?>
    </div>

</section>

<section class="quicklinks section section-reversed">
<div class="container">
<div class="row">

<div class="col-xs-12">
    <h2 class="nomnargin__top bottommargin wow fadeInUp tcenter" data-wow-delay=".5s">How it Works</h2>
</div>


            


<div class="clearfix">

        <div class="col-xs-6 col-sm-3  wow fadeInUp" data-wow-delay=".2s">
        <div class="icon-widget icon-widget__sm">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icons/quick_link_1_white.svg" alt="Looking for an Apprentice?">  
        <h4>Looking for an Apprentice?</h4>
        <p>Rigorous selection and management processes designed to ensure you get a return.</p>
        
        </div>
        </div>


        <div class="col-xs-6 col-sm-3  wow fadeInUp" data-wow-delay=".5s">
        <div class="icon-widget icon-widget__sm">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icons/quick_link_2_white.svg" alt="The Apprentice Tool Kit">  
        <h4>The Apprentice Tool Kit</h4>
        <p>All the tools you need, including interview tips and resume preparation, to help you land a job.</p>
    
        </div>
        </div>


        <div class="col-xs-6 col-sm-3  wow fadeInUp" data-wow-delay=".8s">
        <div class="icon-widget icon-widget__sm">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icons/quick_link_3_white.svg" alt="Looking to upskill your workforce?">  
        <h4>Looking to upskill your workforce?</h4>
        <p>Apprentice management solutions with a focus on the productivity of your workplace.</p>
      
        </div>
        </div>


        <div class="col-xs-6 col-sm-3  wow fadeInUp" data-wow-delay="1.2s">
        <div class="icon-widget icon-widget__sm">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icons/quick_link_4_white.svg" alt="AI Group">  
        <h4>Australian Industry Group</h4>
        <p>A peak industry association which, with its affiliates, represents the interests of over 60,000 businesses.</p>

        </div>
        </div>

</div><!-- section -->


</div>

</div>

</section>














<!-- CURRENT VACANCIES -->




<div class="section__bdr-top "></div>

<!-- INTRO  -->
<section class="section">
<div class="container">
<div class="row">

<h2 class="tcenter">Why Choose Us?</h2>

<div class="col-sm-12">
<div class="row stats" id="stats">


      <div class="col-sm-4">
    <h3 class="stats--title"><span class='numscroller' data-min='1' data-max='200' data-delay='5' data-increment='10'>200</span></h3>
    <h4>Years of Experience</h4>
    <p>Over 200 years of combined staff years of experience in Group Training and dealing with apprentices and trainees</p>
    </div>

    <div class="col-sm-4">
    <h3 class="stats--title"><span class='numscroller' data-min='1' data-max='15000' data-delay='15' data-increment='60'>15000</span></h3>
    <h4>Candidates Employed</h4>
    <p>Over 15,000 apprentices and trainees training and or employed through AiGATC.</p>
    </div>


    <div class="col-sm-4">
    <h3 class="stats--title"><span class='numscroller' data-min='1' data-max='60000' data-delay='25' data-increment='170'>60000</span></h3>
    <h4>Employers Represented</h4>
    <p>Ai Group represents the interests of 60,000+ Employers nationally</p>
    </div>


<div class="clearfix"></div>


</div><!-- row -->

<!-- <div class="section__bdr-top section__bdr-light-grey topmargin bottommargin"></div> -->


<!-- 
<div class="row testimonials">


    <div class="col-sm-4">
    <img class="testimonials--avatar" src="<?php // echo esc_url( get_template_directory_uri() ); ?>/images/avatar.jpg" alt="Avatar">
    <p class="testimonials--text">We place apprentices and trainees with host organisations across all states and territories, and are a proud partner to more than 200 host organisations including some of Australia’s leading organisations.</p>
    <h4>David Smith</h4>
    </div>

    <div class="col-sm-4">
    <img class="testimonials--avatar" src="<?php // echo esc_url( get_template_directory_uri() ); ?>/images/avatar.jpg" alt="Avatar">
    <p class="testimonials--text">We place apprentices and trainees with host organisations across all states and territories, and are a proud partner to more than 200 host organisations including some of Australia’s leading organisations.</p>
    <h4>David Smith</h4>
    </div>

    <div class="col-sm-4">
    <img class="testimonials--avatar" src="<?php // echo esc_url( get_template_directory_uri() ); ?>/images/avatar.jpg" alt="Avatar">
    <p class="testimonials--text">We place apprentices and trainees with host organisations across all states and territories, and are a proud partner to more than 200 host organisations including some of Australia’s leading organisations.</p>
    <h4>David Smith</h4>
    </div>

   
<div class="clearfix"></div>


</div> -->


<!-- row -->






<!-- <div class="col-sm-12 t-center"><a class="aig-btn aig-btn__lg aig-btn__bdr center"  href="#" role="button">Sign Up Now</a></div>
 --></div><!-- end stats row -->
</div><!-- col-12 -->
   
</div>
</div>
</section>





<?php include(TEMPLATEPATH . '/page-furniture/boxouts.php');  ?>


</div>
</div>
</section><!-- END QUICK LINKS -->



 <?php get_footer(); ?>
