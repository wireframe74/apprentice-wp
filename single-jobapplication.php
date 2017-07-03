<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 
 */   

get_header();  ?>
<div id="aigwd-maincontentcontainer" class="row">
             

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  
<div class="apprenticescontainer">
<div class="postCollapse registrationform">

<section class="problems" style="text-align: center; font-size: 13px; font-weight: 600; color: #EF9604; line-height: 18px;">
PROBLEMS APPLYING ONLINE?&nbsp;&nbsp; Please call: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;VIC: 03 9867 0149 or 03 5440 3900&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;NSW: 02 6041 0607&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;QLD: 03 5440 3900&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;WA/SA/NT: 08 8394 0032';
</section>


<section>
<iframe style="width:100%; " class="iframe-apply" src="http://testapply.aigroupapprentices.com.au/signin.php?ID=';<?php if ( get_post_meta($post->ID, 'sh_jobapplication', true)) echo do_shortcode (get_post_meta($post->ID, 'sh_jobapplication', true));?>"  width="1240px" height="1000px" style="height: 83vh; border:none" frameBorder="0"></iframe>

</section></div>
  
   
<?php  endwhile;  endif;  ?>
</div>
</div>
     
<!--   IFRAME LIVE SERVER http://apply.aigroupapprentices.com.au/signin.php?ID= -->

 <?php get_footer(); ?>