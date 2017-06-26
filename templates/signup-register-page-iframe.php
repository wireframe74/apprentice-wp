<?php
/* Template Name: THIRD PARTY SIGN IN & REGISTRATION FORM  */
?>
<?php 
get_header();?>
<?php include(TEMPLATEPATH . '/page-furniture/jobslider.php'); ?>
<?php 
echo'<div id="aigwd-maincontentcontainer" class="row">';
             
            // the_loop begin
            if (have_posts()) : while (have_posts()) : the_post();
	echo'<div class="employerscontainer">  <div id="employerscontainer">';
	echo'<div class="postCollapse registrationform">';
            // the_loop begin
           
			echo'<section>';   ?>
<!-- embed iframe from Codehouse -->
<iframe src="http://apply.aigroupapprentices.com.au/signin_register.php" frameborder="0" scrolling="yes"  />
</iframe>
<!-- / embed iframe from Codehouse --> 

 
<?php 
   
 echo'</section></div>';
            endwhile;  endif;  
 echo '</div>';
  echo '</div>';
     
  
echo'</div>';
 get_footer(); ?>