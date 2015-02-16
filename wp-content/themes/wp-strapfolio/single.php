<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WPStrapFolio
 */

get_header(); ?>

<div class="container">
	<div class="row" role="main">

	<div class="span8">

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

			<?php wpstrapfolio_content_nav( 'nav-below' ); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() )
					comments_template();
			?>

		<?php endwhile; // end of the loop. ?>
    </div>
		<div class="span4">
            <?php get_sidebar(); ?>
        </div>		
		
	</div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>