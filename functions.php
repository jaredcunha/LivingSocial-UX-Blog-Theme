<?php
	/**
	 * Starkers functions and definitions
	 *
	 * For more information on hooks, actions, and filters, see http://codex.wordpress.org/Plugin_API.
	 *
 	 * @package 	WordPress
 	 * @subpackage 	Starkers
 	 * @since 		Starkers 4.0
	 */

	/* ========================================================================================================================
	
	Required external files
	
	======================================================================================================================== */

	require_once( 'external/starkers-utilities.php' );

	/* ========================================================================================================================
	
	Theme specific settings

	Uncomment register_nav_menus to enable a single menu with the title of "Primary Navigation" in your theme
	
	======================================================================================================================== */

	add_theme_support('post-thumbnails');
	
	// register_nav_menus(array('primary' => 'Primary Navigation'));

	/* ========================================================================================================================
	
	Actions and Filters
	
	======================================================================================================================== */

	add_action( 'wp_enqueue_scripts', 'starkers_script_enqueuer' );

	add_filter( 'body_class', array( 'Starkers_Utilities', 'add_slug_to_body_class' ) );

	/* ========================================================================================================================
	
	Custom Post Types - include custom post types and taxonimies here e.g.

	e.g. require_once( 'custom-post-types/your-custom-post-type.php' );
	
	======================================================================================================================== */



	/* ========================================================================================================================
	
	Scripts
	
	======================================================================================================================== */

	/**
	 * Add scripts via wp_head()
	 *
	 * @return void
	 * @author Keir Whitaker
	 */

	function starkers_script_enqueuer() {
		wp_register_script( 'site', get_template_directory_uri().'/js/site.js', array( 'jquery' ) );
		wp_enqueue_script( 'site' );

		wp_register_style( 'screen', get_stylesheet_directory_uri().'/style.css', '', '', 'screen' );
        wp_enqueue_style( 'screen' );
	}

	/* ========================================================================================================================
	
	AUTHOR CONTACTS
	
	======================================================================================================================== */
	function author_spotlight_contactmethods( $contactmethods ) {
		if ( !isset( $contactmethods['jobtitle'] ) )
	        $contactmethods['jobtitle'] = 'Job Title';
	    if ( !isset( $contactmethods['dribbble'] ) )
	        $contactmethods['dribbble'] = 'Dribbble';
	    if ( !isset( $contactmethods['flickr'] ) )
	        $contactmethods['flickr'] = 'Flickr';    
	    if ( !isset( $contactmethods['tumblr'] ) )
	        $contactmethods['tumblr'] = 'Tumblr';   
	    if ( !isset( $contactmethods['instagram'] ) )
	        $contactmethods['instagram'] = 'Instagram';             
	    return $contactmethods;
	}

	add_filter('user_contactmethods','author_spotlight_contactmethods');	

	/* ========================================================================================================================
	
	CUSTOM CATEGORIES
	
	======================================================================================================================== */
	function the_category_valid() {
 	  $categories = get_the_category();
	  $separator = ', ';
	  $output = '';
	  if($categories){
	  	  echo '<ul class="post-categories">';
		  foreach($categories as $category) {
			  $output .= '<li><a href="'.get_category_link($category->term_id ).'" title="' . esc_attr( sprintf( __( "View all posts in %s" ), $category->name ) ) . '" class="btn">'.$category->cat_name.'</a></li>';
		  }
		  echo trim($output, $separator);
		  echo '</ul>';
	  }
	}

	/* ========================================================================================================================
	
	Upload Media
	
	======================================================================================================================== */


	if ( current_user_can('contributor') && !current_user_can('upload_files') )
	    add_action('admin_init', 'allow_contributor_uploads');
	function allow_contributor_uploads() {
	    $contributor = get_role('contributor');
	    $contributor->add_cap('upload_files');
	}

	/* ========================================================================================================================
	
	Comments
	
	======================================================================================================================== */

	/**
	 * Custom callback for outputting comments 
	 *
	 * @return void
	 * @author Keir Whitaker
	 */
	function starkers_comment( $comment, $args, $depth ) {
		$GLOBALS['comment'] = $comment; 
		?>
		<?php if ( $comment->comment_approved == '1' ): ?>	
		<li>
			<article id="comment-<?php comment_ID() ?>">
				<?php echo get_avatar( $comment ); ?>
				<h4><?php comment_author_link() ?></h4>
				<time><a href="#comment-<?php comment_ID() ?>" pubdate><?php comment_date() ?> at <?php comment_time() ?></a></time>
				<?php comment_text() ?>
			</article>
		<?php endif;
	}