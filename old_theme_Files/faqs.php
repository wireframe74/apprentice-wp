<?php 
echo '<div class="accordion">';
// ANCHOR 1 LI
    if ( get_post_meta($post->ID, 'sh_anchor1header', true) )  
	echo '<div class="accordion-section">
				<a class="accordion-section-title" href="#accordion-1"><span class="wpjb-glyphs wpjb-icon-right-open"></span>';	
				echo do_shortcode (get_post_meta($post->ID, 'sh_anchor1header', true)); echo '</a>';
	if ( get_post_meta($post->ID, 'sh_anchor1', true) )
	echo '<div id="accordion-1" class="accordion-section-content">'; 
	echo do_shortcode (get_post_meta($post->ID, 'sh_anchor1', true));  
	if ( get_post_meta($post->ID, 'sh_anchor1', true) ) echo ' </div></div>';
	
	// ANCHOR 2 LI
    if ( get_post_meta($post->ID, 'sh_anchor2header', true) )  
	echo '<div class="accordion-section">
				<a class="accordion-section-title" href="#accordion-2"><span class="wpjb-glyphs wpjb-icon-right-open"></span>';	
				echo do_shortcode (get_post_meta($post->ID, 'sh_anchor2header', true)); echo '</a>';
	if ( get_post_meta($post->ID, 'sh_anchor2', true) )
	echo '<div id="accordion-2" class="accordion-section-content">'; 
	echo do_shortcode (get_post_meta($post->ID, 'sh_anchor2', true));
	if ( get_post_meta($post->ID, 'sh_anchor2', true) ) echo ' </div></div>';
			 
	
	// ANCHOR 3 LI
    if ( get_post_meta($post->ID, 'sh_anchor3header', true) )  
	echo '<div class="accordion-section">
				<a class="accordion-section-title" href="#accordion-3"><span class="wpjb-glyphs wpjb-icon-right-open"></span>';	
				echo do_shortcode (get_post_meta($post->ID, 'sh_anchor3header', true)); echo '</a>';
	if ( get_post_meta($post->ID, 'sh_anchor3', true) )
	echo '<div id="accordion-3" class="accordion-section-content">'; 
	echo do_shortcode (get_post_meta($post->ID, 'sh_anchor3', true));
	if ( get_post_meta($post->ID, 'sh_anchor3', true) ) echo ' </div></div>';
	
	// ANCHOR 4 LI
    if ( get_post_meta($post->ID, 'sh_anchor4header', true) )  
	echo '<div class="accordion-section">
				<a class="accordion-section-title" href="#accordion-4"><span class="wpjb-glyphs wpjb-icon-right-open"></span>';	
				echo do_shortcode (get_post_meta($post->ID, 'sh_anchor4header', true)); echo '</a>';
	if ( get_post_meta($post->ID, 'sh_anchor4', true) )
	echo '<div id="accordion-4" class="accordion-section-content">'; 
	echo do_shortcode (get_post_meta($post->ID, 'sh_anchor4', true));
if ( get_post_meta($post->ID, 'sh_anchor4', true) ) echo ' </div></div>';	
	
	// ANCHOR 5 LI
    if ( get_post_meta($post->ID, 'sh_anchor5header', true) )  
	echo '<div class="accordion-section">
				<a class="accordion-section-title" href="#accordion-5"><span class="wpjb-glyphs wpjb-icon-right-open"></span>';	
				echo do_shortcode (get_post_meta($post->ID, 'sh_anchor5header', true)); echo '</a>';
	if ( get_post_meta($post->ID, 'sh_anchor5', true) )
	echo '<div id="accordion-5" class="accordion-section-content">'; 
	echo do_shortcode (get_post_meta($post->ID, 'sh_anchor5', true));
if ( get_post_meta($post->ID, 'sh_anchor5', true) ) echo ' </div></div>';	
	
	// ANCHOR 6 LI
    if ( get_post_meta($post->ID, 'sh_anchor6header', true) )  
	echo '<div class="accordion-section">
				<a class="accordion-section-title" href="#accordion-6"><span class="wpjb-glyphs wpjb-icon-right-open"></span>';	
				echo do_shortcode (get_post_meta($post->ID, 'sh_anchor6header', true)); echo '</a>';
	if ( get_post_meta($post->ID, 'sh_anchor6', true) )
	echo '<div id="accordion-6" class="accordion-section-content">'; 
	echo do_shortcode (get_post_meta($post->ID, 'sh_anchor6', true));
if ( get_post_meta($post->ID, 'sh_anchor6', true) ) echo ' </div></div>';	
	
	
	// ANCHOR 7 LI
    if ( get_post_meta($post->ID, 'sh_anchor7header', true) )  
	echo '<div class="accordion-section">
				<a class="accordion-section-title" href="#accordion-7"><span class="wpjb-glyphs wpjb-icon-right-open"></span>';	
				echo do_shortcode (get_post_meta($post->ID, 'sh_anchor7header', true)); echo '</a>';
	if ( get_post_meta($post->ID, 'sh_anchor7', true) )
	echo '<div id="accordion-7" class="accordion-section-content">'; 
	echo do_shortcode (get_post_meta($post->ID, 'sh_anchor7', true));
if ( get_post_meta($post->ID, 'sh_anchor7', true) ) echo ' </div></div>';	
		
	
	// ANCHOR 8 LI
    if ( get_post_meta($post->ID, 'sh_anchor8header', true) )  
	echo '<div class="accordion-section">
				<a class="accordion-section-title" href="#accordion-8"><span class="wpjb-glyphs wpjb-icon-right-open"></span>';	
				echo do_shortcode (get_post_meta($post->ID, 'sh_anchor8header', true)); echo '</a>';
	if ( get_post_meta($post->ID, 'sh_anchor8', true) )
	echo '<div id="accordion-8" class="accordion-section-content">'; 
	echo do_shortcode (get_post_meta($post->ID, 'sh_anchor8', true));
if ( get_post_meta($post->ID, 'sh_anchor8', true) ) echo ' </div></div>';	
	  
			
	
	// ANCHOR 9 LI
    if ( get_post_meta($post->ID, 'sh_anchor9header', true) )  
	echo '<div class="accordion-section">
				<a class="accordion-section-title" href="#accordion-9"><span class="wpjb-glyphs wpjb-icon-right-open"></span>';	
				echo do_shortcode (get_post_meta($post->ID, 'sh_anchor9header', true)); echo '</a>';
	if ( get_post_meta($post->ID, 'sh_anchor9', true) )
	echo '<div id="accordion-9" class="accordion-section-content">'; 
	echo do_shortcode (get_post_meta($post->ID, 'sh_anchor9', true));
if ( get_post_meta($post->ID, 'sh_anchor9', true) ) echo ' </div></div>';	
	  
		
	
	// ANCHOR 10 LI
    if ( get_post_meta($post->ID, 'sh_anchor10header', true) )  
	echo '<div class="accordion-section">
				<a class="accordion-section-title" href="#accordion-10"><span class="wpjb-glyphs wpjb-icon-right-open"></span>';	
				echo do_shortcode (get_post_meta($post->ID, 'sh_anchor10header', true)); echo '</a>';
	if ( get_post_meta($post->ID, 'sh_anchor10', true) )
	echo '<div id="accordion-10" class="accordion-section-content">'; 
	echo do_shortcode (get_post_meta($post->ID, 'sh_anchor10', true));
if ( get_post_meta($post->ID, 'sh_anchor10', true) ) echo ' </div></div>';	
	  
		
	
	// ANCHOR 11 LI
    if ( get_post_meta($post->ID, 'sh_anchor11header', true) )  
	echo '<div class="accordion-section">
				<a class="accordion-section-title" href="#accordion-11"><span class="wpjb-glyphs wpjb-icon-right-open"></span>';	
				echo do_shortcode (get_post_meta($post->ID, 'sh_anchor11header', true)); echo '</a>';
	if ( get_post_meta($post->ID, 'sh_anchor11', true) )
	echo '<div id="accordion-11" class="accordion-section-content">'; 
	echo do_shortcode (get_post_meta($post->ID, 'sh_anchor11', true));
if ( get_post_meta($post->ID, 'sh_anchor11', true) ) echo ' </div></div>';	
	  
		
	
	// ANCHOR 12 LI
    if ( get_post_meta($post->ID, 'sh_anchor12header', true) )  
	echo '<div class="accordion-section">
				<a class="accordion-section-title" href="#accordion-12"><span class="wpjb-glyphs wpjb-icon-right-open"></span>';	
				echo do_shortcode (get_post_meta($post->ID, 'sh_anchor12header', true)); echo '</a>';
	if ( get_post_meta($post->ID, 'sh_anchor12', true) )
	echo '<div id="accordion-12" class="accordion-section-content">'; 
	echo do_shortcode (get_post_meta($post->ID, 'sh_anchor12', true));
if ( get_post_meta($post->ID, 'sh_anchor12', true) ) echo ' </div></div>';	
	  
		
	
	// ANCHOR 13 LI
    if ( get_post_meta($post->ID, 'sh_anchor13header', true) )  
	echo '<div class="accordion-section">
				<a class="accordion-section-title" href="#accordion-13"><span class="wpjb-glyphs wpjb-icon-right-open"></span>';	
				echo do_shortcode (get_post_meta($post->ID, 'sh_anchor13header', true)); echo '</a>';
	if ( get_post_meta($post->ID, 'sh_anchor13', true) )
	echo '<div id="accordion-13" class="accordion-section-content">'; 
	echo do_shortcode (get_post_meta($post->ID, 'sh_anchor13', true));
if ( get_post_meta($post->ID, 'sh_anchor13', true) ) echo ' </div></div>';	
	  
		
	
	// ANCHOR 14 LI
    if ( get_post_meta($post->ID, 'sh_anchor14header', true) )  
	echo '<div class="accordion-section">
				<a class="accordion-section-title" href="#accordion-14"><span class="wpjb-glyphs wpjb-icon-right-open"></span>';	
				echo do_shortcode (get_post_meta($post->ID, 'sh_anchor14header', true)); echo '</a>';
	if ( get_post_meta($post->ID, 'sh_anchor14', true) )
	echo '<div id="accordion-14" class="accordion-section-content">'; 
	echo do_shortcode (get_post_meta($post->ID, 'sh_anchor14', true));
if ( get_post_meta($post->ID, 'sh_anchor14', true) ) echo ' </div></div>';	  
		
	
	// ANCHOR 15 LI
    if ( get_post_meta($post->ID, 'sh_anchor15header', true) )  
	echo '<div class="accordion-section">
				<a class="accordion-section-title" href="#accordion-15"><span class="wpjb-glyphs wpjb-icon-right-open"></span>';	
				echo do_shortcode (get_post_meta($post->ID, 'sh_anchor15header', true)); echo '</a>';
	if ( get_post_meta($post->ID, 'sh_anchor15', true) )
	echo '<div id="accordion-15" class="accordion-section-content">'; 
	echo do_shortcode (get_post_meta($post->ID, 'sh_anchor15', true));
if ( get_post_meta($post->ID, 'sh_anchor15', true) ) echo ' </div></div>';	
	  
		
	
	// ANCHOR 16 LI
    if ( get_post_meta($post->ID, 'sh_anchor16header', true) )  
	echo '<div class="accordion-section">
				<a class="accordion-section-title" href="#accordion-16"><span class="wpjb-glyphs wpjb-icon-right-open"></span>';	
				echo do_shortcode (get_post_meta($post->ID, 'sh_anchor16header', true)); echo '</a>';
	if ( get_post_meta($post->ID, 'sh_anchor16', true) )
	echo '<div id="accordion-16" class="accordion-section-content">'; 
	echo do_shortcode (get_post_meta($post->ID, 'sh_anchor16', true));
if ( get_post_meta($post->ID, 'sh_anchor16', true) ) echo ' </div></div>';
	
	  
		
	
	// ANCHOR 17 LI
    if ( get_post_meta($post->ID, 'sh_anchor17header', true) )  
	echo '<div class="accordion-section">
				<a class="accordion-section-title" href="#accordion-17"><span class="wpjb-glyphs wpjb-icon-right-open"></span>';	
				echo do_shortcode (get_post_meta($post->ID, 'sh_anchor17header', true)); echo '</a>';
	if ( get_post_meta($post->ID, 'sh_anchor17', true) )
	echo '<div id="accordion-17" class="accordion-section-content">'; 
	echo do_shortcode (get_post_meta($post->ID, 'sh_anchor17', true));
if ( get_post_meta($post->ID, 'sh_anchor17', true) ) echo ' </div></div>';	
	  	
	
	// ANCHOR 18 LI
    if ( get_post_meta($post->ID, 'sh_anchor18header', true) )  
	echo '<div class="accordion-section">
				<a class="accordion-section-title" href="#accordion-18"><span class="wpjb-glyphs wpjb-icon-right-open"></span>';	
				echo do_shortcode (get_post_meta($post->ID, 'sh_anchor18header', true)); echo '</a>';
	if ( get_post_meta($post->ID, 'sh_anchor18', true) )
	echo '<div id="accordion-18" class="accordion-section-content">'; 
	echo do_shortcode (get_post_meta($post->ID, 'sh_anchor18', true));
if ( get_post_meta($post->ID, 'sh_anchor18', true) ) echo ' </div></div>';	
	  
 	  	
	
	// ANCHOR 19 LI
    if ( get_post_meta($post->ID, 'sh_anchor19header', true) )  
	echo '<div class="accordion-section">
				<a class="accordion-section-title" href="#accordion-19"><span class="wpjb-glyphs wpjb-icon-right-open"></span>';	
				echo do_shortcode (get_post_meta($post->ID, 'sh_anchor19header', true)); echo '</a>';
	if ( get_post_meta($post->ID, 'sh_anchor19', true) )
	echo '<div id="accordion-19" class="accordion-section-content">'; 
	echo do_shortcode (get_post_meta($post->ID, 'sh_anchor19', true));
if ( get_post_meta($post->ID, 'sh_anchor19', true) ) echo ' </div></div>';	
	  
 	// ANCHOR 20 LI
    if ( get_post_meta($post->ID, 'sh_anchor20header', true) )  
	echo '<div class="accordion-section">
				<a class="accordion-section-title" href="#accordion-20"><span class="wpjb-glyphs wpjb-icon-right-open"></span>';	
				echo do_shortcode (get_post_meta($post->ID, 'sh_anchor20header', true)); echo '</a>';
	if ( get_post_meta($post->ID, 'sh_anchor20', true) )
	echo '<div id="accordion-20" class="accordion-section-content">'; 
	echo do_shortcode (get_post_meta($post->ID, 'sh_anchor20', true));
if ( get_post_meta($post->ID, 'sh_anchor20', true) ) echo ' </div></div>';	