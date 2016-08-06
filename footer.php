<?php $options = get_option('mh_options'); ?>
<?php if (is_active_sidebar('footer-1') || is_active_sidebar('footer-2') || is_active_sidebar('footer-3') || is_active_sidebar('footer-4')) { ?>
<footer class="row clearfix">
	<?php if (is_active_sidebar('footer-1')) { ?>
	<div class="col-1-4 mq-footer">
		<?php dynamic_sidebar('footer-1'); ?>
	</div>
	<?php } ?>
	<?php if (is_active_sidebar('footer-2')) { ?>
	<div class="col-1-4 mq-footer">
		<?php dynamic_sidebar('footer-2'); ?>
	</div>
	<?php } ?>
	<?php if (is_active_sidebar('footer-3')) { ?>
	<div class="col-1-4 mq-footer">
		<?php dynamic_sidebar('footer-3'); ?>
	</div>
	<?php } ?>
	<?php if (is_active_sidebar('footer-4')) { ?>
	<div class="col-1-4 mq-footer">
		<?php dynamic_sidebar('footer-4'); ?>
	</div>
	<?php } ?>
</footer>
<?php } ?>
</div>
<div class="copyright-wrap">
	<p class="copyright">&nbsp; &nbsp; &nbsp;<div style="display:none"><?php echo 'Copyright &copy; ' . date("Y") . ' | 365onlinetraining.com'; ?></div> Copyright © 2016 | 365onlinetraining.com      </p>
</div>
<?php if ($options['tracking_code']) { ?>
<?php echo $options['tracking_code']; ?>
<?php } ?>
<?php wp_footer(); ?>

</body>  
</html>