<?php
class ThemeInit {
	
	public function __construct() {
		
		$this->registerSidebars();
	
	}
	
	public function registerSidebars() {
		if ( function_exists('register_sidebar') ) {

		 
			
				
			register_sidebar(array('name'=>'Apprentices 1',
					'before_widget' => '<div class="apprentices-sidebar">',
					'after_widget' => '</div>',
					'before_title' => '<h3>',
					'after_title' => '</h3>',
				));
				register_sidebar(array('name'=>'Apprentices 2',
					'before_widget' => '<div class="apprentices-sidebar">',
					'after_widget' => '</div>',
					'before_title' => '<h3>',
					'after_title' => '</h3>',
				));
				register_sidebar(array('name'=>'Apprentices 3',
					'before_widget' => '<div class="apprentices-sidebar">',
					'after_widget' => '</div>',
					'before_title' => '<h3>',
					'after_title' => '</h3>',
				));
				register_sidebar(array('name'=>'Apprentices 4',
					'before_widget' => '<div class="apprentices-sidebar">',
					'after_widget' => '</div>',
					'before_title' => '<h3>',
					'after_title' => '</h3>',
				));
				
				register_sidebar(array('name'=>'Employers 1',
					'before_widget' => '<div class="employers-sidebar">',
					'after_widget' => '</div>',
					'before_title' => '<h3>',
					'after_title' => '</h3>',
				));
				register_sidebar(array('name'=>'Employers 2',
					'before_widget' => '<div class="employers-sidebar">',
					'after_widget' => '</div>',
					'before_title' => '<h3>',
					'after_title' => '</h3>',
				));
				register_sidebar(array('name'=>'Employers 3',
					'before_widget' => '<div class="employers-sidebar">',
					'after_widget' => '</div>',
					'before_title' => '<h3>',
					'after_title' => '</h3>',
				));
				
				register_sidebar(array('name'=>'Employers 4',
					'before_widget' => '<div class="employers-sidebar">',
					'after_widget' => '</div>',
					'before_title' => '<h3>',
					'after_title' => '</h3>',
				));
register_sidebar(array('name'=>'Latest Jobs Slider',
					'before_widget' => '<div id="latestjobs">',
					'after_widget' => '</div>',
					'before_title' => '<h1>',
					'after_title' => '</h1>',
				));
			register_sidebar(array('name'=>'Latest Jobs',
					'before_widget' => '<div id="latestjobs" class="widget %2$s">',
					'after_widget' => '</div>',
					'before_title' => '<h1>',
					'after_title' => '</h1>',
				));

			register_sidebar(array('name'=>'Footer Widget 1',
					'before_widget' => '<div id="%1$s" class="widget %2$s">',
					'after_widget' => '</div>',
					'before_title' => '<h2 class="widgettitle">',
					'after_title' => '</h2>',
				));
				
				register_sidebar(array('name'=>'Footer Widget 2',
					'before_widget' => '<div id="%1$s" class="widget %2$s">',
					'after_widget' => '</div>',
					'before_title' => '<h2 class="widgettitle">',
					'after_title' => '</h2>',
				));
			 
				register_sidebar(array('name'=>'Footer Widget 3',
					'before_widget' => '<div id="%1$s" class="widget %2$s">',
					'after_widget' => '</div>',
					'before_title' => '<h2 class="widgettitle">',
					'after_title' => '</h2>',
				));
				 
               register_sidebar(array('name'=>'Footer Widget 4',
					'before_widget' => '<div id="%1$s" class="widget %2$s">',
					'after_widget' => '</div>',
					'before_title' => '<h2 class="widgettitle">',
					'after_title' => '</h2>',
				));
               
				 register_sidebar(array('name'=>'Bottom Footer Widget 1',
					'before_widget' => '<div id="%1$s" class="widget %2$s">',
					'after_widget' => '</div>',
					'before_title' => '<h2 class="widgettitle">',
					'after_title' => '</h2>',
				)); 
				 
				 register_sidebar(array('name'=>'Bottom Footer Widget 2',
					'before_widget' => '<div id="%1$s" class="widget %2$s">',
					'after_widget' => '</div>',
					'before_title' => '<h2 class="widgettitle">',
					'after_title' => '</h2>',
				)); 
				  
				register_sidebar(array('name'=>'Bottom Footer Widget 3',
					'before_widget' => '<div id="%1$s" class="widget %2$s">',
					'after_widget' => '</div>',
					'before_title' => '<h2 class="widgettitle">',
					'after_title' => '</h2>',
				)); 
			 
				 
 register_sidebar(array('name'=>'Find out more',
					'before_widget' => '<div class="findoutmore">',
					'after_widget' => '</div>',
					'before_title' => '>',
					'after_title' => '',
				)); 
				 register_sidebar(array('name'=>'Follow Us Widget',
					'before_widget' => '<div class="followus">',
					'after_widget' => '</div>',
					'before_title' => '',
					'after_title' => '',
				)); 

				 register_sidebar(array('name'=>'Refer a Friend',
					'before_widget' => '<div id="%1$s" class="widget %2$s">',
					'after_widget' => '</div>',
					'before_title' => '<h2 class="widgettitle">',
					'after_title' => '</h2>',
				)); 
				 register_sidebar(array('name'=>'Featured Job',
					'before_widget' => '<div id="%1$s" class="widget %2$s">',
					'after_widget' => '</div>',
					'before_title' => '<h2 class="widgettitle">',
					'after_title' => '</h2>',
				)); 
				
		  register_sidebar(array('name'=>'About 1',
					'before_widget' => '<div id="%1$s" class="widget %2$s">',
					'after_widget' => '</div>',
					'before_title' => '<h2 class="widgettitle">',
					'after_title' => '</h2>',
				));  register_sidebar(array('name'=>'About 2',
					'before_widget' => '<div id="%1$s" class="widget %2$s">',
					'after_widget' => '</div>',
					'before_title' => '<h2 class="widgettitle">',
					'after_title' => '</h2>',
				));  register_sidebar(array('name'=>'About 3',
					'before_widget' => '<div id="%1$s" class="widget %2$s">',
					'after_widget' => '</div>',
					'before_title' => '<h2 class="widgettitle">',
					'after_title' => '</h2>',
				));  register_sidebar(array('name'=>'About 4',
					'before_widget' => '<div id="%1$s" class="widget %2$s">',
					'after_widget' => '</div>',
					'before_title' => '<h2 class="widgettitle">',
					'after_title' => '</h2>',
				)); 

		}

	
	}
}

$init = new ThemeInit();