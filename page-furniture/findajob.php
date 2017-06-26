<?php
 
function get_classification_locations() {
	/*$data = get_transient('classification_locations');
	if ($data) {
		return $data;
	}*/
	global $wpdb;
	
	// get the classifications and locations that have matching jobs in them
	$query = "SELECT t1.slug cls_slug, t1.name cls_name,t2.slug loc_slug,t2.name loc_name FROM $wpdb->terms t1,$wpdb->term_taxonomy tt1,$wpdb->term_relationships r1,$wpdb->term_taxonomy tt2,$wpdb->term_relationships r2,$wpdb->terms t2 WHERE tt1.term_id=t1.term_id AND tt1.taxonomy='classification' AND tt1.term_taxonomy_id=r1.term_taxonomy_id AND r1.object_id=r2.object_id AND tt2.term_taxonomy_id=r2.term_taxonomy_id AND tt2.taxonomy='location' AND tt2.term_id=t2.term_id GROUP BY t1.slug,t2.slug";
	
	$classification_locations = $wpdb->get_results($query, OBJECT);
	$cls_loc = array();
	
	foreach ($classification_locations as $classification_location) {
		$cls_slug = $classification_location->cls_slug;
		$cls_name = $classification_location->cls_name;
		$loc_slug = $classification_location->loc_slug;
		$loc_name = $classification_location->loc_name;
		if (!isset($cls_loc[$cls_slug])) {
			$cls_loc[$cls_slug] = array('name' => addslashes($cls_name), 'locations' => array());
		}
		$cls_loc[$cls_slug]['locations'][] = "{'name':'".addslashes($loc_name)."','slug':'".$loc_slug."'}";
	}
	
	$json = '{';
	foreach ($cls_loc as $cls_slug => $cls_loc_json) {
		$json .= "'".$cls_slug."':{'name':'".$cls_loc_json['name']."','locations':[".implode(',',$cls_loc_json['locations'])."]},";
	}
	$json .= '}';
	//set_transient('classification_locations', $json, 3600 * 24);
	return $json;
}
?>
<script type="text/javascript">
jQuery(document).ready(function($) {
	var cls_loc_json = <?php echo get_classification_locations()?>;
	var $top_sel = $('#select-classification'), $loc_sel = $('#select-location').empty().attr('disabled',true).change(function() {
		if (this.value == '') return;
		location.href = '/classification/'+$top_sel.val()+'/?location='+this.value+'#aig-jobs';
	});
	$top_sel.change(function() {
		var val = this.value;
		$loc_sel.html('<option class="option-location value="">LOCATION</option>');
		if (val == '') {
			$loc_sel.attr('disabled',true);
			return;
		}
		$loc_sel.attr('disabled',false);
		if (typeof cls_loc_json[val] == 'undefined') {
			$loc_sel.html('<option class="option-specialist" value="">LOCATIONS NOT AVAILABLE</option>');
			$loc_sel.attr('disabled',true);
			return;
		}
		$loc_sel.html('<option value="">SELECT A LOCATION</option>');
		for (var loc,i=0; i<cls_loc_json[val].locations.length; i++) {
			loc = cls_loc_json[val].locations[i];
			$loc_sel.append('<option class="option-specialist" value="'+loc.slug+'">'+loc.name+'</option>');
		}
	});
	$top_sel.change();
	
	// get the practice areas from the main menu
	for (var slug in cls_loc_json) {
		$top_sel.append('<option class="option-classification" value="'+slug+'">'+cls_loc_json[slug].name+'</option>');
	};
});
</script>
<div id="findaspecialist">
  <h2>Find a Job</h2>
  <div class="wpcf7" id="wpcf7-f75-o1" lang="en-US" dir="ltr">
        <input type="text" id="find-specialist-by-name" name="your-job" value="" placeholder="KEYWORD OR JOB REFERENCE" size="40" aria-required="true" aria-invalid="false" />
      
        
        <div class="selectbox">
        <select id="select-classification" name="menu-574">
          <option value="">CLASSIFICATION</option>
        </select>
        </div>
       
        
        <div class="selectbox">
        <select id="select-location" name="menu-575">
        </select>
        </div>
  </div>
</div>
