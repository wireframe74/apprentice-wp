 </div>
 </div>

<!-- <section class="section__orange-bg section tcenter">

  <h2 data-wow-delay=".2s" class="wow fadeInUp"><span class="large-num">98%</span><br>Why Not Do something?</h2>
  <p data-wow-delay=".7s" class="wow fadeInUp">AI Group Recruitment Services - Building Tomorrow's Workforce</p>
  <a  data-wow-delay="1.2s" class="tcenter aig-btn aig-btn__reversed  form-button wow fadeInUp" href="" role="button">Register Today</a>
</section> -->

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
          <h4 class="section-bg--title animated fadeInUp" >Have any Questions?</h4>
          <p class="section-bg--text wow fadeInUp second">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus facilisis lobortis orci vel pharetra. Vivamus quis ligula tortor. Suspendisse quis vestibulum nunc. Aliquam</p>
          <a class="aig-btn section-bg--btn aig-btn__reversed wow fadeInUp third"  href="#contact-form"  role="button">Speak to a Consultant</a>



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
 <input type="submit" data-wow-delay="0.1s" class="btn btn-primary aig-btn aig-btn__reversed hero--btn"  id="searchsubmit" value="Search" />

</form>

</div>


<div id="contact-form" class="form-bg-full-width">
<button type="button" class="close-button"></button>
<div class="container">
  <?php gravity_form( 1, $display_title = false,  $display_inactive = false, $field_values = null, $ajax = true, $tabindex, $echo = true ); ?>
</div>
</div>


<?php wp_footer(); ?>






<div id="c-mask" class="c-mask"></div><!-- /c-mask -->



</body>
</html>