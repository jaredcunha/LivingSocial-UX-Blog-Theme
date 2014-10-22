	<footer class="site-footer">
		<div class="wrap">
			<div class="footer-cols">
				<div class="col">
					<h4><?php echo do_shortcode('[block id="1"]');?></h4>
					<?php echo do_shortcode('[block id="2"]');?>
				</div>
				<div class="col">
					<h4>Categories</h4>
					<ul>
						<?php wp_list_categories('title_li='); ?>
					</ul>
				</div>
				<div class="col col-sm">
					<h4><?php echo do_shortcode('[block id="3"]');?></h4>
					<?php echo do_shortcode('[block id="4"]');?>
				</div>
			</div>
			<p class="action-buttons">
				<a href="https://dribbble.com/LivingSocial" class="btn btn-transparent">
					View Our Work on Dribbble!
				</a>
			</p>
			<p class="site-info">&copy; <?php echo date("Y"); ?> <?php bloginfo( 'name' ); ?>. All rights reserved.</p>
		</div>
	</footer>
