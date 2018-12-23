<?php
/**
 * @package Ninja_Forms_Styles
 * @version 1.0
 */
/*
Plugin Name: Ninja Forms Styles
Plugin URI: http://wordpress.org/plugins/
Description: Custom form styles for Ninja Forms
Author: NFS
Version: 1.0
Author URI: http://example.com/
*/

function nfs_custom_css() {
	wp_register_style('nfs', plugins_url('style.css',__FILE__ ));
	wp_enqueue_style('nfs');
}

add_action( 'wp_head', 'nfs_custom_css' );

function nfs_custom_js(){
	?>
	<script>
		//Makes footer be visible after the form
		jQuery(function(){
			if(jQuery('body').hasClass('page-id-29')){
				setTimeout(function(){
					var boxHeight = jQuery('.wrapper_content_quote_box').height();
					var footerTop = jQuery('.thrv_symbol_25').offset().top;
					var foi = setInterval(function(){
						if(boxHeight > footerTop){
							jQuery('.thrv_symbol_25').css('top', boxHeight);
							clearInterval(foi);
						}
					}, 100);
				}, 100);
			}
		});
	</script>
	<?php
}
add_action( 'wp_footer', 'nfs_custom_js');