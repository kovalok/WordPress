<header id="masthead" class="site-header" role="banner">
	<?php do_action( 'before' ); ?>
	<!-- Start of Main Nav Menu section -->
    <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
        <div class="container">
		    <h1 class="brand"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".top-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </a>
            <!-- Our menu needs to go here -->
			<?php wp_nav_menu( array(
	           'theme_location'		 => 'primary',
			   'container_class' => 'nav-collapse top-collapse',
	           'menu_class'		=>	'nav pull-right',
	           'depth'				=>	0,
	           'fallback_cb'		=>	false,
	           'walker'			=>	new WPStrapFolio_Nav_Walker,
	           )); 
            ?>
        </div>
		</div><!-- /.navbar-inner -->
	</div><!-- /.navbar -->
    <!-- End Main Nav section -->
	<?php if ( is_front_page() ) : ?>
	<?php if ( get_theme_mod( 'wpstrapfolio_tagline_visibility' ) != 1 ) { ?>
	<div class="container">
	<div class="row">
	    <h3 class="span6 site-description"><?php bloginfo( 'description' ); ?></h3>
	    <div class="span6 pull-right">
		    <?php if ( get_theme_mod( 'wpstrapfolio_social_visibility' ) != 0 ) { ?>
		        <?php get_template_part( 'social-icons' ); ?>
	        <?php } ?>
	    </div>
    </div>
	</div>
	<?php } ?>
	<?php else : ?>
	<div class="container">
	<div class="row">
	    <h3 class="span6 site-description"><?php bloginfo( 'description' ); ?></h3>
		<div class="span6 pull-right">
		    <?php if ( get_theme_mod( 'wpstrapfolio_social_visibility' ) != 0 ) { ?>
		        <?php get_template_part( 'social-icons' ); ?>
	        <?php } ?>
	    </div>
	</div>
	</div>
    <?php endif; ?>
    </header><!-- #masthead -->
	
     <?php if ( get_theme_mod( 'wpstrapfolio_slider_visibility' ) != 0 ) { ?>
	    <?php if ( is_front_page() ) : ?>
		    <?php get_template_part( 'slider' ); ?>
	    <?php endif; ?>
	<?php } ?>

    <div class="navbar navbar-static-top">
        <div class="navbar-inner">
        <div class="container">
            <!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".bottom-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </a>
            <!-- Our menu needs to go here -->
			<?php wp_nav_menu( array(
	           'theme_location'		 => 'secondary',
			   'container_class' => 'nav-collapse bottom-collapse',
	           'menu_class'		=>	'nav',
	           'depth'				=>	0,
	           'fallback_cb'		=>	false,
	           'walker'			=>	new WPStrapFolio_Nav_Walker,
	           )); 
            ?>
        </div>
		</div><!-- /.navbar-inner -->
	</div><!-- /.navbar -->