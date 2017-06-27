<?php
/*
 
Template Name: Home Page

*/
?>
<?php 
get_header();?>


<!-- INTRO  -->
<section class="section">
<div class="container">
<div class="row">

<div class="col-md-3"><h2 class="nomnargin__top">Your partner in productivity</h2></div>


<div class="col-md-9">



<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php the_content(); ?>
<?php endwhile; ?>
<?php endif; ?>

</div>
   
</div>
</div>
</section>





</div>







<!-- CURRENT VACANCIES -->





<?php include(TEMPLATEPATH . '/page-furniture/jobslider-large.php');  ?>
<?php include(TEMPLATEPATH . '/page-furniture/boxouts.php');  ?>


</div>
</div>
</section><!-- END QUICK LINKS -->



 <?php get_footer(); ?>
