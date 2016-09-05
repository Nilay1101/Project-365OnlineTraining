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
		<h2>Contact Us</h2>
		<hr style="border : 0;height: 1px; width:50%;background-image: linear-gradient(to right, rgba(255,255,255,255), rgba(255,255,255,255), rgba(255,255,255,255));">
	
<div class="row">
	<div class="col-lg-8 col-md-offset-2">
		<form action="#" name="MYFORM" id="MYFORM">
			<input name="name" size="30" type="text" id="name" class="col-lg-6 leftradius" placeholder="Your Name">
			<input name="email" size="30" type="text" id="email" class="col-lg-6 rightradius" placeholder="E-mail Address">
			<br>
			<textarea id="message" name="message" class="col-lg-12 allradius" placeholder="Message" rows="7"></textarea>
			<br>
			<img src="contact/refresh.jpg" alt="" id="refresh" style="width:45px;"/><img src="contact/get_captcha.php" alt="" id="captcha" style="height:45px;"/>
			<br>
			<input name="code" type="text" id="code" placeholder="Enter Captcha" class="top20">
			<br>
			<input value="Send Message" type="submit" id="Send" class="btn btn-default btn-lg">
			
			
		</form>
	</div>
</div><br><br>
</div>
</section>

<footer id="foot-sec" class="fullbg" style="z-index:0;margin-top:-150px" >
<div class="container " style="box-shadow:none">
<div class="row">
<br><br>
	<div class="text-center color-white col-lg-11">
		<ul class="social-icons">
			<li><a href="#"><i class="fa fa-facebook"></i></a></li>
			<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
		</ul>
		<p>
			 email | contact
		</p>
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
</body>