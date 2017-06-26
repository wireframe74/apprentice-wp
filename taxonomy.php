<?php
/**
 * The template for displaying Archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each specific one. For example, Twenty Twelve already
 * has tag.php for Tag archives, category.php for Category archives, and
 * author.php for Author archives.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header();
echo'<div id="aigwd-maincontentcontainer" class="row">';
 
 query_posts( array( 'post_type' => 'publications','posts_per_page' => -1,'orderby' => 'date_order','order' => 'ASC'));     
 // the_loop begin
            if (have_posts()) : while (have_posts()) : the_post();
			echo'<div class="postCollapse internal">
    <section ';post_class('post'); 
	echo'style="width:690px!important;display:inline-block;">
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
