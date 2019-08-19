<?php 
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

//---------------------------------------------breadcrumb-----------------------------------------------
remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb',  20 );

add_action( 'woocommerce_before_main_content', 'school_breadcrumb',  20 );
	
function school_breadcrumb() {
	if ( ! is_archive() ) {
?>
	<?php woocommerce_breadcrumb(); ?>

<?php
	}
}




