<?
register_taxonomy(
	'news-category',
	array(
		'publications','news-items'
	),
	array(
		'hierarchical' => true,
		'show_ui' => true,
		'public' => true,
		'show_admin_column' => true,
		'public' => true,
		'label' => __('News Category'),
		'show_in_nav_menus' => true,
		'labels' => array(
			'add_new_item' => 'Add New News Category'
		),
		'query_var' => true,
	)
);
 
 register_taxonomy(
	'video-category',
	array(
		'videos'
	),
	array(
		'hierarchical' => true,
		'show_ui' => true,
		'public' => true,
		'show_admin_column' => true,
		'public' => true,
		'label' => __('Video Category'),
		'show_in_nav_menus' => true,
		'labels' => array(
			'add_new_item' => 'Add New Video Category'
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

register_taxonomy(
	'nationalmgmt-category',
	array(
		'nationalcontactinfo'
	),
	array(
		'hierarchical' => true,
		'show_ui' => true,
		'public' => true,
		'show_admin_column' => true,
		'public' => true,
		'label' => __('National Management Contact Category'),
		'show_in_nav_menus' => true,
		'labels' => array(
			'add_new_item' => 'Add New National Management Contact Category'
		),
		'query_var' => true,
	)
);

 register_taxonomy(
	'national-management-contact-category',
	array(
		'national-management-contacts'
	),
	array(
		'hierarchical' => true,
		'show_ui' => true,
		'public' => true,
		'show_admin_column' => true,
		'public' => true,
		'label' => __('National Management Contact Category'),
		'show_in_nav_menus' => true,
		'labels' => array(
			'add_new_item' => 'Add New National Management Contact Category'
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
	'expertise-category',
	array(
		'publications','industrysector','practicearea','people','expertise-area','experience-item','director'
	),
	array(
		'hierarchical' => true,
		'show_ui' => true,
		'public' => true,
		'show_admin_column' => true,
		'label' => __('Expertise Category'),
		'show_in_nav_menus' => true,
		'labels' => array(
			'add_new_item' => 'Add New Expertise Category'
		),
		'query_var' => true,
	)
);
register_taxonomy(
	'location',
	array(
		'people','locations','director'
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
	'teamrole',
	array(
		'people','locations','director'
	),
	array(
		'hierarchical' => true,
		'show_ui' => true,
		'public' => true,
		'show_admin_column' => true,
		'label' => __('Team Role'),
		'show_in_nav_menus' => true,
		'labels' => array(
			'add_new_item' => 'Add New Team Role'
		),
		'query_var' => true,
	)
);
register_taxonomy(
	'state',
	array(
		'people','locations','director'
	),
	array(
		'hierarchical' => true,
		'show_ui' => true,
		'public' => true,
		'show_admin_column' => true,
		'label' => __('State'),
		'show_in_nav_menus' => true,
		'labels' => array(
			'add_new_item' => 'Add New State'
		),
		'query_var' => true,
	)
);

 register_taxonomy(
	'clientlogo-category',
	array(
		'clientlogo'
	),
	array(
		'hierarchical' => true,
		'show_ui' => true,
		'public' => true,
		'show_admin_column' => true,
		'public' => true,
		'label' => __('Client Logo Category'),
		'show_in_nav_menus' => false,
		'labels' => array(
			'add_new_item' => 'Add New Client Logo Category'
		),
		'query_var' => true,
	)
);register_taxonomy(
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