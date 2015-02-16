<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WPStrapFolio
 */

get_header(); ?>

<div class="container">
	<div class="row" role="main">

			<section class="error-404 not-found">
				<header class="span8 page-header">
					<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'wpstrapfolio' ); ?></h1>
				</header><!-- .page-header -->
				<div class="span4">
				    <h2>Try Searching Instead</h2>
					<?php get_search_form(); ?>
				</div>

				<div class="page-content">
					<p class="span12">
					<?php _e( 'It looks like nothing was found at this location. Maybe one of the links below might help?', 'wpstrapfolio' ); ?>
					
					</p>
					

					
                    <div class="span3">
					<?php the_widget( 'WP_Widget_Recent_Posts' ); ?>
					</div>

					<?php if ( wpstrapfolio_categorized_blog() ) : // Only show the widget if site has multiple categories. ?>
					<div class="span3 widget widget_categories">
						<h2 class="widgettitle"><?php _e( 'Our Most Used Categories', 'wpstrapfolio' ); ?></h2>
						<ul>
						<?php
							wp_list_categories( array(
								'orderby'    => 'count',
								'order'      => 'DESC',
								'show_count' => 1,
								'title_li'   => '',
								'number'     => 10,
							) );
						?>
						</ul>
					</div><!-- .widget -->
					<?php endif; ?>
                    <div class="span3">
					<?php
					/* translators: %1$s: smiley */
					$archive_content = '<p>' . sprintf( __( 'Try looking in the monthly archives. %1$s', 'wpstrapfolio' ), convert_smilies( ':)' ) ) . '</p>';
					the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );
					?>
                    </div>
					<div class="span3">
					<?php the_widget( 'WP_Widget_Tag_Cloud' ); ?>
					</div>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>