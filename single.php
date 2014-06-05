<?php
/**
 * The Template for displaying all single posts
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>

<?php
if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
	the_post_thumbnail('full', array('class' => 'post-featured-image'));
}
?>

<div class="main-content">
	<div class="wrap">
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

		<article class="blog-post-full">
			
			<div class="post-main">
				<div class="pub-info with-avatar">
					<?php echo get_avatar( get_the_author_meta( 'ID' ), 83 ); ?>
					<p class="pub-date"><time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_time( 'F j, Y' ); ?></time></p>
					<p class="byline">by <?php the_author_link(); ?></p>
				</div>

				<h1 class="post-title"><?php the_title(); ?></h1>
				<div class="post-content">
					<?php the_content(); ?>
				</div>

				<div class="comments">
					<?php comments_template( '', true ); ?>
				</div>
				
			</div>			

			<footer class="post-supplement">
				<div class="supplement supplement-minor share">
					<?php include 'parts/shared/post_share.php';?>
				</div>
				<div class="supplement supplement-minor categories">
					<h6>category</h6>
					<?php the_category_valid(); ?>
				</div>
			</footer>

		</article>

		

		<?php endwhile; ?>
	</div>
</div>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>