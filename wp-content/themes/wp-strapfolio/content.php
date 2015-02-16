<?php
/**
 * @package WPStrapFolio
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>

		<?php if ( get_theme_mod( 'wpstrapfolio_top_meta_visibility' ) != 1 ) { ?>
		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="entry-meta">
			<?php wpstrapfolio_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php endif; ?>
		<?php } ?>
	</header><!-- .entry-header -->

	<?php if ( is_home() || is_front_page() || is_search() ) : // Only display Excerpts for Search ?>
	<div class="entry-summary">
		<?php if (has_post_thumbnail()) { ?>
		<div class="summary-thumbnail">
		   <a href="<?php the_permalink(); ?>">
			 <?php the_post_thumbnail( ); ?>
		   </a>
		</div>
		<?php } ?>
		<?php echo wpstrapfolio_blogfeed_excerpt(); ?>
	</div><!-- .entry-summary -->
	<?php if ( get_theme_mod( 'wpstrapfolio_readmore_visibility' ) != 1 ) { ?>
		    <?php if ( get_theme_mod( 'wpstrapfolio_readmore_text' ) ) : ?>
			<div class="read-more btn btn-custom">
		        <a href="<?php the_permalink(); ?>"><?php echo get_theme_mod( 'wpstrapfolio_readmore_text' ); ?></a>
		    </div>
		    <?php else : ?>
		    <div class="read-more btn btn-custom">
		        <a href="<?php the_permalink(); ?>">Read More &raquo;</a>
		    </div>
		    <?php endif; ?>
		
		<?php } ?>
	
	<?php else : ?>
	<div class="entry-content">
		<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'wpstrapfolio' ) ); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'wpstrapfolio' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php endif; ?>
    
	<footer class="entry-meta">
	<?php if ( get_theme_mod( 'wpstrapfolio_bottom_meta_visibility' ) != 1 ) { ?>
		<?php if ( 'post' == get_post_type() ) : // Hide category and tag text for pages on Search ?>
			<?php
				/* translators: used between list items, there is a space after the comma */
				$categories_list = get_the_category_list( __( ', ', 'wpstrapfolio' ) );
				if ( $categories_list && wpstrapfolio_categorized_blog() ) :
			?>
			<span class="cat-links">
				<?php printf( __( 'Posted in %1$s', 'wpstrapfolio' ), $categories_list ); ?>
			</span>
			<?php endif; // End if categories ?>

			<?php
				/* translators: used between list items, there is a space after the comma */
				$tags_list = get_the_tag_list( '', __( ', ', 'wpstrapfolio' ) );
				if ( $tags_list ) :
			?>
			<span class="tags-links">
				<?php printf( __( 'Tagged %1$s', 'wpstrapfolio' ), $tags_list ); ?>
			</span>
			<?php endif; // End if $tags_list ?>
		<?php endif; // End if 'post' == get_post_type() ?>

		<?php if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) : ?>
		<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'wpstrapfolio' ), __( '1 Comment', 'wpstrapfolio' ), __( '% Comments', 'wpstrapfolio' ) ); ?></span>
		<?php endif; ?>

		<?php edit_post_link( __( 'Edit', 'wpstrapfolio' ), '<span class="edit-link">', '</span>' ); ?>
	<?php } ?>
	</footer><!-- .entry-meta -->
	
</article><!-- #post-## -->
