<?php /* Default template for displaying content. */ ?>
<?php $options = get_option('mh_options'); ?>
<article <?php post_class(); ?>>

	<header class="post-header">			
		<div style="background: none repeat scroll 0 0 #e64946;
    color: #fff;
    display: inline-block;
    font-size: 28px;
    margin-left:150px;
margin-right:100px;
	margin-top:50px;
    margin-bottom: 50px;
padding: 0rem 0.625rem 0.1875rem;
    "><?php the_title(); ?></div>
		<?php mh_post_header(); ?>
		
	</header>
	<?php dynamic_sidebar('posts-1'); ?>
	<div class="entry clearfix">
		<?php mh_featured_image(); ?>
		<?php the_content(); ?>
	</div>
	<?php if (has_tag()) : ?>
		<div class="post-tags clearfix">
        	<?php the_tags('<ul><li>','</li><li>','</li></ul>'); ?>
        </div>
	<?php endif; ?>
	<?php dynamic_sidebar('posts-2'); ?>	
</article>