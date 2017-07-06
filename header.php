<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
  */
?>
<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
 <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
<?php wp_head(); ?>



<script src="<?php bloginfo('template_directory' ); ?>/js/jquery.fitvids.js"></script>
<script>
  jQuery(document).ready(function(){
    // Target your .container, .wrapper, .post, etc.
    jQuery("#aigwd-video").fitVids();
  });
</script>
<!--<script src="/wp-content/plugins/image-slider-responsive/js/jquery.flexslider-min.js" type="text/javascript"></script>-->
<script type="text/javascript">

  jQuery(document).ready(function($) {
    $(".scroll").click(function(event) {
    event.preventDefault();
	var w = $('body').innerWidth();
	var extra_offset = w < 800 ? 0 : 0;
    $('html,body').animate( { scrollTop:$(this.hash).offset().top - extra_offset } , 1000);
    } );
  } );
</script>



<!-- <script src="<?php // bloginfo('template_directory' ); ?>/js/dw_glidescroll.js" type="text/javascript"></script> -->




<script type="text/javascript">

// if ( DYN_WEB.Scroll_Div.isSupported() ) {

//     DYN_WEB.Event.add( window, 'load', function() {
// 		// arguments: id of scroll area div, id of content div
// 		var wndo = new DYN_WEB.Scroll_Div('wn', 'lyr1');
		
// 		// args: id, axis ('v' or 'h')
// 		// distance per click, duration of glide
// 		wndo.addGlideControls('scrollLinks', 'h', 1140, 500);
// 	});
// }

</script>

 
<!-- <link rel="stylesheet" type="text/css" href="<?php  // bloginfo('template_directory' ); ?>/menu.css"> -->
 
<!-- <link rel="stylesheet" type="text/css" href="<?php // bloginfo('template_directory' ); ?>/css/accordian.css"> -->

<!-- <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800' rel='stylesheet' type='text/css'> -->
<!-- <script type="text/javascript" src="<?php// bloginfo('template_directory' ); ?>/js/jquery.placeholder.min.js"></script> -->
<!-- <script type="text/javascript" src="<?php // bloginfo('template_directory' ); ?>/js/fixed.js"></script> -->

 
<!--[if gte IE 8]>
<style>
form input {
	padding:3px;
}
#newsletter-signup-left form input,
#newsletter-signup-right form input {width:100px;height:21px;float:left;}
#newsletter-signup-left form input, #newsletter-signup-left form button[type="submit"],
#newsletter-signup-right form input, #newsletter-signup-right form button[type="submit"]  {font-size:11px!important;}
#makeanenquiry form input, #findaspecialist form input, input#find-specialist-by-name, #select-p-area, #select-location {
    height: 21px;
}
 </style>
<![endif]-->


<style>.wow { visibility: hidden; }</style>







    
</head><body <?php body_class();?>>



<div id="preloader"></div>
<!-- OVERALL CONTAINER TAG --><div id="full">

<section  class="responsive-menu">
<div class="menu-button">×</div>

<nav id="main-nav" role="navigation">
 <?php wp_nav_menu( array(
'theme_location' => 'primary_menu',
'depth'             => 2,
'container'         => false,
// 'container_class'   => 'collapse navbar-collapse navbar-ex1-collapse nav navbar-nav navbar-right',
'menu_class'        => 'sm sm-blue',
'menu_id'        => '',
// 'walker'         => new WPSE_78121_Sublevel_Walker
)
);
?>
 </nav>
</section>

<section id="form-contact" class="offcanvas-form">
<div class="close-btn">×</div>
<div class="row">
  <div class="col-xs-12">
      <?php gravity_form( 1, $display_title = false,  $display_inactive = false, $field_values = null, $ajax = true, $tabindex, $echo = true );
  ?>
  </div>
</div>
</section>


<header class="aig-header sticky-aig-header clearfix" id="aig-header" role="banner">

    <div class="container menu-global">

        <div class="aig-logo-wrapper">
        <a class="aig-logo aig-logo--white" href="<?php bloginfo('url' ); ?>">AIGTS</a>
        </div>

        <div class="menu-button"><i class="fa fa-bars"></i></div>











        <div class="header-buttons" id="header-buttons">
          <ul class="nav navbar-nav">
          <li><a href="<?php bloginfo('url'); ?>/all-jobs/">Current Vacancies</a></li>
          <li><a href="<?php bloginfo('url'); ?>/apply">Sign In</a></li>
          <li><a href="<?php bloginfo('url'); ?>/policies/">Policies</a></li>
          <li><a href="<?php bloginfo('url'); ?>/contact/">Contact</a></li>
          <li class="header-icon header-icon__facebook"><a target="_blank" href="https://www.facebook.com/AiGroupATC/"></a></li>
          <li class="header-icon header-icon__search"><a class="full-form" href="#search"></a></li>
          </ul>
        </div><!-- header-buttons -->
    </div><!-- menu-global container -->

  <!-- NEGATIVE MARGINS  MAIN NAV -->


  <nav class="main-menu" id="main-menu" role="navigation">



<?php 
wp_nav_menu( array(

'theme_location' => 'primary_menu',
'depth'             => 2,
'container'         => false,
// 'container_class'   => 'collapse navbar-collapse navbar-ex1-collapse nav navbar-nav navbar-right',
'menu_class'        => 'main-menu-list container',
'walker'         => new WPSE_78121_Sublevel_Walker
)
);
?>




      <?php //wp_nav_menu(array(
  		// 'theme_location' => 'primary_menu',
  		// 'menu_class' => 'main-menu-list container', // menu slug from step 1
  		// 'container' => false, // 'div' container will not be added
  		// 'menu_class' => 'nav', // <ul class="nav"> 
  		// // 'fallback_cb' => 'default_header_nav', // name of default function from step 2

    //    'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
    //    'walker'            => new wp_bootstrap_navwalker())
  	//)); ?>
  </nav>



           
    <?php 
     // wp_nav_menu( array(
    
     //    'theme_location' => 'primary_menu',
     //   'depth'             => 2,
     //   'container'         => 'div',
     //   'container_class'   => 'collapse navbar-collapse navbar-ex1-collapse nav navbar-nav navbar-right',
     //   'menu_class'        => 'nav navbar-nav',
     //   'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
     //   'walker'            => new wp_bootstrap_navwalker())
     // );
 ?>


</header>




<!-- PUSH DOWN CONTENT DIV -->
<div id="pagecontent">


<?php include(TEMPLATEPATH . '/page-furniture/page-header.php');  ?>


<?php if(!is_front_page()): ?>

  <section id="breadcrumb">
  <div class="container">
  <div class="row">

    <div class="breadcrumbs fleft col-xs-12" typeof="BreadcrumbList" vocab="http://schema.org/">
    <?php if(function_exists('bcn_display'))
    {
    bcn_display();
    }?>
    </div>

  </div>
  </div>
  </section>

<?php endif; ?>

<div id="maincontentwrapper" class="content <?php if(!is_front_page()) :?>container<?php endif; ?>">
