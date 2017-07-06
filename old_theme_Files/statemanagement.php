<h2>State Management</h2><?php 
echo '<div class="accordion statemanagment">';
// ANCHOR 1 LI
     
	echo '<div class="accordion-section">
				<a class="accordion-section-title" href="#accordion-1"><span class="wpjb-glyphs wpjb-icon-right-open"></span>New South Wales & ACT</a>';
	 
	echo '<div id="accordion-1" class="accordion-section-content">';
	
	
	
	 
// New South wales & Act
	
 query_posts( array( 'post_type' => 'statecontactinfo',
			 'taxonomy'  => 'statemgmt-category','term' => 'new-south-wales-act','posts_per_page' => -1,'orderby' => 'menu_order','order' => 'ASC'));  while (have_posts()) : the_post();   
    
	echo '<div class="stateoffice">';
	echo'<h3 class="officename">';the_title();echo'</h3>';
     echo '<p class="officecontent"';the_content();echo'</p>';
	
	echo '</div>';
	 
    endwhile;  wp_reset_query(); 
	
 
	 echo ' </div></div>';

//bv
// ANCHOR 2 LI
     
	echo '<div class="accordion-section">
				<a class="accordion-section-title" href="#accordion-2"><span class="wpjb-glyphs wpjb-icon-right-open"></span>Albury / Wodonga</a>';
	 
	echo '<div id="accordion-2" class="accordion-section-content">';
	
	
	
	 
// Albury Wodonga
	
 query_posts( array( 'post_type' => 'statecontactinfo',
			 'taxonomy'  => 'statemgmt-category','term' => 'albury-wodonga','posts_per_page' => -1,'orderby' => 'menu_order','order' => 'ASC'));  while (have_posts()) : the_post();   
    
	echo '<div class="stateoffice">';
	echo'<h3 class="officename">';the_title();echo'</h3>';
     echo '<p class="officecontent"';the_content();echo'</p>';
	
	echo '</div>';
	 
    endwhile;  wp_reset_query(); 
	
 
	 echo ' </div></div>';

//bv
	 
// ANCHOR 3 LI
     
	echo '<div class="accordion-section">
				<a class="accordion-section-title" href="#accordion-3"><span class="wpjb-glyphs wpjb-icon-right-open"></span>Northern Territory</a>';
	 
	echo '<div id="accordion-3" class="accordion-section-content">';
	
	
	
	 
// Northern Territory
	
 query_posts( array( 'post_type' => 'statecontactinfo',
			 'taxonomy'  => 'statemgmt-category','term' => 'northern-territory','posts_per_page' => -1,'orderby' => 'menu_order','order' => 'ASC'));  while (have_posts()) : the_post();   
    
	echo '<div class="stateoffice">';
	echo'<h3 class="officename">';the_title();echo'</h3>';
     echo '<p class="officecontent"';the_content();echo'</p>';
	
	echo '</div>';
	 
    endwhile;  wp_reset_query(); 
	
 
	 echo ' </div></div>';
	 
	 // ANCHOR 4 LI
     
	echo '<div class="accordion-section">
				<a class="accordion-section-title" href="#accordion-4"><span class="wpjb-glyphs wpjb-icon-right-open"></span>Queensland</a>';
	 
	echo '<div id="accordion-4" class="accordion-section-content">';
	
	
	
	 
// Queensland
	
 query_posts( array( 'post_type' => 'statecontactinfo',
			 'taxonomy'  => 'statemgmt-category','term' => 'queensland','posts_per_page' => -1,'orderby' => 'menu_order','order' => 'ASC'));  while (have_posts()) : the_post();   
    
	echo '<div class="stateoffice">';
	echo'<h3 class="officename">';the_title();echo'</h3>';
     echo '<p class="officecontent"';the_content();echo'</p>';
	
	echo '</div>';
	 
    endwhile;  wp_reset_query(); 
	
 
	 echo ' </div></div>';
	 
	 
	 // ANCHOR 5 LI
     
	echo '<div class="accordion-section">
				<a class="accordion-section-title" href="#accordion-5"><span class="wpjb-glyphs wpjb-icon-right-open"></span>South Australia</a>';
	 
	echo '<div id="accordion-5" class="accordion-section-content">';
	
	
	
	 
// South Australia
	
 query_posts( array( 'post_type' => 'statecontactinfo',
			 'taxonomy'  => 'statemgmt-category','term' => 'south-australia','posts_per_page' => -1,'orderby' => 'menu_order','order' => 'ASC'));  while (have_posts()) : the_post();   
    
	echo '<div class="stateoffice">';
	echo'<h3 class="officename">';the_title();echo'</h3>';
     echo '<p class="officecontent"';the_content();echo'</p>';
	
	echo '</div>';
	 
    endwhile;  wp_reset_query(); 
	
 
	 echo ' </div></div>';
	 
	 
	 // ANCHOR 6 LI
     
	echo '<div class="accordion-section">
				<a class="accordion-section-title" href="#accordion-6"><span class="wpjb-glyphs wpjb-icon-right-open"></span>Tasmania</a>';
	 
	echo '<div id="accordion-6" class="accordion-section-content">';
	
	
	
	 
// Tasmania
	
 query_posts( array( 'post_type' => 'statecontactinfo',
			 'taxonomy'  => 'statemgmt-category','term' => 'tasmania','posts_per_page' => -1,'orderby' => 'menu_order','order' => 'ASC'));  while (have_posts()) : the_post();   
    
	echo '<div class="stateoffice">';
	echo'<h3 class="officename">';the_title();echo'</h3>';
     echo '<p class="officecontent"';the_content();echo'</p>';
	
	echo '</div>';
	 
    endwhile;  wp_reset_query(); 
	
 
	 echo ' </div></div>';
	 
	 
	 // ANCHOR 7 LI
     
	echo '<div class="accordion-section">
				<a class="accordion-section-title" href="#accordion-7"><span class="wpjb-glyphs wpjb-icon-right-open"></span>Victoria</a>';
	 
	echo '<div id="accordion-7" class="accordion-section-content">';
	
	
	
	 
// Victoria
	
 query_posts( array( 'post_type' => 'statecontactinfo',
			 'taxonomy'  => 'statemgmt-category','term' => 'victoria','posts_per_page' => -1,'orderby' => 'menu_order','order' => 'ASC'));  while (have_posts()) : the_post();   
    
	echo '<div class="stateoffice">';
	echo'<h3 class="officename">';the_title();echo'</h3>';
     echo '<p class="officecontent"';the_content();echo'</p>';
	
	echo '</div>';
	 
    endwhile;  wp_reset_query(); 
	
 
	 echo ' </div></div>';


// ANCHOR 8 LI
     
	echo '<div class="accordion-section">
				<a class="accordion-section-title" href="#accordion-8"><span class="wpjb-glyphs wpjb-icon-right-open"></span>Bendigo</a>';
	 
	echo '<div id="accordion-8" class="accordion-section-content">';
	
	
	
	 
// Victoria
	
 query_posts( array( 'post_type' => 'statecontactinfo',
			 'taxonomy'  => 'statemgmt-category','term' => 'bendigo','posts_per_page' => -1,'orderby' => 'menu_order','order' => 'ASC'));  while (have_posts()) : the_post();   
    
	echo '<div class="stateoffice">';
	echo'<h3 class="officename">';the_title();echo'</h3>';
     echo '<p class="officecontent"';the_content();echo'</p>';
	
	echo '</div>';
	 
    endwhile;  wp_reset_query(); 
	
 
	 echo ' </div></div>';
	 
	 
	 // ANCHOR 9 LI
     
	echo '<div class="accordion-section">
				<a class="accordion-section-title" href="#accordion-9"><span class="wpjb-glyphs wpjb-icon-right-open"></span>Western Australia</a>';
	 
	echo '<div id="accordion-9" class="accordion-section-content">';
	
	
	
	 
// Western Australia
	
 query_posts( array( 'post_type' => 'statecontactinfo',
			 'taxonomy'  => 'statemgmt-category','term' => 'western-australia','posts_per_page' => -1,'orderby' => 'menu_order','order' => 'ASC'));  while (have_posts()) : the_post();   
    
	echo '<div class="stateoffice">';
	echo'<h3 class="officename">';the_title();echo'</h3>';
     echo '<p class="officecontent"';the_content();echo'</p>';
	
	echo '</div>';
	 
    endwhile;  wp_reset_query(); 
	
 
	 echo ' </div></div>';


//bv
// ANCHOR 10 LI
     
	echo '<div class="accordion-section">
				<a class="accordion-section-title" href="#accordion-10"><span class="wpjb-glyphs wpjb-icon-right-open"></span>National Payroll</a>';
	 
	echo '<div id="accordion-10" class="accordion-section-content">';
	
	
	
	 
// National Payroll
	
 query_posts( array( 'post_type' => 'statecontactinfo',
			 'taxonomy'  => 'statemgmt-category','term' => 'national-payroll','posts_per_page' => -1,'orderby' => 'menu_order','order' => 'ASC'));  while (have_posts()) : the_post();   
    
	echo '<div class="stateoffice">';
	echo'<h3 class="officename">';the_title();echo'</h3>';
     echo '<p class="officecontent"';the_content();echo'</p>';
	
	echo '</div>';
	 
    endwhile;  wp_reset_query(); 
	
 
	 echo ' </div></div>';



// ANCHOR 11 LI
     
	echo '<div class="accordion-section">
				<a class="accordion-section-title" href="#accordion-11"><span class="wpjb-glyphs wpjb-icon-right-open"></span>WHS Management Team</a>';
	 
	echo '<div id="accordion-11" class="accordion-section-content">';
	
	
	
	 
// National Payroll
	
 query_posts( array( 'post_type' => 'statecontactinfo',
			 'taxonomy'  => 'statemgmt-category','term' => 'whs-management-team','posts_per_page' => -1,'orderby' => 'menu_order','order' => 'ASC'));  while (have_posts()) : the_post();   
    
	echo '<div class="stateoffice">';
	echo'<h3 class="officename">';the_title();echo'</h3>';
     echo '<p class="officecontent"';the_content();echo'</p>';
	
	echo '</div>';
	 
    endwhile;  wp_reset_query(); 
	
 
	 echo ' </div></div>';
//bv

	
	echo '</div>';