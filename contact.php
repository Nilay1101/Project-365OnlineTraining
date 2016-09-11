<!DOCTYPE html>
<html class="no-js<?php mh_html_class(); ?>" <?php language_attributes(); ?>>
<head>

<meta charset="<?php bloginfo('charset'); ?>">
<title><?php wp_title('|', true, 'right'); ?></title>
<?php wp_head(); ?>

<link href="<?php bloginfo('template_directory'); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php bloginfo('template_directory'); ?>/assets/css/font-awesome.min.css" rel="stylesheet">
<link href="<?php bloginfo('template_directory'); ?>/assets/css/style.css" rel="stylesheet">
<link href="<?php bloginfo('template_directory'); ?>/assets/css/animate.css" rel="stylesheet">
<link href="<?php bloginfo('template_directory'); ?>/assets/css/skin-blue.css" rel="stylesheet">
</head>

<style>
.floating-label-form-group {
  position: relative;
  margin-bottom: 0;
  padding-bottom: 0.5em;
  border-bottom: 1px solid #eeeeee;
}
.floating-label-form-group input,
.floating-label-form-group textarea {
  z-index: 1;
  position: relative;
  padding-right: 0;
  padding-left: 0;
  border: none;
  border-radius: 0;
  font-size: 1.5em;
  background: none;
  box-shadow: none !important;
  resize: none;
  color:white;
}
.floating-label-form-group label {
  display: block;
  z-index: 0;
  position: relative;
  top: 2em;
  margin: 0;
  font-size: 0.85em;
  line-height: 1.764705882em;
  vertical-align: middle;
  vertical-align: baseline;
  opacity: 0;
  -webkit-transition: top 0.3s ease,opacity 0.3s ease;
  -moz-transition: top 0.3s ease,opacity 0.3s ease;
  -ms-transition: top 0.3s ease,opacity 0.3s ease;
  transition: top 0.3s ease,opacity 0.3s ease;
}
.floating-label-form-group:not(:first-child) {
  padding-left: 14px;
  border-left: 1px solid #eeeeee;
}
.floating-label-form-group-with-value label {
  top: 0;
  opacity: 1;
}
.floating-label-form-group-with-focus label {
  color: #18BC9C;
}
form .row:first-child .floating-label-form-group {
  border-top: 1px solid #eeeeee;
}

</style>

<body>
<br><br><br>
<?php
/*
Template Name: Contact
*/
?>
<?php $options = get_option('mh_options'); ?>
<?php get_header(); ?>


<section id="Section-6" class="fullbg" style="z-index:0;">
<div class="container" style="box-shadow:none">
	<div class="page-header text-center col-sm-12 col-lg-12 color-white ">
		<h2 style="color:white;font-family: 'PT Sans', sans-serif;">Contact Us</h2>
		<hr style="border : 0;height: 1px; width:50%;background-image: linear-gradient(to right, rgba(255,255,255,255), rgba(255,255,255,255), rgba(255,255,255,255));">
<p class="lead animated fadeInLeftBig" style="color:white; font-family: 'Raleway', sans-serif;">
Mail Us : <a href="mailto:contact@365onlinetraining.com">contact@365onlinetraining.com </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; or &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Call : +91 7795-472-579
</p>

<p class="lead animated fadeInLeftBig" style="color:white; font-family: 'Raleway', sans-serif;">
Or<br><br>Fill out the form and we will call you back
</p>

<div class="col-lg-8 col-lg-offset-2 animated fadeInUpNow">
                    <form action="<?php bloginfo('template_directory'); ?>/contact_me.php" method="post" name="sentMessage" id="contactForm" novalidate>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Name</label>
                                <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Email Address</label>
                                <input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Phone Number</label>
                                <input type="tel" class="form-control" placeholder="Phone Number" id="phone" required data-validation-required-message="Please enter your phone number.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Message</label>
                                <textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter your message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-lg-11 col-lg-offset-2">
                                <button type="submit" class="btn btn-success btn-lg">Send</button>
                            </div>
                        </div>
                    </form>
                </div>

</div><br><br><br><br><br><br><br><br><br><br>
</div>
</section>

<footer id="foot-sec" class="fullbg" style="z-index:0;margin-top:-45px" >
<div class="container " style="box-shadow:none">
<div class="row">
<br><br>
	<div class="text-center color-white col-lg-11">
		<ul class="social-icons">
			<li><a href="https://www.linkedin.com/in/tusharwebcentersitestrainer"><i class="fa fa-linkedin"></i></a></li>
		</ul>
	</div>
</div>
</div>
</footer>

<div style="background:black" class="footer">
           <div class="row footer-about-company-row">
			<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                </div>
                <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                    <div class="footer-about-company">
                        <div class="region-footer">
                            <div class="content">
                                <h5 style="font-family: 'Raleway', sans-serif;">Copyright 2016 365 Online. All Right Reserved &nbsp;&nbsp;&nbsp;<a href="#top"><img style="height:25px; widht:25px" src="<?php bloginfo('template_directory'); ?>/images-new/up-arrow.png"></a></h5></div>
                        </div>
                    </div>
                </div>
			<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                </div>
            </div>
        </div>

<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.min.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/bootstrap.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.parallax-1.1.3.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.localscroll-1.2.7-min.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.scrollTo-1.4.6-min.js" type="text/javascript"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.bxslider.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jquery.placeholder.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/modernizr.custom.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/toucheffects.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/animations.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/init.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/jqBootstrapValidation.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/assets/js/contact_me.js"></script>
</body>