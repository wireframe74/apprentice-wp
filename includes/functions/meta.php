<?php

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