<div class="socialite">
	<ul class="social-buttons cf">
		<li><a href="http://twitter.com/share" class="socialite twitter-share" data-text="<?php echo $post->title; ?>" data-url="<?php echo $post->permalink; ?>" data-count="vertical" data-via="<?php echo urlencode( Options::get( 'socialite__twittername' )); ?>" rel="nofollow" target="_blank"><span class="vhidden">Share on Twitter</span></a></li>
		<li><a href="https://plus.google.com/share?url=<?php echo $post->permalink; ?>" class="socialite googleplus-one" data-size="tall" data-href="<?php echo $post->permalink; ?>" rel="nofollow" target="_blank"><span class="vhidden">Share on Google+</span></a></li>
		<li><a href="http://www.facebook.com/sharer.php?u=http://www.socialitejs.com&amp;t=Socialite.js" class="socialite facebook-like" data-href="<?php echo $post->permalink; ?>" data-send="false" data-layout="box_count" data-width="60" data-show-faces="false" rel="nofollow" target="_blank"><span class="vhidden">Share on Facebook</span></a></li>
		<li><a href="http://www.linkedin.com/shareArticle?mini=true&amp;url=<?php echo $post->permalink; ?>&amp;title=Socialite.js" class="socialite linkedin-share" data-url="<?php echo $post->permalink; ?>" data-counter="top" rel="nofollow" target="_blank"><span class="vhidden">Share on LinkedIn</span></a></li>
	</ul>
</div>