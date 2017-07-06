<?php
 /*
 Template Name: About Us 
 */   
 get_header(); ?>

<div id="aigwd-maincontentcontainer" class="row">
<div class="apprenticescontainer">
<div id="apprenticescontainer">

	<div id="newscolumn" class="internalcolumn col-xs-12 col-md-3">
	 <?php
		wp_nav_menu(array(
			'theme_location' => 'quaternary_menu', // menu slug from step 1
			'container' => false, // 'div' container will not be added
			'menu_class' => 'nav', // <ul class="nav"> 
			'fallback_cb' => 'default_header_nav', // name of default function from step 2
		));
	 ?>
	</div>


	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<div class="postCollapse aboutus col-md-12">

		<div class="row">
			<div class="col-md-6"><?php the_content(); ?></div>
			<div class="col-md-6"><?php the_field('secondary_editor'); ?></div>
		</div>

	<?php endwhile;  endif;  ?>
	</div>


</div>
</div>
</div>
<?php get_footer(); ?>
