<!DOCTYPE html>
<html class="no-js<?php mh_html_class(); ?> <?php language_attributes(); ?>
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
Template Name: About
*/
?>
<?php $options = get_option('mh_options'); ?>
<?php get_header(); ?>
<section id="Section-1" class="fullbg" style="z-index:0;">
<div class="container" style="box-shadow:none">
<div class="row">
	<div class="page-header text-center col-sm-12 col-lg-12 color-white">
		<h1>About Us</h1>
		<hr style="border : 0;height: 1px; width:50%;background-image: linear-gradient(to right, rgba(255,255,255,255), rgba(255,255,255,255), rgba(255,255,255,255));">
<br><br><br>
		<p class="lead">
			some lines....<br>some lines....<br>some lines....
		</p>
	</div>
</div>
<br><br>
<div class="row color-white">
	<div class="col-md-12">
		<div class="boxservice bottomb">
			<i class="fa fa-building-o"></i>
			<h3>Service 1</h3>
			<p>
				service description
			</p>
		</div>
		<div class="boxservice bottomb">
			<i class="fa fa-laptop"></i>
			<h3>Service 2</h3>
			<p>
				service description
			</p>
		</div>
		<div class="boxservice rightb bottomb">
			<i class="fa fa-gift"></i>
			<h3>Service 3</h3>
			<p>
				service description 
			</p>
		</div>
	</div>
</div>

</div>
</section>

<section id="Section-4" class="fullbg color-white" style="z-index:0;">
<div class="container" style="box-shadow:none">
<div class="row">
	<div class="page-header text-center col-sm-12 col-lg-12 animated fade">
		<h1>Reviews</h1>
 <hr style="border : 0;height: 1px; width:50%;background-image: linear-gradient(to right, rgba(255,255,255,255), rgba(255,255,255,255), rgba(255,255,255,255));">
	</div>
</div>
<br><br>
<div class="row testimonials">
	<div class="col-sm-12 col-lg-12">
		<div class="arrow">
		</div>
		<div class="testimonials-slider">
			<div class="slide">
				<div class="testimonials-carousel-thumbnail">
					<img width="120" alt="" src="<?php bloginfo('template_directory'); ?>/assets/img/avatar.jpg">
				</div>
				<div class="testimonials-carousel-context">
					<div class="testimonials-name">
						 Bill Robinson <span>google.com</span>
					</div>
					<div class="testimonials-carousel-content">
						<p>
							some lines....<br>some lines....<br>some lines....
						</p>
					</div>
				</div>
			</div>
			
			<div class="slide">
				<div class="testimonials-carousel-thumbnail">
					<img width="120" alt="" src="<?php bloginfo('template_directory'); ?>/assets/img/avatar.jpg">
				</div>
				<div class="testimonials-carousel-context">
					<div class="testimonials-name">
						 Andrew Bilson <span>wowthemes.net</span>
					</div>
					<div class="testimonials-carousel-content">
						<p>
							some lines....<br>some lines....<br>some lines....
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
</section>
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
