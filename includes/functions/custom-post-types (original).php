<?

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
 
// FAQs Post Type
 
  $labels = array(
    'name' => _x('FAQs', 'post type general name'),
    'singular_name' => _x('FAQ', 'post type singular name'),
    'add_new' => _x('Add New', 'FAQ'),
    'add_new_item' => __('Add New FAQ'),
    'edit_item' => __('Edit FAQ'),
    'new_item' => __('New FAQ'),
    'view_item' => __('View FAQ'),
    'search_items' => __('Search FAQs'),
    'not_found' =>  __('No FAQs found'),
    'not_found_in_trash' => __('No FAQs found in Trash'), 
    'parent_item_colon' => '',
    'menu_name' => 'FAQs'

  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'show_in_nav_menus' => true,
    'query_var' => true,
    'rewrite' => Array('slug'=>'faqs'),
    'capability_type' => 'post',
    'has_archive' => true, 
    'hierarchical' => false,
    'menu_position' => 37,
    'supports' => array('title','revisions', 'author','excerpt','thumbnail', 'page-attributes')
  );
  
  register_post_type('faqs',$args);
  
  // Policies Post Type
 
  $labels = array(
    'name' => _x('Policies', 'post type general name'),
    'singular_name' => _x('Policy', 'post type singular name'),
    'add_new' => _x('Add New', 'Policy'),
    'add_new_item' => __('Add New Policy'),
    'edit_item' => __('Edit Policy'),
    'new_item' => __('New Policy'),
    'view_item' => __('View Policy'),
    'search_items' => __('Search Policies'),
    'not_found' =>  __('No Policies found'),
    'not_found_in_trash' => __('No Policies found in Trash'), 
    'parent_item_colon' => '',
    'menu_name' => 'Policies'

  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'show_in_nav_menus' => true,
    'query_var' => true,
    'rewrite' => Array('slug'=>'policies'),
    'capability_type' => 'post',
    'has_archive' => true, 
    'hierarchical' => false,
    'menu_position' => 37,
    'supports' => array('title','editor','revisions', 'author','excerpt','thumbnail', 'page-attributes')
  );
  
  register_post_type('faqs',$args);
  
  
 
  

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
 
 // Case Studies
 
  $labels = array(
    'name' => _x('Case Study', 'post type general name'),
    'singular_name' => _x('Case Study', 'post type singular name'),
    'add_new' => _x('Add New', 'Case Study'),
    'add_new_item' => __('Add New Case Study'),
    'edit_item' => __('Edit Case Study'),
    'new_item' => __('New Case Study'),
    'view_item' => __('View Case Study'),
    'search_items' => __('Search Case Studies'),
    'not_found' =>  __('No Case Studies found'),
    'not_found_in_trash' => __('No Case Studies found in Trash'), 
    'parent_item_colon' => '',
    'menu_name' => 'Case Studies'

  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'show_in_nav_menus' => true,
    'query_var' => true,
    'rewrite' => Array('slug'=>'casestudies'),
    'capability_type' => 'post',
    'has_archive' => true, 
    'hierarchical' => false,
    'menu_position' => 24,
    'supports' => array('title','editor','revisions', 'author','excerpt','thumbnail', 'page-attributes')
  );
  
  register_post_type('case-studies',$args);
 

  
  
    // Industry Sectors
 
  $labels = array(
    'name' => _x('Industry Sector', 'post type general name'),
    'singular_name' => _x('Industry Sector', 'post type singular name'),
    'add_new' => _x('Add New', 'Industry Sector'),
    'add_new_item' => __('Add New Industry Sector'),
    'edit_item' => __('Edit Industry Sector'),
    'new_item' => __('New Industry Sector'),
    'view_item' => __('View Industry Sector'),
    'search_items' => __('Search Industry Sectors'),
    'not_found' =>  __('No Industry Sectors found'),
    'not_found_in_trash' => __('No Industry Sectors found in Trash'), 
    'parent_item_colon' => '',
    'menu_name' => 'Industry Sector'

  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'show_in_nav_menus' => true,
    'query_var' => true,
    'rewrite' => Array('slug'=>'industrysector'),
    'capability_type' => 'post',
    'has_archive' => true, 
    'hierarchical' => false,
    'menu_position' => 32,
    'supports' => array('title','revisions', 'author','excerpt','thumbnail', 'page-attributes')
  );
  
  register_post_type('industrysector',$args);
  
 


 
  
// VIDEOS
 
  $labels = array(
    'name' => _x('Videos', 'post type general name'),
    'singular_name' => _x('Video', 'post type singular name'),
    'add_new' => _x('Add New', 'Video'),
    'add_new_item' => __('Add New Video'),
    'edit_item' => __('Edit Video'),
    'new_item' => __('New Video'),
    'view_item' => __('View Videos'),
    'search_items' => __('Search Videos'),
    'not_found' =>  __('No Video'),
    'not_found_in_trash' => __('No Video found in Trash'), 
    'parent_item_colon' => '',
    'menu_name' => 'Videos',
  );
  $args = array(
    'labels' => $labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'show_in_nav_menus' => false,
    'query_var' => true,
    'rewrite' => Array('slug'=>'videos'),
    'capability_type' => 'post',
    'has_archive' => true, 
    'hierarchical' => false,
    'menu_position' => 35,
   'supports' => array('title','revisions', 'author','excerpt','thumbnail', 'page-attributes')  );
  
  register_post_type('videos',$args);
}