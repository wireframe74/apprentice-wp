<div id="sidebar">
<?php
		global $post;
		$id = $post->ID;
		$sidebar = get_post_meta($id, 'sidebar', true);
		
		if($sidebar != '') {
			dynamic_sidebar($sidebar);
		
		} else {
			if ( ! dynamic_sidebar( 'Job Search' )) {?>
			
			<div class="followus"> 
		 <?php // FOLLOW US WIDGET
		if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Follow Us Widget') ) :   endif; 
		echo '</div>'; 
        	echo'<div class="findoutmore">'; 
		  // FOLLOW US WIDGET
		if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Find out more') ) :   endif; 
		echo '</div>'; ?>
			
		<?php	
			}
					
		}
	
	?>	</div>