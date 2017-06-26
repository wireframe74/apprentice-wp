<?php
class ThemeSidebar {

	public function __construct() {
		add_action( 'admin_init', array($this, 'sidebarMetaBox'));
		//add_action( 'admin_init', array($this, 'sidebarMetaBox2'));
		//add_action( 'admin_init', array($this, 'sidebarMetaBox3'));
		add_action( 'save_post', array($this, 'saveSidebar'));
	}
	
	public function sidebarMetaBox() {
		add_meta_box("sidebar-meta", "Sidebar", array($this, 'sidebarMetaOptions'), "post", "side", "low");
		add_meta_box("sidebar-meta", "Sidebar", array($this, 'sidebarMetaOptions'), "testimonials", "side", "low");
		add_meta_box("sidebar-meta", "Sidebar", array($this, 'sidebarMetaOptions'), "apprentices", "side", "low");
        add_meta_box("sidebar-meta", "Sidebar", array($this, 'sidebarMetaOptions'), "aboutus", "side", "low");
        add_meta_box("sidebar-meta", "Sidebar", array($this, 'sidebarMetaOptions'), "employers", "side", "low");
		add_meta_box("sidebar-meta", "Sidebar", array($this, 'sidebarMetaOptions'), "page", "side", "low");
	}

	
	
	public function sidebarMetaOptions() {
		global $post;
		if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) return $post_id;
		$custom = get_post_custom($post->ID);
		$sidebar = $custom["sidebar"][0];
?>
    	<label>Sidebar:</label>
    	<select name="sidebar">
    		 
    	 
            <option value="Apprentices 1"<?php if($sidebar == 'Apprentices 1'): echo ' selected="selected"'; endif;?>>Apprentices 1</option>
            <option value="Apprentices 2"<?php if($sidebar == 'Apprentices 2'): echo ' selected="selected"'; endif;?>>Apprentices 2</option>
            <option value="Apprentices 3"<?php if($sidebar == 'Apprentices 3'): echo ' selected="selected"'; endif;?>>Apprentices 3</option>
            <option value="Apprentices 4"<?php if($sidebar == 'Apprentices 4'): echo ' selected="selected"'; endif;?>>Apprentices 4</option>
            <option value="Employers 1"<?php if($sidebar == 'Employers 1'): echo ' selected="selected"'; endif;?>>Employers 1</option>
            <option value="Employers 2"<?php if($sidebar == 'Employers 2'): echo ' selected="selected"'; endif;?>>Employers 2</option>
            <option value="Employers 3"<?php if($sidebar == 'Employers 3'): echo ' selected="selected"'; endif;?>>Employers 3</option>
            <option value="Employers 4"<?php if($sidebar == 'Employers 4'): echo ' selected="selected"'; endif;?>>Employers 4</option>
            <option value="About 1"<?php if($sidebar == 'About 1'): echo ' selected="selected"'; endif;?>>About 1</option>
            <option value="About 2"<?php if($sidebar == 'About 2'): echo ' selected="selected"'; endif;?>>About 2</option>
            <option value="About 3"<?php if($sidebar == 'About 3'): echo ' selected="selected"'; endif;?>>About 3</option>
            <option value="About 4"<?php if($sidebar == 'About 4'): echo ' selected="selected"'; endif;?>>About 4</option>
            </select>
    <?php
	}
	
	public function saveSidebar(){
		global $post;

		if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ){
			return $post_id;
		}else{
			update_post_meta($post->ID, 'sidebar', $_POST["sidebar"]);
		}
	}



}

$sidebar = new ThemeSidebar();