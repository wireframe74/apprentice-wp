 
<section>
<h1>Blog</h1>
<div  class="blogpostscontainer">  <div class="table">
<?php $custom_query = new WP_Query('posts_per_page=4','&orderby=date&order=ASC');  
while($custom_query->have_posts()) : $custom_query->the_post(); ?>

	 
		 <div class="tr">  
	  <div class="td"><div class="blogimage"><?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?></div> 
      <div class="blogstory-container"><h2><?php the_title();?></h2><?php the_excerpt();?>
    <a href="<?php the_permalink();?>"><div class="enterbutton">READ MORE</div></a></div></div>
</div>  
	 

 

<?php endwhile; ?>

<?php echo do_shortcode( '[ajax_load_more post_type="post" posts_per_page="4"]') ?>
<?php wp_reset_postdata(); // reset the query ?>
</div></div>
</section>

</div> <div id="rightcolumn" style="margin-top:4em;"> 

  
			 
		 <?php // FOLLOW US WIDGET
		if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Follow Us Widget') ) :   endif; 
		 
        	 
		  // FOLLOW US WIDGET
		if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Find out more') ) :   endif;
		
		
		   ?>
 
  </div>