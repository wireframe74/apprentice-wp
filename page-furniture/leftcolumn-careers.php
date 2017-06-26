<?php
   
wp_nav_menu(array(
		'theme_location' => 'quinary-menu', // menu slug from step 1
		'container' => false, // 'div' container will not be added
		'menu_class' => 'nav', // <ul class="nav"> 
		'fallback_cb' => 'default_header_nav', // name of default function from step 2
	)); ?>
 
	
  