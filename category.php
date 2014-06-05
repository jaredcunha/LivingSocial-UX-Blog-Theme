<?php
/**
 * The template for displaying Category Archive pages
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<?php if ( have_posts() ): ?>
<div class="context-header-block">
	<div class="wrap">
		<h1 class="ls-i ls-i-menu context-header-head"><span>Showing posts in </span> <?php echo single_cat_title( '', false ); ?></h1>
		<ul class="top-cats">
			<?php wp_list_categories('number=6&orderby=count&order=DESC&title_li=') ?>
		</ul>
	</div>
</div>

<div class="main-content">
	<div class="wrap">
		<ol class="blogs-list">
		<?php while ( have_posts() ) : the_post(); ?>
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
		<?php endwhile; ?>
		</ol>
	</div>
</div>


<?php else: ?>
<h2>No posts to display in <?php echo single_cat_title( '', false ); ?></h2>
<?php endif; ?>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>