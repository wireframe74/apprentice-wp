<div id="tabsmenu">
<ul class="info-tabs">
<li class="cost"><a href="#cost">Cost</a></li>
<li class="employerobligations"><a href="#employerobligations">Employer Obligations</a></li>
<li class="financialincentives"><a href="#financialincentives">Financial Incentives</a></li>
</ul>
</div>


 
<?php echo '<div id="cost" style="padding:10px;">'; 
	if ( get_post_meta($post->ID, 'sh_anchor1', true) )  
	echo do_shortcode (get_post_meta($post->ID, 'sh_anchor1', true));
 echo'</div>';?>
 

<?php echo '<div id="employerobligations"  style="display:none; padding:15px 10px 10px 10px;">';
	if ( get_post_meta($post->ID, 'sh_anchor2', true) )  
	echo do_shortcode (get_post_meta($post->ID, 'sh_anchor2', true));
echo'</div>';?>
 
 

<?php echo '<div id="financialincentives"  style="display:none; padding:15px 10px 10px 10px;">';
		if ( get_post_meta($post->ID, 'sh_anchor3', true) )  
		echo do_shortcode (get_post_meta($post->ID, 'sh_anchor3', true));echo'</div>';?>
 
 