<?php
/*
Template Name: Training Courses
*/
?>

<style>
body {  background: red; word-wrap: break-word; }
</style>
<?php $options = get_option('mh_options'); ?>
<?php get_header(); ?>
<div class="wrapper clearfix">
	
	<aside class="sidebar <?php mh_sb_class(); ?>">
    	<?php dynamic_sidebar('sidebar'); ?>     
	</aside>


<section class="content <?php mh_content_class(); ?>" style="width:770px; height:1050px; margin-left:50px;">
<div style="color:red; margin-top:30px; margin-left:200px; font-size:20px;">Click on the course to view content</div>
<?php if (category_description()) { ?>
			<section class="cat-desc">
				<?php echo category_description(); ?>
			</section>
		<?php } ?>

		<ul>
<?php


$args = array( 'posts_per_page' => 5, 'offset'=> 0, 'category' => 1 );
$MyLeft = 110;
$MyRight = 100;
$MagnitudeRight = 300;
$MagnitudeLeft = 350;
$i = 0;
$myposts = get_posts( $args );
foreach ( $myposts as $post ) : setup_postdata( $post ); ?>


	<li  style="position:absolute; margin-left:<?php echo "$MyLeft";  ?>;background-color:red; height:300px; width:270px; margin-top:<?php echo "$MyRight"; ?>;" >



		<div style="position:absolute;margin-left:30px;margin-right:30px;margin-top:30px; Font-size:30px; color:red;"><a style="color:white;" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
	</li>
<?php
$i++;
if($i % 2 == 1 )
{ 
	$MyLeft = $MyLeft + $MagnitudeLeft;
}
else 
{
$MyLeft = $MyLeft - $MagnitudeLeft;
$MyRight = $MyRight + $MagnitudeRight;
} ?>
<?php endforeach; 
wp_reset_postdata();?>

</ul>
		
		
	</section>

</div>
<?php get_footer(); ?>