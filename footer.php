 </div>
 </div>


 <footer>
    
<section class="section section-bg  clearfix get-in-touch dark-bg">
<div class="container">
<div class="row">
      <div class="col-md-6 pull-left">
          <h4 class="section-bg--title">Have any Questions?</h4>
          <p class="section-bg--text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus facilisis lobortis orci vel pharetra. Vivamus quis ligula tortor. Suspendisse quis vestibulum nunc. Aliquam</p>
          <a class="aig-btn section-bg--btn aig-btn__reversed"  href="#"  role="button">Get in touch</a>
      </div>
</div>
</div>
</section>


<section class="section clearfix dark-bg dark-grey-bg lower-footer">
<div class="container">
<div class="row">

  <div class="col-md-4 pull-left">
    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/images/aiwd-logo.svg" alt="Logo Footer" width="222">
    <p class="section--text">We place apprentices and trainees with host organisations across all states and territories. <br><br>We are a proud partner to more than 200 host organisations including some ​top Australia​n household names.</p>
  </div>

  <div class="col-md-8 pull-right">
    <ul class="footer-links">
      <li><a href="#">Home</a>&nbsp;&nbsp;  /</li>
      <li><a href="#">Apprentices</a>&nbsp;&nbsp;  /</li>
      <li><a href="#">Employers</a>&nbsp;&nbsp;  /</li>
      <li><a href="#">About Us</a></li>
    </ul>
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



<div id="search">
<button type="button" class="close-button"></button>


<form  action="<?php bloginfo('siteurl'); ?>" id="searchform" method="get">
<input type="search" value="" name="s" id="s" placeholder="type keyword(s) here" . $onfocus . $onblur .' />
 <input type="submit" class="btn btn-primary aig-btn aig-btn__reversed hero--btn"  id="searchsubmit" value="Search" />

</form>


<!--   <form action="<?php //bloginfo('siteurl'); ?>" id="searchform" method="get">
 <div class="searchcontainer">
 <input type="text" value="" name="s" id="s" placeholder="Search"'. $onfocus . $onblur .' />
 <input type="submit"  id="searchsubmit" value="Search" /></div>
</form> -->



</div>
<?php wp_footer(); ?>
</body>
</html>