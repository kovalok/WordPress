

<div id="social-icons">
	
	<?php if (get_theme_mod( 'wpstrapfolio_facebook_url' )) : ?>
	<a href="<?php echo esc_url(get_theme_mod( 'wpstrapfolio_facebook_url' )) ;?>" target="_blank"><p class="facebook-icon social-icons"></p></a>
	<?php endif ; ?>
			
	<?php if (get_theme_mod( 'wpstrapfolio_gplus_url' )) : ?>
	<a href="<?php echo esc_url(get_theme_mod( 'wpstrapfolio_gplus_url' )) ;?>" target="_blank"><p class="gplus-icon social-icons"></p></a>
	<?php endif ; ?>
 			
 	<?php if (get_theme_mod( 'wpstrapfolio_twitter_url' )) : ?>
	<a href="<?php echo esc_url(get_theme_mod( 'wpstrapfolio_twitter_url' )) ;?>" target="_blank"><p class="twitter-icon social-icons"></p></a>
	<?php endif ; ?>
 	
    <?php if (get_theme_mod( 'wpstrapfolio_pinterest_url' )) : ?>	
 	<a href="<?php echo esc_url(get_theme_mod( 'wpstrapfolio_pinterest_url' )) ;?>" target="_blank"><p class="pinterest-icon social-icons"></p></a>
	<?php endif ; ?>
	
	<?php if (get_theme_mod( 'wpstrapfolio_linkedin_url' )) : ?>
	<a href="<?php echo esc_url(get_theme_mod( 'wpstrapfolio_linkedin_url' )) ;?>" target="_blank"><p class="linkedin-icon social-icons"></p></a>
	<?php endif ; ?>
	
	<?php if (get_theme_mod( 'wpstrapfolio_youtube_url' )) : ?>
	<a href="<?php echo esc_url(get_theme_mod( 'wpstrapfolio_youtube_url' )) ;?>" target="_blank"><p class="youtube-icon social-icons"></p></a>
	<?php endif ; ?>
	
	<?php if (get_theme_mod( 'wpstrapfolio_flicker_url' )) : ?>
	<a href="<?php echo esc_url(get_theme_mod( 'wpstrapfolio_flicker_url' )) ;?>" target="_blank"><p class="flickr-icon social-icons"></p></a>
	<?php endif ; ?>
	
	<?php if (get_theme_mod( 'wpstrapfolio_wordpress_url' )) : ?>
	<a href="<?php echo esc_url(get_theme_mod( 'wpstrapfolio_wordpress_url' )) ;?>" target="_blank"><p class="wordpress-icon social-icons"></p></a>
	<?php endif ; ?>
	
	<?php if (get_theme_mod( 'wpstrapfolio_github_url' )) : ?>
	<a href="<?php echo esc_url(get_theme_mod( 'wpstrapfolio_github_url' )) ;?>" target="_blank"><p class="github-icon social-icons"></p></a>
	<?php endif ; ?>
	
	<?php if (get_theme_mod( 'wpstrapfolio_dribbble_url' )) : ?>
	<a href="<?php echo esc_url(get_theme_mod( 'wpstrapfolio_dribbble_url' )) ;?>" target="_blank"><p class="dribbble-icon social-icons"></p></a>
	<?php endif ; ?>

	<?php if ( get_theme_mod( 'wpstrapfolio_rss_url_visibility' ) != 0 ) : ?>
	<a href="<?php echo esc_url(bloginfo('rss2_url')); ?>" target="_blank"><p class="rss-icon social-icons"></p></a>
	<?php endif ; ?>
</div>

