<?php
/**
 * The template for displaying Author Archive pages
 *
 * Please see /external/starkers-utilities.php for info on Starkers_Utilities::get_template_parts()
 *
 * @package 	WordPress
 * @subpackage 	Starkers
 * @since 		Starkers 4.0
 */
?>
<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/html-header', 'parts/shared/header' ) ); ?>



<?php if ( have_posts() ): the_post(); ?>

<div class="author-profile">
	<div class="wrap">
		<div class="author-profile-content">
			<div class="main">
				<?php
					global $wp_query;
					$curauth = $wp_query->get_queried_object();
					$post_count = $wpdb->get_var("SELECT COUNT(*) FROM $wpdb->posts WHERE post_author = '" . $curauth->ID . "' AND post_type = 'post' AND post_status = 'publish'");
				?>
				<h1 class="author-title"> 
					<span class="flag"><?php echo $post_count; ?> posts from</span> 
					<?php echo get_the_author() ; ?> 
					<?php global $user_ID; if ( get_the_author_meta('jobtitle',$user_ID) ) :?>
				  		<span class="job-title"><?php the_author_meta('jobtitle',$user_ID); ?></span>
					<?php endif; ?>
				</h1>
				<?php if ( get_the_author_meta( 'description' ) ) : ?>

				<p class="description">
					<?php the_author_meta( 'description' ); ?>
				</p>

				<ul class="social-links">
					<?php global $user_ID; if ( get_the_author_meta('user_url',$user_ID) ) :?>
				  	<li><a class="ls-i ls-i-link link" href="<?php the_author_meta('user_url'); ?>">website</a></li>
					<?php endif; ?>

					<?php global $user_ID; if ( get_the_author_meta('twitter',$user_ID) ) :?>
				  	<li><a class="ls-i ls-i-twitter twitter" href="<?php the_author_meta('twitter'); ?>">twitter</a></li>
					<?php endif; ?>

					<?php global $user_ID; if ( get_the_author_meta('facebook',$user_ID) ) :?>
					<li><a class="ls-i ls-i-facebook facebook" href="<?php the_author_meta('facebook'); ?>">facebook</a></li>
					<?php endif; ?>

					<?php global $user_ID; if ( get_the_author_meta('googleplus',$user_ID) ) :?>
					<li><a class="ls-i ls-i-googleplus googleplus" href="<?php the_author_meta('googleplus'); ?>">google+</a></li>
					<?php endif; ?>

					<?php global $user_ID; if ( get_the_author_meta('dribbble',$user_ID) ) :?>
					<li><a class="ls-i ls-i-dribbble dribbble" href="<?php the_author_meta('dribbble'); ?>">dribbble</a></li>
					<?php endif; ?>

					<?php global $user_ID; if ( get_the_author_meta('instagram',$user_ID) ) :?>
					<li><a class="ls-i ls-i-instagram instagram" href="<?php the_author_meta('instagram'); ?>">instagram</a></li>
					<?php endif; ?>
				</ul>
			</div>
			<div class="secondary">
				<?php echo get_avatar( get_the_author_meta( 'user_email' ) ); ?>
			</div>
		</div>
	</div>
</div>

<?php endif; ?>

<div class="main-content">
	<div class="wrap">

<ol class="blogs-list">
		<?php rewind_posts(); while ( have_posts() ) : the_post(); ?>
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

<?php else: ?>
<h2>No posts to display for <?php echo get_the_author() ; ?></h2>	
<?php endif; ?>

	</div>
</div>

<?php Starkers_Utilities::get_template_parts( array( 'parts/shared/footer','parts/shared/html-footer' ) ); ?>