<?
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

 

  