<!-- TOP BAR -->
<div id="aigwd-top-bannerbar"> 
  <!-- TOP BAR CONTENT -->
  <div class="topbar-content"> <?php include(TEMPLATEPATH . '/page-furniture/topbar.php'); ?></div>
<!-- / END TOP BAR --> 
</div>
  <!-- just places logo and navigation -->
  
  <div id="aigwd-logobanner">
    <div class="logoandnavcontainer">
		<div class="aigwd-logocontainer"> 
		  <?php query_posts( array( 'post_type' => 'page-furniture','taxonomy'  => 'page-furniture-category','term' => 'logo','posts_per_page' => 1));
		  while (have_posts()) : the_post();
		  the_content(); 
		  endwhile;  wp_reset_query();?>
		</div>
		<!--  end aigwd-logocontainer   -->		
  
     
	 <!-- navigation  --> 
	<?php wp_nav_menu(array(
		'theme_location' => 'primary_menu', // menu slug from step 1
		'container' => false, // 'div' container will not be added
		'menu_class' => 'nav', // <ul class="nav"> 
		'fallback_cb' => 'default_header_nav', // name of default function from step 2
	)); ?>
   <!-- /navigation --> 
 
  	 </div> 
	<!-- end logoandnavcontainer -->
	</div> 
		 <!-- end aigwd-logobanner  -->
  <!-- hero image bannerarea WITH BACKGROUND -->
   <div id="overall-wrapper">  
 	<div id="image-banner"> 
      <?php // Add Rev Slider to Frontpage 
	  if (is_front_page()) { 
	  echo'<div class="internalheaderimage">';echo do_shortcode('[rev_slider home]');   echo'</div>';} 
	 
	elseif // OTHERWISE IF IT's the 404 ERROR PAGE SHOW GENERIC HEADER 
	(is_404() || is_home() ) {echo '<div class="internalheaderimage"><img src="/wp-content/uploads/about.jpg"></div>';}
	else if (is_singular (array('aig-jobs','jobapplication')) || (is_search() || (is_archive() ) ) ) {echo '<div class="internalheaderimage"><img src="/wp-content/uploads/finajob.jpg"></div>';}
	else // IN ALL OTHER CASES SHOW THE FEATURED IMAGE OF THAT PAGE <br>
	{
		while (have_posts()) :
			the_post(); 
			echo '<div class="internalheaderimage">';
			if ( has_post_thumbnail() ) { the_post_thumbnail(); } 
			echo '</div>';  
              echo'<div id="mainpageheader">
      <div class="mainheader"><h1 class="strapline">';the_title();echo'</h1></div></div>';
    	endwhile ;
		wp_reset_query();
	} ?>
    
    <!-- PUT THE STRAPLINE OVER THE IMAGE IF IT EXISTS -->
    <div id="mainpageheader">
      <div class="mainheader">
        <h1 class="strapline"><?php  echo do_shortcode (get_post_meta($post->ID, 'sh_strapline', true));?></h1>
      </div>
    </div>
  </div>
 