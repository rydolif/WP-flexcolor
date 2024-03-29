<?php 

//Вывод кратких данных из корзины
	if ( ! function_exists( 'cart_link' ) ) {
	 function cart_link() {
	 ?>
	<a class="cart-contents" href="<?php echo get_home_url(); ?>/cart/">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/buy.svg" alt="">
 		<span class="count">
 			<span class="count__active">
 				<?php echo sprintf (_n( '%d', '%d', WC()->cart->cart_contents_count ), WC()->cart->cart_contents_count ); ?>
 			</span>
 			<span class="count__price">
 				<?php echo WC()->cart->get_cart_total(); ?>
 			</span>
 		</span>
	</a> 
	 <?php
	 }
	}

//Ajax Обновление кратких данных из корзины
	add_filter( 'woocommerce_add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment' );

	function woocommerce_header_add_to_cart_fragment( $fragments ) {
	 ob_start();
	 ?>
	 <a class="cart-contents" href="<?php echo get_home_url(); ?>/cart/">
	 	<img src="<?php echo get_template_directory_uri(); ?>/assets/img/buy.svg" alt="">
 		<span class="count">
 			<span class="count__active">
 				<?php echo sprintf (_n( '%d', '%d', WC()->cart->cart_contents_count ), WC()->cart->cart_contents_count ); ?>
 			</span>
 			<span class="count__price">
 				<?php echo WC()->cart->get_cart_total(); ?>
 			</span>
 		</span>
	 </a> 
	 <?php
	}
	


