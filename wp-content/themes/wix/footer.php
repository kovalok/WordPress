<?php wp_footer(); ?><footer>
	<div class="container">
    	<div class="footer">
    	<?php 
			$wix_options = get_option( 'wix_theme_options' );
			if(!empty($wix_options['footertext'])) {
				echo wp_filter_nohtml_kses($wix_options['footertext']);
			}
			 echo " .Powered by <a href='http://wordpress.org' target='_blank'>WordPress</a> and <a href='http://fasterthemes.com/wordpress-themes/Wix' target='_blank'>Wix</a>.";	
		?>
        </div>    
    </div>
</footer>

</body>
</html>