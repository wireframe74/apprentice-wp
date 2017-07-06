<h2>State Management</h2>

<div id="st-accordion" class="st-accordion">

		<ul>
				<li>
				<a href="#">New South Wales &amp; ACT<span class="st-arrow">Open or Close</span></a>
				<div class="st-content">
				<?php query_posts( array( 'post_type' => 'statecontactinfo',
				'taxonomy'  => 'statemgmt-category','term' => 'new-south-wales-act','posts_per_page' => -1,'orderby' => 'menu_order','order' => 'ASC'));  while (have_posts()) : the_post();   
				?>

				<div class="stateoffice">
				<h4><?php  the_title(); ?></h4>
				<p class="officecontent"><?php the_content(); ?></p>
				</div>


				<?php  endwhile;  wp_reset_query();  ?>


				</div>
				</li>






				<li>
				<a href="#">Albury / Wodonga<span class="st-arrow">Open or Close</span></a>
				<div class="st-content">
				<?php  query_posts( array( 'post_type' => 'statecontactinfo',
			 'taxonomy'  => 'statemgmt-category','term' => 'albury-wodonga','posts_per_page' => -1,'orderby' => 'menu_order','order' => 'ASC'));  while (have_posts()) : the_post();    
				?>

				<div class="stateoffice">
				<h4><?php  the_title(); ?></h4>
				<p class="officecontent"><?php the_content(); ?></p>
				</div>


				<?php  endwhile;  wp_reset_query();  ?>


				</div>
				</li>




				<li>
				<a href="#">Northern Territory<span class="st-arrow">Open or Close</span></a>
				<div class="st-content">
				<?php  query_posts( array( 'post_type' => 'statecontactinfo',
			 'taxonomy'  => 'statemgmt-category','term' => 'northern-territory','posts_per_page' => -1,'orderby' => 'menu_order','order' => 'ASC'));  while (have_posts()) : the_post();   
     
				?>

				<div class="stateoffice">
				<h4><?php  the_title(); ?></h4>
				<p class="officecontent"><?php the_content(); ?></p>
				</div>


				<?php  endwhile;  wp_reset_query();  ?>


				</div>
				</li>




				<li>
				<a href="#">Queensland<span class="st-arrow">Open or Close</span></a>
				<div class="st-content">
				<?php   query_posts( array( 'post_type' => 'statecontactinfo',
			 'taxonomy'  => 'statemgmt-category','term' => 'queensland','posts_per_page' => -1,'orderby' => 'menu_order','order' => 'ASC'));  while (have_posts()) : the_post();   
     
				?>

				<div class="stateoffice">
				<h4><?php  the_title(); ?></h4>
				<p class="officecontent"><?php the_content(); ?></p>
				</div>


				<?php  endwhile;  wp_reset_query();  ?>


				</div>
				</li>





					<li>
				<a href="#">South Australia<span class="st-arrow">Open or Close</span></a>
				<div class="st-content">
				<?php   query_posts( array( 'post_type' => 'statecontactinfo',
			 'taxonomy'  => 'statemgmt-category','term' => 'south-australia','posts_per_page' => -1,'orderby' => 'menu_order','order' => 'ASC'));  while (have_posts()) : the_post();   
     
				?>

				<div class="stateoffice">
				<h4><?php  the_title(); ?></h4>
				<p class="officecontent"><?php the_content(); ?></p>
				</div>


				<?php  endwhile;  wp_reset_query();  ?>


				</div>
				</li>




				<li>
				<a href="#">Tasmania<span class="st-arrow">Open or Close</span></a>
				<div class="st-content">
				<?php    query_posts( array( 'post_type' => 'statecontactinfo',
			 'taxonomy'  => 'statemgmt-category','term' => 'tasmania','posts_per_page' => -1,'orderby' => 'menu_order','order' => 'ASC'));  while (have_posts()) : the_post();   
    
     
				?>

				<div class="stateoffice">
				<h4><?php  the_title(); ?></h4>
				<p class="officecontent"><?php the_content(); ?></p>
				</div>


				<?php  endwhile;  wp_reset_query();  ?>


				</div>
				</li>




				<li>
				<a href="#">Victoria<span class="st-arrow">Open or Close</span></a>
				<div class="st-content">
				<?php query_posts( array( 'post_type' => 'statecontactinfo',
			 'taxonomy'  => 'statemgmt-category','term' => 'victoria','posts_per_page' => -1,'orderby' => 'menu_order','order' => 'ASC'));  while (have_posts()) : the_post();   
    
     
				?>

				<div class="stateoffice">
				<h4><?php  the_title(); ?></h4>
				<p class="officecontent"><?php the_content(); ?></p>
				</div>


				<?php  endwhile;  wp_reset_query();  ?>


				</div>
				</li>





				<li>
				<a href="#">Bendigo<span class="st-arrow">Open or Close</span></a>
				<div class="st-content">
				<?php query_posts( array( 'post_type' => 'statecontactinfo',
			 'taxonomy'  => 'statemgmt-category','term' => 'bendigo','posts_per_page' => -1,'orderby' => 'menu_order','order' => 'ASC'));  while (have_posts()) : the_post();   
    
     
				?>

				<div class="stateoffice">
				<h4><?php  the_title(); ?></h4>
				<p class="officecontent"><?php the_content(); ?></p>
				</div>


				<?php  endwhile;  wp_reset_query();  ?>


				</div>
				</li>





				<li>
				<a href="#">Western Australia<span class="st-arrow">Open or Close</span></a>
				<div class="st-content">
				<?php  query_posts( array( 'post_type' => 'statecontactinfo',
			 'taxonomy'  => 'statemgmt-category','term' => 'western-australia','posts_per_page' => -1,'orderby' => 'menu_order','order' => 'ASC'));  while (have_posts()) : the_post();
				?>

				<div class="stateoffice">
				<h4><?php  the_title(); ?></h4>
				<p class="officecontent"><?php the_content(); ?></p>
				</div>


				<?php  endwhile;  wp_reset_query();  ?>


				</div>
				</li>



				<li>
				<a href="#">National Payroll<span class="st-arrow">Open or Close</span></a>
				<div class="st-content">
				<?php   query_posts( array( 'post_type' => 'statecontactinfo',
			 'taxonomy'  => 'statemgmt-category','term' => 'national-payroll','posts_per_page' => -1,'orderby' => 'menu_order','order' => 'ASC'));  while (have_posts()) : the_post();   
				?>

				<div class="stateoffice">
				<h4><?php  the_title(); ?></h4>
				<p class="officecontent"><?php the_content(); ?></p>
				</div>


				<?php  endwhile;  wp_reset_query();  ?>


				</div>
				</li>



					<li>
				<a href="#">WHS Management Team<span class="st-arrow">Open or Close</span></a>
				<div class="st-content">
				<?php   query_posts( array( 'post_type' => 'statecontactinfo',
			 'taxonomy'  => 'statemgmt-category','term' => 'whs-management-team','posts_per_page' => -1,'orderby' => 'menu_order','order' => 'ASC'));  while (have_posts()) : the_post();   
				?>

				<div class="stateoffice">
				<h4><?php  the_title(); ?></h4>
				<p class="officecontent"><?php the_content(); ?></p>
				</div>


				<?php  endwhile;  wp_reset_query();  ?>


				</div>
				</li>








</ul>
</div>


	
