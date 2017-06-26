<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 
 */   

get_header();
echo'<div id="aigwd-maincontentcontainer" class="row">';
 
 // the_loop begin
            if (have_posts()) : while (have_posts()) : the_post();
			echo'<div class="postCollapse internal" style="width:690px!important;margin-left:0px!important;">
    <section ';post_class('post'); 
	echo'style="width:690px!important;">
      <div class="entry" > ';
	  echo '<h1>';
	  the_title();
	  echo'</h1>';
 the_content();
 $the_post = get_post($post_ID);
$dateline = $the_post->post_date;
echo '<p class="published">Published - '.date('d/m/y',strtotime($dateline));
//the_date();
echo '</p>';
echo'<div class="return"><a href="/resources/publications/">Return to Publications</a></div>
      </div>
    </section>';
   
   // anything after the loop?
            endwhile; 
			// 404 handling
            else :
			echo'<section>
      <h3 class="title">No results found your search query</h3>
      <p>
      Please try searching again...
      </p>
    </section>';
            // the_loop end            
            endif; 
			echo'</div>
  <div id="rightcolumn">
    <div id="newscolumn" class="homecolumn">';
	include(TEMPLATEPATH . '/page-furniture/publicationsarchive.php');
	include(TEMPLATEPATH . '/page-furniture/makeanenquiry.php');
	echo'</div>
  </div>
</div>
</div>';
get_footer(); ?>
