<?php
/*
Template Name: PageTemplate
*/
?>

<style>
body {  background: red; word-wrap: break-word; }
</style>
<?php $options = get_option('mh_options'); ?>
<?php get_header(); ?>
<div class="wrapper clearfix">
	
	

<section class="content <?php mh_content_class(); ?>" >

<?php if (have_posts()) : while (have_posts()) : the_post();?>

		
<div><?php the_title(); ?></div>
<div> <?php the_content(); ?></div>
<?php endwhile; endif; ?>
		<?php if (category_description()) { ?>
			<section class="cat-desc">
				<?php echo category_description(); ?>
			</section>
		<?php } ?>
		
	</section>
<aside class="sidebar <?php mh_sb_class(); ?>">
    	<?php dynamic_sidebar('sidebar'); ?>     
	</aside>

</div>
<?php get_footer(); ?>