<?php
/**
 * Template Name: Contact Page
 *
 */

get_header();

 ?><?php include(TEMPLATEPATH . '/page-furniture/jobslider.php'); ?>
		 
	  
<div id="aigwd-maincontentcontainer" class="row">
             
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  

<?php endwhile;  endif;   ?>

<div class="apprenticescontainer">
<div class="postCollapse contactpage col-md-9">

<?php the_content();?>


<?php include(TEMPLATEPATH . '/page-furniture/statemanagement.php');?>
</div>
  


<div id="rightcolumn" class="col-md-3">
    <h2>National Management</h2>


          <?php query_posts( array( 'post_type' => 'nationalcontactinfo',
         'taxonomy'  => 'national-management-contact-category','posts_per_page' => -1,'orderby' => 'menu_order','order' => 'ASC'));  while (have_posts()) : the_post();   
       
          ?>

          <div class="stateoffice">
          <h4><?php  the_title(); ?></h4>
          <p class="officecontent"><?php the_content(); ?></p>
          </div>


          <?php  endwhile;  wp_reset_query();  ?>




  
</div>
<!-- rightcolumn -->


</div><!-- apprenticescontainer -->
</div><!-- aigwd-maincontentcontainer -->




  

 <?php get_footer(); ?>
