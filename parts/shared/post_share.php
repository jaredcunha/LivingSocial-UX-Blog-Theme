<h6>share</h6>
<ul class="social-links">
	<li>
		<a href="http://twitter.com/intent/tweet?text=<?php the_title(); ?><?php global $user_ID; if ( get_the_author_meta('twitter',$user_ID) ) :?> by @<?php the_author_meta('twitter',$user_ID); ?><?php endif; ?>: <?php the_permalink(); ?>" title="Post to Twitter" class="ls-i ls-i-twitter ls-i-replace twitter">twitter</a>
	</li>
	<li>
		<a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank"  class="ls-i ls-i-facebook ls-i-replace facebook">facebook</a>
	</li>
	<li>
		<a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" class="ls-i ls-i-googleplus ls-i-replace googleplus">google plus</a>
	</li>
</ul>
