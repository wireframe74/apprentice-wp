<?php
        // CONTENTS
        // additonals
        // thumbnail support
        // feeds
        // stylesheets
        // roboto / google fonts
        // respare.css
        // content width
        // wp_title filter
        // footer widgets
        // left widget
        // right widget
  


// require_once('wp_bootstrap_navwalker.php');

// function my_wp_nav_menu_args($args = '')
// {
//     $args['container'] = false;
//     return $args;
// }



class WPSE_78121_Sublevel_Walker extends Walker_Nav_Menu
{
    function start_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "\n$indent<div class='megamenu' aria-hidden='true'><div class='container'><ul class='sub-menu'>\n";
    }
    function end_lvl( &$output, $depth = 0, $args = array() ) {
        $indent = str_repeat("\t", $depth);
        $output .= "$indent</ul></div></div>\n";
    }
}



function custom_length_excerpt($word_count_limit) {
    $content = wp_strip_all_tags(get_the_content() , true );
    echo wp_trim_words($content, $word_count_limit);
}
		
		
        function reSpare_setup() {
                add_theme_support( 'post-thumbnails' );
                add_theme_support( 'automatic-feed-links' );
        }
        add_action( 'after_setup_theme', 'reSpare_setup' );
        
        function respare_theme_scripts() {
                wp_enqueue_style( 'roboto', 'http://fonts.googleapis.com/css?family=Roboto' );
                wp_enqueue_style( 'respare', get_stylesheet_uri() );
        }
        add_action( 'wp_enqueue_scripts', 'respare_theme_scripts' );
        
        if ( ! isset( $content_width ) ) $content_width = 900;        

        add_filter( 'wp_title', 'respare_better_title' );                
        function respare_better_title( $title ) {
            global $page, $paged;
            if ( is_feed() )
            return $title;
            $site_description = get_bloginfo( 'description' );
            $filtered_title = $title . get_bloginfo( 'name' );
            $filtered_title .= ( ! empty( $site_description ) && ( is_home() || is_front_page() ) ) ? ' | ' . $site_description: '';
            $filtered_title .= ( 2 <= $paged || 2 <= $page ) ? ' | ' . sprintf( __( 'Page %s' ), max( $paged, $page ) ) : ''; 
            return $filtered_title; 
        }

        function respare_footer() {
		
		
	 
require_once('ThemeInit.php');
require_once('ThemeSidebar.php');
 
	
		}



// Include Meta Box Script
// include_once('includes/functions/meta.php');




$prefix = 'sh_';
$meta_boxes = array();
//meta stuffs
$meta_boxes[] = array(		
	'title' => 'Blog Image',	
	'pages' => array('post'),
	'context' => 'normal',
	'priority' => 'high',
	 
	
	'fields' => array(	
	    array(
			'name' => 'Image',
			'id' => $prefix . 'blogimage',
			'type' => 'wysiwyg',
			'desc' => 'Enter the image that represents this story'
		),
		 
	)
);
//meta stuffs
$meta_boxes[] = array(		
	'title' => 'Job Application',	
	'pages' => array('jobapplication'),
	'context' => 'normal',
	'priority' => 'high',
	 
	
	'fields' => array(	
	    array(
			'name' => 'Job Application URL',
			'id' => $prefix . 'jobapplication',
			'type' => 'text',
			'desc' => 'Enter the job ID'
		),
		 
	)
);
 //meta stuffs
$meta_boxes[] = array(		
	'title' => 'Link URL',	
	'pages' => array('boxouts','page-furniture'),
	'context' => 'normal',
	'priority' => 'high',
	 
	
	'fields' => array(	
	    array(
			'name' => 'URL',
			'id' => $prefix . 'url',
			'type' => 'text',
			'desc' => 'Enter the URL for the page that you should end up on when you click the link'
		),
		 
	)
);

//Jobs Data
$meta_boxes[] = array(		
	'title' => 'Job Data',	
	'pages' => array('aig-jobs'),
	'context' => 'normal',
	'priority' => 'high',
	 
	
	'fields' => array(	
	    array(
			'name' => 'JOB ID',
			'id' => $prefix . 'job-id',
			'type' => 'text',
			'desc' => 'Enter the JOB ID'
		),
		 	    array(
			'name' => 'LOCATION',
			'id' => $prefix . 'location',
			'type' => 'text',
			'desc' => 'Enter the Job Location'
		),
		array(
			'name' => 'LISTING LOCATION',
			'id' => $prefix . 'listing-location',
			'type' => 'text',
			'desc' => 'Enter the Job Location for listing purposes - this information is used for searching only and not published on screen'
		),
		    array(
			'name' => 'STATE',
			'id' => $prefix . 'state',
			'type' => 'text',
			'desc' => 'Enter the State'
		),
   array(
			'name' => 'COMPANY NAME',
			'id' => $prefix . 'company_name',
			'type' => 'text',
			'desc' => 'Enter the Company Name'
		),
		array(
			'name' => 'SALARY',
			'id' => $prefix . 'salary',
			'type' => 'text',
			'desc' => 'Enter the Salary'
		),
		array(
			'name' => 'LISTING DATE',
			'id' => $prefix . 'listing_date',
			'type' => 'text',
			'desc' => 'Enter the Listing Date'
		),
		array(
			'name' => 'APPLICATION URL',
			'id' => $prefix . 'application_URL',
			'type' => 'text',
			'desc' => 'Enter the URL for the page that you should end up on when you click the link'
		),
	)
);
 //meta stuffs
$meta_boxes[] = array(		
	'title' => 'Anchors',	
	'pages' => array('apprentices','employers','aboutus'),
	'context' => 'normal',
	'priority' => 'high',
	 
	
	'fields' => array(	
		array(
			'name' => 'anchor1header',
			'id' => $prefix . 'anchor1header',
			'type' => 'text',
			'desc' => 'Enter the sub menu title' 

		),
	    array(
			'name' => 'anchor1',
			'id' => $prefix . 'anchor1',
			'type' => 'wysiwyg',
			'desc' => 'Enter the content to be automatically scrolled to' 

		),
		 
		array(
			'name' => 'anchor2header',
			'id' => $prefix . 'anchor2header',
			'type' => 'text',
			'desc' => 'Enter the sub menu title' 

		), 
 
		 
		array(
			'name' => 'anchor2',
			'id' => $prefix . 'anchor2',
			'type' => 'wysiwyg',
			'desc' => 'Enter the content to be automatically scrolled to' 

		),
		array(
			'name' => 'anchor3header',
			'id' => $prefix . 'anchor3header',
			'type' => 'text',
			'desc' => 'Enter the sub menu title' 

		), 
 
		  array(
			'name' => 'anchor3',
			'id' => $prefix . 'anchor3',
			'type' => 'wysiwyg',
			'desc' => 'Enter the content to be automatically scrolled to' 

		),
		 
		array(
			'name' => 'anchor4header',
			'id' => $prefix . 'anchor4header',
			'type' => 'text',
			'desc' => 'Enter the sub menu title' 

		), 

		  array(
			'name' => 'anchor4',
			'id' => $prefix . 'anchor4',
			'type' => 'wysiwyg',
			'desc' => 'Enter the content to be automatically scrolled to' 

		),
		 
		array(
			'name' => 'anchor5header',
			'id' => $prefix . 'anchor5header',
			'type' => 'text',
			'desc' => 'Enter the sub menu title' 

		), 
 
		 array(
			'name' => 'anchor5',
			'id' => $prefix . 'anchor5',
			'type' => 'wysiwyg',
			'desc' => 'Enter the content to be automatically scrolled to' 

		),
		 
		array(
			'name' => 'anchor6header',
			'id' => $prefix . 'anchor6header',
			'type' => 'text',
			'desc' => 'Enter the sub menu title' 

		), 

		 array(
			'name' => 'anchor6',
			'id' => $prefix . 'anchor6',
			'type' => 'wysiwyg',
			'desc' => 'Enter the content to be automatically scrolled to' 

		),
		 
		array(
			'name' => 'anchor7header',
			'id' => $prefix . 'anchor7header',
			'type' => 'text',
			'desc' => 'Enter the sub menu title' 

		), 

		 array(
			'name' => 'anchor7',
			'id' => $prefix . 'anchor7',
			'type' => 'wysiwyg',
			'desc' => 'Enter the content to be automatically scrolled to' 

		),
		 
		array(
			'name' => 'anchor8header',
			'id' => $prefix . 'anchor8header',
			'type' => 'text',
			'desc' => 'Enter the sub menu title' 

		), 

		 array(
			'name' => 'anchor8',
			'id' => $prefix . 'anchor8',
			'type' => 'wysiwyg',
			'desc' => 'Enter the content to be automatically scrolled to' 

		),
		 
		array(
			'name' => 'anchor9header',
			'id' => $prefix . 'anchor9header',
			'type' => 'text',
			'desc' => 'Enter the sub menu title' 

		), 
 
		 array(
			'name' => 'anchor9',
			'id' => $prefix . 'anchor9',
			'type' => 'wysiwyg',
			'desc' => 'Enter the content to be automatically scrolled to' 

		),
		 
		array(
			'name' => 'anchor10header',
			'id' => $prefix . 'anchor10header',
			'type' => 'text',
			'desc' => 'Enter the sub menu title' 

		), 

		 array(
			'name' => 'anchor10',
			'id' => $prefix . 'anchor10',
			'type' => 'wysiwyg',
			'desc' => 'Enter the content to be automatically scrolled to' 

		),
		array(
			'name' => 'anchor11header',
			'id' => $prefix . 'anchor11header',
			'type' => 'text',
			'desc' => 'Enter the sub menu title' 

		), 

		 array(
			'name' => 'anchor11',
			'id' => $prefix . 'anchor11',
			'type' => 'wysiwyg',
			'desc' => 'Enter the content to be automatically scrolled to' 

		),
		array(
			'name' => 'anchor12header',
			'id' => $prefix . 'anchor12header',
			'type' => 'text',
			'desc' => 'Enter the sub menu title' 

		), 

		 array(
			'name' => 'anchor12',
			'id' => $prefix . 'anchor12',
			'type' => 'wysiwyg',
			'desc' => 'Enter the content to be automatically scrolled to' 

		),
		 array(
			'name' => 'anchor13header',
			'id' => $prefix . 'anchor13header',
			'type' => 'text',
			'desc' => 'Enter the sub menu title' 

		), 

		 array(
			'name' => 'anchor13',
			'id' => $prefix . 'anchor13',
			'type' => 'wysiwyg',
			'desc' => 'Enter the content to be automatically scrolled to' 

		),
		array(
			'name' => 'anchor14header',
			'id' => $prefix . 'anchor14header',
			'type' => 'text',
			'desc' => 'Enter the sub menu title' 

		), 

		 array(
			'name' => 'anchor14',
			'id' => $prefix . 'anchor14',
			'type' => 'wysiwyg',
			'desc' => 'Enter the content to be automatically scrolled to' 

		),
		array(
			'name' => 'anchor15header',
			'id' => $prefix . 'anchor15header',
			'type' => 'text',
			'desc' => 'Enter the sub menu title' 

		), 

		 array(
			'name' => 'anchor15',
			'id' => $prefix . 'anchor15',
			'type' => 'wysiwyg',
			'desc' => 'Enter the content to be automatically scrolled to' 

		),
		array(
			'name' => 'anchor16header',
			'id' => $prefix . 'anchor16header',
			'type' => 'text',
			'desc' => 'Enter the sub menu title' 

		), 

		 array(
			'name' => 'anchor16',
			'id' => $prefix . 'anchor16',
			'type' => 'wysiwyg',
			'desc' => 'Enter the content to be automatically scrolled to' 

		),
		array(
			'name' => 'anchor17header',
			'id' => $prefix . 'anchor17header',
			'type' => 'text',
			'desc' => 'Enter the sub menu title' 

		), 

		 array(
			'name' => 'anchor17',
			'id' => $prefix . 'anchor17',
			'type' => 'wysiwyg',
			'desc' => 'Enter the content to be automatically scrolled to' 

		),
		array(
			'name' => 'anchor18header',
			'id' => $prefix . 'anchor18header',
			'type' => 'text',
			'desc' => 'Enter the sub menu title' 

		), 

		 array(
			'name' => 'anchor18',
			'id' => $prefix . 'anchor18',
			'type' => 'wysiwyg',
			'desc' => 'Enter the content to be automatically scrolled to' 

		),
		array(
			'name' => 'anchor19header',
			'id' => $prefix . 'anchor19header',
			'type' => 'text',
			'desc' => 'Enter the sub menu title' 

		), 

		 array(
			'name' => 'anchor19',
			'id' => $prefix . 'anchor19',
			'type' => 'wysiwyg',
			'desc' => 'Enter the content to be automatically scrolled to' 

		),
		array(
			'name' => 'anchor20header',
			'id' => $prefix . 'anchor20header',
			'type' => 'text',
			'desc' => 'Enter the sub menu title' 

		), 

		 array(
			'name' => 'anchor20',
			'id' => $prefix . 'anchor20',
			'type' => 'wysiwyg',
			'desc' => 'Enter the content to be automatically scrolled to' 

		),
	)
);
  //meta stuffs
$meta_boxes[] = array(		
	'title' => 'Strap Line',	
	'pages' => array('page','apprentices','employers','aboutus'),
	'context' => 'normal',
	'priority' => 'high',
	 
	
	'fields' => array(	
	    array(
			'name' => 'strapline',
			'id' => $prefix . 'strapline',
			'type' => 'text',
			'desc' => 'Enter the strapline to appear over the header graphic'
		),
		 
	)
);

 
 
 // meta stuffs
	$meta_boxes[] = array(		
	'title' => 'Job Detail',	
	'pages' => array('jobs'),
	'context' => 'normal',
	'priority' => 'high',
	
	'fields' => array(
			 array(
				'name' => 'Job ID',
				'id'   => $prefix . 'jobid',
				'type' => 'text',
				'desc' => 'Job ID'

			), 
		 array(
				'name' => 'Job Name',
				'id'   => $prefix . 'jobname',
				'type' => 'text',
				'desc' => 'Job Name'

			),
			 
			array(
				'name' => 'Company Name',
				'id'   => $prefix . 'companyname',
				'type' => 'text',
				'desc' => 'Company Name'

			),
			array(
				'name' => 'Location',
				'id'   => $prefix . 'location',
				'type' => 'text',
				'desc' => 'Location'

			),
			 
			  
				array(
				'name' => 'City',
				'id'   => $prefix . 'city',
				'type' => 'text',
				'desc' => 'City'

			)
			,array(
				'name' => 'State',
				'id'   => $prefix . 'state',
				'type' => 'text',
				'desc' => 'State'

			)
			,array(
				'name' => 'Short Description',
				'id'   => $prefix . 'shortdescription',
				'type' => 'wysiwyg',
				'desc' => 'Short Description'

			) 
			,array(
				'name' => 'Long Description',
				'id'   => $prefix . 'longtdescription',
				'type' => 'wysiwyg',
				'desc' => 'Long Description'

			 
			) 
			,array(
				'name' => 'Requirements',
				'id'   => $prefix . 'requirements',
				'type' => 'wysiwyg',
				'desc' => 'Requirements'

			 
			) 
			,array(
				'name' => 'Salary',
				'id'   => $prefix . 'salary',
				'type' => 'text',
				'desc' => 'Salary'

			) 
			 
			 
			 
			 
		)
	);	

 
 // meta stuffs
	$meta_boxes[] = array(		
	'title' => 'Questions and Answers',	
	'pages' => array('faqs'),
	'context' => 'normal',
	'priority' => 'high',
	
	'fields' => array(
			 array(
				'name' => 'Question',
				'id'   => $prefix . 'question',
				'type' => 'wysiwyg',
				'desc' => 'Question'

			), 
		 array(
				'name' => 'Answer',
				'id'   => $prefix . 'answer',
				'type' => 'wysiwyg',
				'desc' => 'Answer'

			)
			 
			 
			 
			 
		)
	);		
	 
 // meta stuffs
	$meta_boxes[] = array(		
	'title' => 'Address Info',	
	'pages' => array('locations'),
	'context' => 'normal',
	'priority' => 'high',
	
	'fields' => array(
			  
		
			 
			array(
				'name' => 'Address',
				'id'   => $prefix . 'address',
				'type' => 'wysiwyg',
				'desc' => 'Address'

			),
			 
			array(
				'name' => 'Telephone',
				'id'   => $prefix . 'telephone',
				'type' => 'text',
				'desc' => 'Telephone'

			),
				array(
				'name' => 'Fax',
				'id'   => $prefix . 'fax',
				'type' => 'text',
				'desc' => 'Fax'

			)
			 
			,array(
				'name' => 'Email',
				'id'   => $prefix . 'email',
				'type' => 'email',
				'desc' => 'Email'

			) 
			 
		)
	);	
	
	// meta stuffs
	$meta_boxes[] = array(		
	'title' => 'Video Info',	
	'pages' => array('videos'),
	'context' => 'normal',
	'priority' => 'high',
	
	'fields' => array(
			  
		
			 
			array(
				'name' => 'Video ID',
				'id'   => $prefix . 'videoid',
				'type' => 'text',
				'desc' => 'You Tube Video ID ie. G7z74BvLWUg'

			),
			 
			 array(
				'name' => 'Thumbnail Image',
				'id'   => $prefix . 'thumbnailimage',
				'type' => 'image',
				'desc' => 'Video Screenshot image - should be 220 x 120 pixels'

			),
			array(
				'name' => 'Video Description',
				'id'   => $prefix . 'videodescription',
				'type' => 'wysiwyg',
				'desc' => 'Video Description Text'

			),
			 
		)
	);	

	function rw_register_meta_boxes()
{
	global $meta_boxes;

	// Make sure there's no errors when the plugin is deactivated or during upgrade
	if ( !class_exists( 'RW_Meta_Box' ) )
		return;


	foreach ( $meta_boxes as $meta_box )
	{
		if(isset($meta_box['only_on']) && !rw_maybe_include($meta_box['only_on']))
			continue;
			
		new RW_Meta_Box( $meta_box );
	}
}
add_action( 'admin_init', 'rw_register_meta_boxes' );

/**
 * Check if meta boxes is included
 *
 * @return bool
 */
function rw_maybe_include($conditions)
{	
	
	// Include in back-end only
	if ( !defined( 'WP_ADMIN' ) || !WP_ADMIN )
		return false;

	// Always include for ajax
	if ( defined( 'DOING_AJAX' ) && DOING_AJAX )
		return true;
	if ( isset( $_GET['post'] ) )
		$post_id = $_GET['post'];
	elseif ( isset( $_POST['post_ID'] ) )
		$post_id = $_POST['post_ID'];
	else
		$post_id = false;
	$post_id = (int) $post_id;	
	foreach($conditions as $cond => $v){
		//catch non-arrays too
		if(!is_array($v))
			$v = array($v);
			
		switch($cond){
			case 'id':
				if ( in_array( $post_id, $v ))
					return true;
			break;
			
			case 'slug':
				$post = get_post($post_id);
				$post_slug = $post->post_name;
				if ( in_array( $post_slug, $v ))
					return true;
			break;
			
			case 'template':
				$template = get_post_meta( $post_id, '_wp_page_template', true );
				if ( in_array( $template, $v ) )
					return true;
			break;
			
		}
	}
	
	// If no condition matched
	return false;
}














// Include Custom Post Types & Custom Taxonomy
// include_once('includes/functions/custom-post-types.php');





add_action('init', 'register_customs');
function register_customs() 


{
	
	// Apprentices
  $labels = array(
    'name' => _x('Apprentices', 'post type general name'),
    'singular_name' => _x('Apprentices', 'post type singular name'),
    'add_new' => _x('Add New', 'Apprentices Page'),
    'add_new_item' => __('Add New Apprentices Page'),
    'edit_item' => __('Edit Apprentices Page'),
    'new_item' => __('New Apprentices Page'),
    'view_item' => __('View Apprentices Page'),
    'search_items' => __('Search Apprentices Pages'),
    'not_found' =>  __('No Apprentices Pages found'),
    'not_found_in_trash' => __('No Apprentices Pages found in Trash'), 
    'parent_item_colon' => '',
    'menu_name' => 'Apprentices Pages',

  );
    
 
  
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'show_in_nav_menus' => true,
    'query_var' => true,
    'rewrite' => Array('slug'=>'apprentices'),
    'capability_type' => 'post',
    'has_archive' => false, 
    'hierarchical' => true,
    'menu_position' => 39,
    'supports' => array('title','editor', 'excerpt','thumbnail', 'page-attributes', 'custom-fields','post-formats')
  );
   register_post_type('apprentices',$args);
  	 
// Job Application
  $labels = array(
    'name' => _x('Job Application', 'post type general name'),
    'singular_name' => _x('Job Applications', 'post type singular name'),
    'add_new' => _x('Add New', 'Job Application Page'),
    'add_new_item' => __('Add New Job Application Page'),
    'edit_item' => __('Edit Job Application Page'),
    'new_item' => __('New Job Application Page'),
    'view_item' => __('View Job Application Page'),
    'search_items' => __('Search Job Application Pages'),
    'not_found' =>  __('No Job Application Pages found'),
    'not_found_in_trash' => __('No Job Application Pages found in Trash'), 
    'parent_item_colon' => '',
    'menu_name' => 'Job Application Pages',

  );
    
 
  
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'show_in_nav_menus' => true,
    'query_var' => true,
    'rewrite' => Array('slug'=>'apply'),
    'capability_type' => 'post',
    'has_archive' => false, 
    'hierarchical' => true,
    'menu_position' => 39,
    'supports' => array('title','excerpt','thumbnail', 'page-attributes', 'custom-fields','post-formats')
  );
   register_post_type('jobapplication',$args);
  	 
  
  
   
  
	 
// Employers
  $labels = array(
    'name' => _x('Employers', 'post type general name'),
    'singular_name' => _x('Employers', 'post type singular name'),
    'add_new' => _x('Add New', 'Employers Page'),
    'add_new_item' => __('Add New Employers Page'),
    'edit_item' => __('Edit Employers Page'),
    'new_item' => __('New Employers Page'),
    'view_item' => __('View Employers Page'),
    'search_items' => __('Search Employers Pages'),
    'not_found' =>  __('No Employers Pages found'),
    'not_found_in_trash' => __('No Employers Pages found in Trash'), 
    'parent_item_colon' => '',
    'menu_name' => 'Employers Pages',

  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'show_in_nav_menus' => true,
    'query_var' => true,
    'rewrite' => Array('slug'=>'employers'),
    'capability_type' => 'post',
    'has_archive' => false, 
    'hierarchical' => true,
    'menu_position' => 40,
    'supports' => array('title','editor', 'excerpt','thumbnail', 'page-attributes', 'custom-fields')
  );
  
  register_post_type('employers',$args);
  
  // About Us
  $labels = array(
    'name' => _x('About us', 'post type general name'),
    'singular_name' => _x('About us', 'post type singular name'),
    'add_new' => _x('Add New', 'About us Page'),
    'add_new_item' => __('Add New About us Page'),
    'edit_item' => __('Edit About us Page'),
    'new_item' => __('New About us Page'),
    'view_item' => __('View About us Page'),
    'search_items' => __('Search About us Pages'),
    'not_found' =>  __('No About us Pages found'),
    'not_found_in_trash' => __('No About us Pages found in Trash'), 
    'parent_item_colon' => '',
    'menu_name' => 'About us Pages',

  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'show_in_nav_menus' => true,
    'query_var' => true,
    'rewrite' => Array('slug'=>'about-us'),
    'capability_type' => 'post',
    'has_archive' => false, 
    'hierarchical' => true,
    'menu_position' => 38,
    'supports' => array('title','editor', 'excerpt','thumbnail', 'page-attributes', 'custom-fields')
  );
  
  register_post_type('aboutus',$args);
  
  // Page Furniture Post Type
 
  $labels = array(
    'name' => _x('Page furniture', 'post type general name'),
    'singular_name' => _x('Page furnitures', 'post type singular name'),
    'add_new' => _x('Add New', 'Page furniture'),
    'add_new_item' => __('Add New Page furniture'),
    'edit_item' => __('Edit Page furniture'),
    'new_item' => __('New Page furniture'),
    'view_item' => __('View Page furniture'),
    'search_items' => __('Search Page furniture'),
    'not_found' =>  __('No Page furniture found'),
    'not_found_in_trash' => __('No Page furniture found in Trash'), 
    'parent_item_colon' => '',
    'menu_name' => 'Page Furniture',

  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'show_in_nav_menus' => false,
    'query_var' => true,
    'rewrite' => Array('slug'=>'page-furniture'),
    'capability_type' => 'post',
    'has_archive' => true, 
    'hierarchical' => false,
    'menu_position' => 36,
    'supports' => array('title','editor', 'excerpt','thumbnail', 'page-attributes', 'custom-fields')
  );
  
  register_post_type('page-furniture',$args);
 

 
  
  // State Management Contacts
  $labels = array(
    'name' => _x('State Management Contacts', 'post type general name'),
    'singular_name' => _x('State Management Contact', 'post type singular name'),
    'add_new' => _x('Add New', 'State Management Contact'),
    'add_new_item' => __('Add New State Management Contact'),
    'edit_item' => __('Edit State Management Contact'),
    'new_item' => __('New State Management Contact'),
    'view_item' => __('View State Management Contact'),
    'search_items' => __('Search State Management Contacts'),
    'not_found' =>  __('No State Management Contacts found'),
    'not_found_in_trash' => __('No State Management Contacts found in Trash'), 
    'parent_item_colon' => '',
    'menu_name' => 'State Management Contacts',

  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'show_in_nav_menus' => true,
    'query_var' => true,
    'rewrite' => Array('slug'=>'state-management-contacts'),
    'capability_type' => 'post',
    'has_archive' => false, 
    'hierarchical' => true,
    'menu_position' => 46,
    'supports' => array('title','editor', 'excerpt','thumbnail', 'page-attributes', 'custom-fields','post-formats')
  );
  
  register_post_type('statecontactinfo',$args);
  
	// National Management Contacts
  $labels = array(
    'name' => _x('National Management Contacts', 'post type general name'),
    'singular_name' => _x('National Management Contact', 'post type singular name'),
    'add_new' => _x('Add New', 'National Management Contact'),
    'add_new_item' => __('Add New National Management Contact'),
    'edit_item' => __('Edit National Management Contact'),
    'new_item' => __('New National Management Contact'),
    'view_item' => __('View National Management Contact'),
    'search_items' => __('Search National Management Contacts'),
    'not_found' =>  __('No National Management Contacts found'),
    'not_found_in_trash' => __('No National Management Contacts found in Trash'), 
    'parent_item_colon' => '',
    'menu_name' => 'National Management Contacts',

  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'show_in_nav_menus' => true,
    'query_var' => true,
    'rewrite' => Array('slug'=>'national-management-contacts'),
    'capability_type' => 'post',
    'has_archive' => false, 
    'hierarchical' => true,
    'menu_position' => 47,
    'supports' => array('title','editor', 'excerpt','thumbnail', 'page-attributes', 'custom-fields','post-formats')
  );
  
  register_post_type('nationalcontactinfo',$args);
// Apprentices
  $labels = array(
    'name' => _x('Employers', 'post type general name'),
    'singular_name' => _x('Employers', 'post type singular name'),
    'add_new' => _x('Add New', 'Employers Page'),
    'add_new_item' => __('Add New Employers Page'),
    'edit_item' => __('Edit Employers Page'),
    'new_item' => __('New Employers Page'),
    'view_item' => __('View Employers Page'),
    'search_items' => __('Search Employers Pages'),
    'not_found' =>  __('No Employers Pages found'),
    'not_found_in_trash' => __('No Employers Pages found in Trash'), 
    'parent_item_colon' => '',
    'menu_name' => 'Employers Pages',

  );
 
  

  // Testimonial Post Type
 
  $labels = array(
    'name' => _x('Testimonials', 'post type general name'),
    'singular_name' => _x('Testimonial', 'post type singular name'),
    'add_new' => _x('Add New', 'Testimonial'),
    'add_new_item' => __('Add New Testimonial'),
    'edit_item' => __('Edit Testimonial'),
    'new_item' => __('New Testimonial'),
    'view_item' => __('View Testimonial'),
    'search_items' => __('Search Testimonials'),
    'not_found' =>  __('No Testimonials found'),
    'not_found_in_trash' => __('No Testimonials found in Trash'), 
    'parent_item_colon' => '',
    'menu_name' => 'Testimonials'

  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'show_in_nav_menus' => true,
    'query_var' => true,
    'rewrite' => Array('slug'=>'testimonials'),
    'capability_type' => 'post',
    'has_archive' => true, 
    'hierarchical' => false,
    'menu_position' => 38,
    'supports' => array('title','editor','revisions', 'author','excerpt','thumbnail', 'page-attributes')
  );
  
  register_post_type('testimonials',$args);
  
 
  // Boxouts
 
  $labels = array(
    'name' => _x('Boxouts', 'post type general name'),
    'singular_name' => _x('Boxout', 'post type singular name'),
    'add_new' => _x('Add New', 'Boxout'),
    'add_new_item' => __('Add New Boxout'),
    'edit_item' => __('Edit Boxout'),
    'new_item' => __('New Boxout'),
    'view_item' => __('View Boxouts'),
    'search_items' => __('Search Boxouts'),
    'not_found' =>  __('No Boxouts found'),
    'not_found_in_trash' => __('No Boxouts found in Trash'), 
    'parent_item_colon' => '',
    'menu_name' => 'Boxouts'

  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'show_in_nav_menus' => true,
    'query_var' => true,
    'rewrite' => Array('slug'=>'boxouts'),
    'capability_type' => 'post',
    'has_archive' => true, 
    'hierarchical' => false,
    'menu_position' => 39,
    'supports' => array('title','editor','revisions', 'author','excerpt','thumbnail', 'page-attributes')
  );
  
  register_post_type('boxouts',$args);
  
  // News Stories
 
  $labels = array(
    'name' => _x('News Items', 'post type general name'),
    'singular_name' => _x('News Item', 'post type singular name'),
    'add_new' => _x('Add New', 'News Item'),
    'add_new_item' => __('Add New News Item'),
    'edit_item' => __('Edit News Item'),
    'new_item' => __('New News Item'),
    'view_item' => __('View News Item'),
    'search_items' => __('Search News Items'),
    'not_found' =>  __('No News Items found'),
    'not_found_in_trash' => __('No News Items found in Trash'), 
    'parent_item_colon' => '',
    'menu_name' => 'News Items'

  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'show_in_nav_menus' => true,
    'query_var' => true,
    'rewrite' => Array('slug'=>'news'),
    'capability_type' => 'post',
    'has_archive' => true, 
    'hierarchical' => false,
    'menu_position' => 23,
    'supports' => array('title','editor','revisions', 'author','excerpt','thumbnail', 'page-attributes')
  );
  
  register_post_type('news-items',$args);
 
  
  
 
// AIG JOBS
  $labels = array(
    'name' => _x('Jobs', 'post type general name'),
    'singular_name' => _x('Job', 'post type singular name'),
    'add_new' => _x('Add New', 'Job'),
    'add_new_item' => __('Add New Job'),
    'edit_item' => __('Edit Job'),
    'new_item' => __('New Job'),
    'view_item' => __('View Jobs'),
    'search_items' => __('Search Jobs'),
    'not_found' =>  __('No Jobs found'),
    'not_found_in_trash' => __('No Jobs found in Trash'), 
    'parent_item_colon' => '',
    'menu_name' => 'Jobs',

  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'show_in_nav_menus' => true,
    'query_var' => true,
    'rewrite' => Array('slug'=>'aig-jobs'),
    'capability_type' => 'post',
    'has_archive' => false, 
    'hierarchical' => true,
    'menu_position' => 40,
    'supports' => array('title','editor', 'excerpt','thumbnail', 'page-attributes', 'custom-fields')
  );
  
  register_post_type('aig-jobs',$args);

}
 






//  include_once('includes/functions/custom-taxonomy.php');













register_taxonomy(
	'page-furniture-category',
	array(
		'page-furniture'
	),
	array(
		'hierarchical' => true,
		'show_ui' => true,
		'public' => true,
		'show_admin_column' => true,
		'public' => true,
		'label' => __('Page furniture Category'),
		'show_in_nav_menus' => false,
		'labels' => array(
			'add_new_item' => 'Add New Page Furniture Category'
		),
		'query_var' => true,
	)
);

register_taxonomy(
	'testimonial-category',
	array(
		'testimonials'
	),
	array(
		'hierarchical' => true,
		'show_ui' => true,
		'public' => true,
		'show_admin_column' => true,
		'public' => true,
		'label' => __('Testimonial Category'),
		'show_in_nav_menus' => false,
		'labels' => array(
			'add_new_item' => 'Add New Testimonial Category'
		),
		'query_var' => true,
	)
);


register_taxonomy(
	'classification',
	array(
		'aig-jobs'
	),
	array(
		'hierarchical' => true,
		'show_ui' => true,
		'public' => true,
		'show_admin_column' => true,
		'label' => __('Classification'),
		'show_in_nav_menus' => true,
		'labels' => array(
			'add_new_item' => 'Add New Classification'
		),
		'query_var' => true,
	)
);
register_taxonomy(
	'location',
	array(
		'aig-jobs'
	),
	array(
		'hierarchical' => true,
		'show_ui' => true,
		'public' => true,
		'show_admin_column' => true,
		'label' => __('Location'),
		'show_in_nav_menus' => true,
		'labels' => array(
			'add_new_item' => 'Add New Location'
		),
		'query_var' => true,
	)
);
register_taxonomy(
	'boxout-position',
	array(
		'boxouts'
	),
	array(
		'hierarchical' => true,
		'show_ui' => true,
		'public' => true,
		'show_admin_column' => true,
		'public' => true,
		'label' => __('Boxout Position'),
		'show_in_nav_menus' => false,
		'labels' => array(
			'add_new_item' => 'Add New Boxout Position'
		),
		'query_var' => true,
	)
);
register_taxonomy(
	'statemgmt-category',
	array(
		'statecontactinfo'
	),
	array(
		'hierarchical' => true,
		'show_ui' => true,
		'public' => true,
		'show_admin_column' => true,
		'public' => true,
		'label' => __('State Management Contact Category'),
		'show_in_nav_menus' => true,
		'labels' => array(
			'add_new_item' => 'Add New State Management Contact Category'
		),
		'query_var' => true,
	)
);




add_theme_support( 'menus' );
        add_action( 'widgets_init', 'respare_footer' );
		
		// Add Your Menu Locations
function register_my_menus() {
  register_nav_menus(
    array(  
    	'primary_menu' => __( 'Primary Menu' ), 
    	'secondary_menu' => __( 'Secondary Menu' ),
		'tertiary_menu' => __( 'Tertiary Menu' ),
		'quaternary_menu' => __( 'Quaternary Menu' ),
		'quinary_menu' => __('Quinary Menu'),
		'senary' => __('senary Menu'),
		'septenary' => __('septenary Menu'),
		'octonary' => __('Octonary Menu'),
		'nonary' => __('Nonary Menu')

    )
  );
} 
add_action( 'init', 'register_my_menus' );
/**
 * Hooks the WP cpt_post_types filter 
 *
 * @param array $post_types An array of post type names that the templates be used by
 * @return array The array of post type names that the templates be used by
 **/
function my_cpt_post_types( $post_types ) {
    $post_types[] = 'apprentices';
    $post_types[] = 'employers';
    return $post_types;
}
add_filter( 'cpt_post_types', 'my_cpt_post_types' );
/*
* adds a slideshow that slides from image to image - it caches the generated html and rebuilds the cache on the first load each day
* $filter is a regular expression to match image names eg 'slide\d+\.png' will get slide1.png, slide2.png, slide21.png, slide231.png etc
* $slide_time is in milliseconds and is the time for one slide to slide over to another
* $wait_time is in milliseconds and is the time between the end of one fade and the start of the next
* $img_class is a class that is added to the images
* $force_rebuild is a boolean that if true will rebuild the cache file
*/
function sliderShow( $filter='.', $slide_time=1000, $wait_time=2000, $img_class='', $force_rebuild=false ) {
	$template_dir = get_stylesheet_directory();
	$cache_dir = $template_dir.'/slidershow_cache';
	if (!is_writable($template_dir)) {
		echo '<!-- temp dir not writable -->';
	}
	if (!file_exists($cache_dir)) {
		if (!@mkdir($cache_dir, 0755)) {
			echo '<!-- cache dir not created -->';
		}
	}
	$cache_file = $cache_dir.'/slidershow_cache_'.(md5($filter)).'.html';
	if ($force_rebuild || !file_exists($cache_file) || date("Y-m-d", filemtime($cache_file)) != date ("Y-m-d")) {
		$class = substr(str_shuffle("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, 8);
		$img_urls = array();
		$upload_dir = WP_CONTENT_DIR.'/uploads';
		$handle = opendir( $upload_dir );

		while ($file = readdir($handle)) {
			$file_path = $upload_dir.'/'.$file;
			if (!is_dir( $file_path )) {
				if (preg_match( "/$filter/", $file )) {
					$image_info = getimagesize($file_path);
					$file_path = $path.'/'.$file;
					$img_urls[] = '<img src="'.WP_CONTENT_URL.'/uploads/'.$file.'" '.$image_info[3].' class="'.$class.(empty($img_class) ? '' : ' '.$img_class).'" style="display:none">';
				}
			}
		}
		closedir($handle);
		sort($img_urls);
		if (count($img_urls)) {
			$img_urls[0] = str_replace(' style="display:none"','',$img_urls[0]);
		}
		$html = implode('', $img_urls);
		if (count($img_urls) > 1) {
			$html .= '<script type="text/javascript">jQuery(window).load(function(){
				var i=0,n,$i=jQuery("img.'.$class.'"),l=$i.length,x=0;
				$i.each(function(j) {
					$i.eq(j).css("left", x + "px").show();
					x += $i.eq(j).width();
				});
				setInterval(function() {
					n = i-1 < 0 ? l-1 : i-1;
					var h=0;
					$i.animate({ "left": "-="+$i.eq(i).width()+"px" },'.$slide_time.', function() {
						h++;
						if (h == l) {
							$i.eq(i).css("left", $i.eq(n).offset().left + $i.eq(n).width() + "px");
							i = (i+1)%l;
						}
					});
				}, '.($slide_time + $wait_time).');
			});</script>';
		}

		file_put_contents($cache_file, $html);
	} else {
		$html = file_get_contents($cache_file);
	}
	echo $html;
}
function excerpt($limit) {
  $excerpt = explode(' ', get_the_excerpt(), $limit);
  if (count($excerpt)>=$limit) {
    array_pop($excerpt);
    $excerpt = implode(" ",$excerpt).'...';
  } else {
    $excerpt = implode(" ",$excerpt);
  }	
  $excerpt = preg_replace('`\[[^\]]*\]`','',$excerpt);
  return $excerpt;
}
 
function content($limit) {
  $content = explode(' ', get_the_content(), $limit);
  if (count($content)>=$limit) {
    array_pop($content);
    $content = implode(" ",$content).'...';
  } else {
    $content = implode(" ",$content);
  }	
  $content = preg_replace('/\[.+\]/','', $content);
  $content = apply_filters('the_content', $content); 
  $content = str_replace(']]>', ']]&gt;', $content);
  return $content;
  
}
function changeDateFormat($date_str,$from_format,$to_format) {
	$date_time = DateTime::createFromFormat($from_format, $date_str);
	if (!$date_time) return '';
	return $date_time->format($to_format);
}
function changeDateFormatForHumans($date_str) {
	return changeDateFormat($date_str, 'd/m/Y', 'j<\b\r/>M');
}
function changeDateFormatForDbStorage($date_str) {
	return changeDateFormat($date_str, 'd/m/Y', 'Y-m-d H:i:s');
}



//  CHRIS FUNCTIONS UPDATES


add_action('wp_enqueue_scripts', 'html5blank_styles'); // Add Theme Stylesheet
add_action('init', 'html5blank_header_scripts'); // Add Custom Scripts to wp_head
// add_action('wp_print_scripts', 'html5blank_conditional_scripts'); // Add Conditional Page Scripts






// Load HTML5 Blank styles
function html5blank_styles()
{
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), '1.0', 'all');
    wp_enqueue_style('bootstrap'); // Enqueue it!

    wp_register_style('google-fonts', 'https://fonts.googleapis.com/css?family=Roboto|Roboto+Slab', array(), '1.0', 'all');
    wp_enqueue_style('google-fonts');


    wp_register_style('animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.css', array(), '1.0', 'all');
    wp_enqueue_style('animate');


    wp_register_style('style', get_template_directory_uri() . '/css/styles.css', array(), '1.0', 'all');
    wp_enqueue_style('style');

}





// add_action('wp_print_scripts', 'html5blank_conditional_scripts'); // Add Conditional Page Scripts






function html5blank_header_scripts()
{
    if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {




        wp_register_script('modernizr', get_template_directory_uri() . '/js/vendor/modernizr-2.8.3.min.js', array(), '2.7.1'); // Modernizr
        wp_enqueue_script('modernizr'); 


        wp_register_script('plugins', get_template_directory_uri() . '/js/plugins.js', array('jquery'), '1.0.0'); // plugins
        wp_enqueue_script('plugins');


        wp_register_script('fontawesome', 'https://use.fontawesome.com/11ac231540.js', array(), '4.3.0'); // Conditionizr
        wp_enqueue_script('fontawesome');



        
        wp_register_script('fns', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0.0', TRUE); // Custom scripts
        wp_enqueue_script('fns'); 



    }
}

// Load HTML5 Blank conditional scripts
function html5blank_conditional_scripts()
{
    if (is_page('pagenamehere')) {
        wp_register_script('scriptname', get_template_directory_uri() . '/js/scriptname.js', array('jquery'), '1.0.0'); // Conditional script(s)
        wp_enqueue_script('scriptname'); 
    }
}



add_filter('show_admin_bar', '__return_false');