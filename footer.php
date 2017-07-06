 </div>
 </div>

<!-- <section class="section__orange-bg section tcenter">

  <h2 data-wow-delay=".2s" class="wow fadeInUp"><span class="large-num">98%</span><br>Why Not Do something?</h2>
  <p data-wow-delay=".7s" class="wow fadeInUp">AI Group Recruitment Services - Building Tomorrow's Workforce</p>
  <a  data-wow-delay="1.2s" class="tcenter aig-btn aig-btn__reversed  form-button wow fadeInUp" href="" role="button">Register Today</a>
</section> -->

<?php if ( is_singular( 'aboutus' ) )  :?>

<div class="clearfix"></div>

<section class="quicklinks section section-reversed section-reversed__purple">
<div class="container">
<div class="row">

<div class="col-xs-12">
    <h2 class="nomnargin__top bottommargin wow fadeInUp tcenter">Our Methodology</h2>
</div>





<div class="clearfix">

        <div class="col-xs-6 col-sm-4  wow fadeInUp" data-wow-delay=".2s">
        <div class="icon-widget icon-widget__sm">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icons/quick_link_1_white.svg" alt="Looking for an Apprentice?">  
        <h4>Selection Process</h4>
        <p>We thoroughly assess motivations, aptitude and discipline.</p>
        
        </div>
        </div>


        <div class="col-xs-6 col-sm-4  wow fadeInUp" data-wow-delay=".5s">
        <div class="icon-widget icon-widget__sm">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icons/quick_link_2_white.svg" alt="The Apprentice Tool Kit">  
        <h4>Data Matching</h4>
        <p>We match an apprentice’s capabilities and career goals both to your business and to your industry sector.</p>
    
        </div>
        </div>


        <div class="col-xs-6 col-sm-4  wow fadeInUp" data-wow-delay=".8s">
        <div class="icon-widget icon-widget__sm">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/icons/quick_link_3_white.svg" alt="Looking to upskill your workforce?">  
        <h4>High Quaility Training</h4>
        <p>We survey each candidate’s teachers in detail wherever possible to understand how motivated and disciplined they are and how well they work with their peers.</p>
      
        </div>
        </div>


      
        </div>
        </div>

</div><!-- section -->


</div>

</div>

</section>

<?php endif; ?>


<footer id="sticky-footer" class="dark">
<div id="copyrights">
<div class="container-fluid clearfix">


<div class="row">
<div class="col-sm-12">

<div class="sticky-footer--row">

<a href="#"  class="sticky-footer--icon standard-logo pull-left">
<img src="<?php  bloginfo('template_directory'); ?>/images/icons/email.svg" width="40"  alt="Logo">
</a> 

<h3 class="sticky-footer--text">Job Feed Subscription<!-- <span>Subscribe &amp; receive daily job updates. </span> --></h3> 


<div class="owl-next" style="display: none"><i class="icon-angle-right"></i></div>

<form class="form-inline">
  <div class="form-group">
    <input type="text" class="form-control" id="exampleInputName2" placeholder="First Name">
  </div>
  <div class="form-group">

    <input type="email" class="form-control" id="exampleInputEmail2" placeholder="jane.doe@example.com">
  </div>
  <button type="submit" class="btn btn-default">Subscribe Today</button>
</form>


<!-- <a href="#" class="sticky-footer--close-btn"><i class="fa fa-times" aria-hidden="true"></i></a>
 -->

</div>  


</div>
</div>
</div>




</div>
</div>
</footer>






 <footer>
    
<section class="parallax section section-bg clearfix get-in-touch dark-bg">
<div class="container">
<div class="row">
      <div class="col-md-6 pull-left">
          <h4 class="section-bg--title wow fadeInUp" >Make an Enquiry</h4>
          <p class="section-bg--text wow fadeInUp" data-wow-delay=".2s">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus facilisis lobortis orci vel pharetra. Vivamus quis ligula tortor. Suspendisse quis vestibulum nunc. Aliquam</p>
          <a class="aig-btn section-bg--btn aig-btn__reversed wow fadeInUp"  data-wow-delay=".6s" href="#contact-form"  role="button">Speak to a Consultant</a>



      </div>
</div>
</div>
</section>


<section class="section clearfix dark-bg dark-grey-bg lower-footer">
<div class="container">
<div class="row">

  <div class="col-md-4 pull-left">
    <img data-wow-delay="0.1s"  class="wow fadeInUp" src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/aiwd-logo.svg" alt="Logo Footer" width="222">
    <p data-wow-delay="0.6s"  class="wow fadeInUp" class="section--text">We place apprentices and trainees with host organisations across all states and territories. <br><br>We are a proud partner to more than 200 host organisations including some ​top Australia​n household names.</p>
  </div>

  <div class="col-md-8 pull-right wow fadeInUp" data-wow-delay="0.6s">



<?php wp_nav_menu(array(
'menu'           => 'Sitemap',
'menu_class' => 'footer-links',
"walker" => new MyExtendedMenuWalker(),
"ex_separator" => "<li class='separator'>&nbsp;&nbsp;/&nbsp;&nbsp;</li>"));
 ?>


<!-- 
    <ul class="footer-links">
      <li><a href="#">Home</a>&nbsp;&nbsp;  /</li>
      <li><a href="#">Apprentices</a>&nbsp;&nbsp;  /</li>
      <li><a href="#">Employers</a>&nbsp;&nbsp;  /</li>
      <li><a href="#">About Us</a></li>
    </ul>
 -->
    
  </div>

</div><!-- row -->
</div><!-- container -->
</section>

<div class="copyrights">
<div class="container">
<div class="row">
    <div class="col-sm-12">
    <p>Copyright 2017 The Australian Industry Group&nbsp;&nbsp;<a href=" Terms of Usage">Terms of Usage</a>&nbsp;&nbsp;<a href="#"> Privacy Statement</a>&nbsp;&nbsp;<a href="#">Help</a></p>
    </div>
</div>
</div>
</footer>






<div id="search" class="form-bg-full-width">

    <button type="button" class="close-button"></button>


      <form  action="<?php bloginfo('siteurl'); ?>" id="searchform" method="get">
      <input  data-wow-delay="0.5s" type="search" value="" name="s" id="s" placeholder="type keyword(s) here" . $onfocus . $onblur .' />
      <input type="submit" data-wow-delay="2s" class="btn btn-primary aig-btn aig-btn__reversed hero--btn"  id="searchsubmit" value="Search" />
      </form>


</div>


<div id="contact-form" class="form-bg-full-width form-wrapper">
<button type="button" class="close-button"></button>
<div class="container">

    <h2>Online Enquiry</h2>
  <?php gravity_form( 1, $display_title = false,  $display_inactive = false, $field_values = null, $ajax = true, $tabindex, $echo = true ); ?>
</div>
</div>


<?php wp_footer(); ?>






<div id="c-mask" class="c-mask"></div><!-- /c-mask -->



</body>
</html>