<?php
/*
Template Name: Search Page
*/
 

get_header();

 // FOOTER AWARDS MENU
	;?>	 
 <?php 
echo'<div id="aigwd-maincontentcontainer" class="row">';
             
             
  
  echo'<div class="apprenticescontainer">  
   <div id="newscolumn" class="internalcolumn col-xs-12 col-md-3"> ';
     	       // LEFT HAND REGISTER & SIGN IN LINKS
			   include(TEMPLATEPATH . '/page-furniture/registerlinks.php');
			   include(TEMPLATEPATH . '/page-furniture/findajob.php');
 
  echo'</div> ';
 
  
  echo'<div class="postCollapse apprentices alljobs">';
            // the_loop begin
           
			echo'<section>'; 
echo'<div class="postCollapse internal">
    <section ';post_class('post'); 
	echo'style="width:690px!important;display:inline-block;">';?>
<table><tr><th>DETAILS</th><th>ID</th><th>LISTED</th><th>LOCATION</th></tr>
<?php // the_loop begin
            if (have_posts()) : while (have_posts()) : the_post();
			
$locations = get_the_terms( $post->ID, 'location' );
$location = count($locations) ? $locations[0]->slug : '';
$search_location = isset($_GET['location']) ? $_GET['location'] : '';
if (empty($search_location) || $location == $search_location) {
   
	 echo'<tr  class="entry '; echo do_shortcode (get_post_meta($post->ID, 'sh_listing-location', true));    echo '"><td>';

				 echo '<h2 style="margin-bottom:0;">';the_title();echo'</h2>';
				 echo '<p style="text-align:left!important;">'; echo excerpt(30);echo'</p>';
				  echo '<div class="applybutton"><a href="';the_permalink();echo'">VIEW JOB</a></div>';
				 echo'</td>';
				 echo '<td>';echo do_shortcode (get_post_meta($post->ID, 'sh_job-id', true));echo'</td>';
				 echo '<td>';echo changeDateFormat($post->post_date,'Y-m-d H:i:s','d/m/Y'); echo'</td>';
				 echo '<td nowrap>';echo do_shortcode (get_post_meta($post->ID, 'sh_location', true)); echo'</td>';
         		 echo '</tr>';
 
 } // end if search location

   
   // anything after the loop?
            endwhile; 
			
			echo '</table>';
			// 404 handling
            else :
			echo' 
      <h3 class="title">No results found your search query</h3>
      <p>
      Please try searching again...
      </p>
   ';
            // the_loop end   ?>
		 
				

		<?php endif; ?>
             
        <div class="return"><a href="/all-jobs/">All Jobs</a></div>
      </div>
     

  </div><!-- .entry-content -->
			</article><!-- #post-0 -->
           
           
            <?php	echo' </section>';
   echo'
</div>
</div>';
     
  

 get_footer(); ?>
