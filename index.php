<style>
body {  background: red; word-wrap: break-word; }
</style>
<?php $options = get_option('mh_options'); ?>
<?php get_header(); ?>
<div class="wrapper clearfix">
	
	<aside class="sidebar <?php mh_sb_class(); ?>">
    	<?php dynamic_sidebar('sidebar'); ?>     
	</aside>
<div style="font-size: 20px; Color:red; padding-left:600px; padding-bottom:30px;">Slide to view courses </div>
<section class="content <?php mh_content_class(); ?>" style="width:770px; margin-left:50px;">
<?php echo do_shortcode("[huge_it_slider id='2']"); ?>


		<?php mh_before_page_content(); ?>
		<?php if (category_description()) { ?>
			<section class="cat-desc">
				<?php echo category_description(); ?>
			</section>
		<?php } ?>
		

<div style="margin-left:50px;margin-top:60px;">
<div style="font-size:23px; color: red; ">Services we offer : </div>
<div style="margin-top:50px;" class="corporate-image">
<img src="http://www.nttftrg.com/wp-content/uploads/2014/12/corporate-training.jpg">

</div>
 <div style="margin-top:50px;" class="corporate-image">
<img src="http://www.resourcegroup.co.uk/media/1893/easa-online-training-2.jpg?center=0.63533834586466165,0.5&mode=crop&width=960&height=300&rnd=130614624660000000">

</div>
 <div style="margin-top:50px;" class="project-consultancy">
<img src="http://edeltaconsulting.com/wp-content/uploads/2012/05/project-management.jpg">

</div>
<div style="font-size:23px; color: red; margin-top: 80px; ">Our Past Clients</div>
 <div style="float:left;">
   <img src="http://knowledge.wharton.upenn.edu/wp-content/uploads/2013/09/Mindtree_450x240.png" style="width:25%; position: absolute;">
   <img style="width:30%; margin-left:340px; margin-top:-30px; position: absolute; padding-top:5px;" src="http://www.creativebrief.com/blog/wp-content/uploads/2014/10/sapientnitro_logo.jpg">
   
  </div>
   <div style="float:left;">
      <img style="width:30%; margin-left:-10px; margin-top:150px; position: absolute; padding-top:5px;" src="http://www.aeco-consulting.com/wp-content/uploads/2015/10/omnix-logo-320x140.png">
     <img style="width:30%; margin-left:360px; margin-top:200px; position: absolute; padding-top:5px;" src="http://www.mytectra.com/images/header/logo.gif">
   
  </div>


</div>

	</section>


</div>
<?php get_footer(); ?>