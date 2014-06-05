<h6>share</h6>
<ul class="social-links">
	<li>
		<a href="http://twitter.com/intent/tweet?text=<?php the_title(); ?><?php global $user_ID; if ( get_the_author_meta('twitter',$user_ID) ) :?> by @<?php the_author_meta('twitter',$user_ID); ?><?php endif; ?>: <?php $permalink = the_permalink(); ?>" title="Post to Twitter" class="ls-i ls-i-twitter ls-i-replace twitter">twitter</a>
	</li>
	<li>
		<a href="javascript:fbShare('<?php $permalink = the_permalink(); ?>', 'Fb Share', 'Facebook share popup', 'http://goo.gl/dS52U', 520, 350)"  class="ls-i ls-i-facebook ls-i-replace facebook">facebook</a>
	</li>
	<li>
		<a href="" class="ls-i ls-i-googleplus ls-i-replace googleplus">google plus</a>
	</li>
</ul>