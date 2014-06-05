<?php
/**
 * Search results page
 * 
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<div class="context-header-block">
	<div class="wrap">
		<h1 class="ls-i ls-i-menu context-header-head"><span>Search results for </span> <?php echo get_search_query(); ?></h1>
		<ul class="top-cats">
			<?php wp_list_categories('number=6&orderby=count&order=DESC&title_li=') ?>
		</ul>
	</div>
</div>


<?php if ( have_posts() ): ?>
<div class="main-content">
	<div class="wrap">
		<?php while ( have_posts() ) : the_post(); ?>
		<ol class="blogs-list">
			<li class="blog-post-item">
				<article class="blog-post-full">
					<div class="post-main">
						<h2 class="post-title"><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
						
						<div class="post-content">
							<?php the_content('read full post →'); ?>
						</div>
					</div>
					<footer class="post-supplement">
						<div class="supplement supplement-major pub-info">
							<h5 class="pub-date"><time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_time( 'F j, Y' ); ?></time></h5>
							<p class="byline">by <?php the_author_posts_link(); ?></p>
						</div>
						<div class="supplement supplement-minor share">
							<?php include 'parts/shared/post_share.php';?>
						</div>
						<div class="supplement supplement-minor categories">
							<h6>category</h6>
							<?php the_category_valid(); ?>
						</div>
					</footer> 
				</article>
			</li>
		</ol>
		<?php endwhile; ?>
	</div>
</div>

<?php else: ?>
<div class="main-content">
	<div class="wrap">
		<h2>No results found for '<?php echo get_search_query(); ?>'</h2>
	</div>
</div>
<?php endif; ?>



<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>