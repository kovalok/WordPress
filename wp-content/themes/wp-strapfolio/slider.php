<?php
// Custom Slider For WP Strap Code themes
?>

<!-- slideshow -->

    <div id="myCarousel" class="carousel <?php echo get_theme_mod( 'wpstrapfolio_slider_transition' ); ?>">
        <div class="carousel-inner">
        <?php $firstClass = 'active'; ?> 
        <?php if (have_posts()) : ?>
          
		<?php $wpstrapfolio_query = new WP_Query(array(
		'category_name'  => get_theme_mod( 'wpstrapfolio_slide_cat' ),
		'posts_per_page' => get_theme_mod( 'wpstrapfolio_slide_number' )
		)); ?>
	
    	<?php while ($wpstrapfolio_query->have_posts()) : $wpstrapfolio_query->the_post(); ?>
        
        <div class="item <?php echo $firstClass; ?>">
            <?php $firstClass = ""; ?>
			
            <?php the_post_thumbnail('wpstrapfolio-page-feature'); ?>
            <?php if ( get_theme_mod( 'wpstrapfolio_slider_caption_visibility' ) != 1 ) { ?>
			<div class="carousel-caption">
                <h1><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
				<p class="lead"><?php echo wpstrapfolio_slider_excerpt(); ?></p>
				<?php if ( get_theme_mod( 'wpstrapfolio_caption_thumb_visibility' ) != 1 ) { ?>
				<div class="summary-thumbnail">
		            <a href="<?php the_permalink(); ?>">
			            <?php the_post_thumbnail('wpstrapfolio-slider-caption'); ?>
		            </a>	
	            </div>
				<?php } ?>
            </div>
			<?php } ?>
        </div>
			
      	<?php endwhile; endif; ?>
        <?php wp_reset_query(); ?>       
        </div>    
        
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
    
    </div><!-- #myCarousel -->