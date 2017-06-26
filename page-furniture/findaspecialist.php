<?php
/* attempt at caching - the 4 lines below need to be in the functions file if this caching is to be implemented and the other get and set transients below need to be enabled
add_action('save_post', 'clear_practice_area_locations_cache');
function clear_practice_area_locations_cache() {
	delete_transient('practice_area_locations');
}*/
function get_practice_area_locations() {
	/*$data = get_transient('practice_area_locations');
	if ($data) {
		return $data;
	}*/
	global $wpdb;
	// match the post_names to the taxonomy slugs
	$query = "SELECT t2.slug,p.post_name FROM $wpdb->posts p, $wpdb->term_relationships r, $wpdb->terms t, $wpdb->term_taxonomy x LEFT JOIN $wpdb->terms t2 ON x.`term_id`=t2.`term_id` WHERE t.slug='practice-area' AND x.parent=t.`term_id` AND x.`term_taxonomy_id`=r.`term_taxonomy_id` AND r.`object_id`=p.ID AND p.post_type='practicearea'";
	$parea_slug_post_names = $wpdb->get_results($query, OBJECT_K);
		
	// this query finds people and their locations and their practice areas - this is to build the hierarchy of practice areas and locations
	$query = "SELECT p.`ID` p_id,t.`term_id`,t.`name`,t.`slug`,x.`taxonomy` FROM $wpdb->posts p, $wpdb->term_relationships r, $wpdb->terms t, $wpdb->term_taxonomy x LEFT JOIN $wpdb->terms t2 ON x.parent=t2.term_id AND t2.slug='practice-area' WHERE p.`post_type`='people' AND p.`ID`=r.`object_id` AND r.`term_taxonomy_id`=x.`term_taxonomy_id` AND x.`term_id`=t.`term_id` AND (x.`taxonomy`='location' OR t2.`slug`='practice-area') ORDER BY p_id,x.`taxonomy`";
	$practice_area_locations_result = $wpdb->get_results($query, OBJECT);
	
	// expertise categories are listed first
	// pid	tid	term_name		slug			taxonomy
	// 481	33	Discrimination	discrimination	expertise-category
	// 481	34	Employment		employment		expertise-category
	// 482	33	Discrimination	discrimination	expertise-category
	// 482	34	Employment		employment		expertise-category
	// 481	48	Melbourne		melbourne		location
	// 482	48	Sydney			sydney			location
	
	$people = array();
	$practice_area_locations = array();
	
	foreach ($practice_area_locations_result as $rs) {
		if (!isset($people[$rs->p_id])) {
			$people[$rs->p_id] = array();
		}
		if ($rs->taxonomy == 'expertise-category') {
			$post_name = $parea_slug_post_names[$rs->slug]->post_name;
			if (!isset($practice_area_locations[$post_name])) {
				$practice_area_locations[$post_name] = array();
			}
			$people[$rs->p_id][] = $post_name;
		} else { // taxonomy is location
			// this persons practice areas need this location added
			foreach ($people[$rs->p_id] as $practice_area_slug) {
				$loc_slug = $rs->slug;
				if (!isset($practice_area_locations[$practice_area_slug][$loc_slug])) {
					$practice_area_locations[$practice_area_slug][$loc_slug] = "{'name':'".$rs->name."','slug':'".$loc_slug."'}";
				}
			}
		}
	}
	$json = '{';
	foreach ($practice_area_locations as $pa_slug => $locations_json) {
		$json .= "'".$pa_slug."':[".implode(',',$locations_json)."],";
	}
	$json .= '}';
	//set_transient('practice_area_locations', $json, 3600 * 24);
	return $json;
}
?>
<script type="text/javascript">
jQuery(document).ready(function() {
	var practice_area_locations = <?php echo get_practice_area_locations()?>;
	var $ = jQuery,$parea_sel = $('#select-p-area'), $loc_sel = $('#select-location').empty().attr('disabled',true).change(function() {
		if (this.value == '') return;
		location.href = $parea_sel.val()+'?location='+this.value+'#keypeople';
	});
	$parea_sel.change(function() {
		var p_area,val = this.value;
		$loc_sel.html('<option class="option-specialist" value="">LOCATION</option>');
		if (val == '') {
			$loc_sel.attr('disabled',true);
			return;
		}
		val = val.split('/');
		do {
			p_area =val.pop();
		} while (p_area == '');
		$loc_sel.attr('disabled',false);
		if (typeof practice_area_locations[p_area] == 'undefined') {
			$loc_sel.html('<option class="option-specialist" value="">LOCATION NOT AVAILABLE</option>');
			$loc_sel.attr('disabled',true);
			return;
		}
		$loc_sel.html('<option value="">SELECT A LOCATION</option>');
		for (var loc,i=0; i<practice_area_locations[p_area].length; i++) {
			loc = practice_area_locations[p_area][i];
			$loc_sel.append('<option class="option-specialist" value="'+loc.slug+'">'+loc.name+'</option>');
		}
	});
	$parea_sel.change();
	
	// get the practice areas from the main menu
	$('ul#menu-practice-areas a').each(function() {
		$parea_sel.append('<option class="option-specialist" value="'+this.href+'">'+$(this).text()+'</option>');
	});
});
</script>
<div id="findaspecialist">
  <h2>FIND A SPECIALIST</h2>
  <div class="wpcf7" id="wpcf7-f75-o1" lang="en-US" dir="ltr">
        <input type="text" id="find-specialist-by-name" name="your-name" value="" placeholder="NAME" size="40" aria-required="true" aria-invalid="false" />
      
        
        <div class="selectbox">
        <select id="select-p-area" name="menu-574">
          <option value="">PRACTICE AREA</option>
        </select>
        </div>
       
        
        <div class="selectbox">
        <select id="select-location" name="menu-575">
        </select>
        </div>
  </div>
</div>
