<?php 
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}


//---------------------------------------------wrapper-----------------------------------------------

	add_action( 'woocommerce_before_main_content', 'new_before_main_content',  10 );
		
	function new_before_main_content() {
	?>

		<main class="main">

			<section class="shop" id="app">
				<div class="container">

					<h2>Меню</h2>

			<?php 
					/**
				 * Hook: woocommerce_sidebar.
				 *
				 * @hooked woocommerce_get_sidebar - 10
				 */
				do_action( 'woocommerce_sidebar' );
			?>

	<?php
	}


	add_action( 'woocommerce_after_main_content', 'new_after_main_content',  10 );
		
	function new_after_main_content() {
	?>

				</div>
			</section>

		</main>
	<?php
	}


//-------------------------------------------img-wrap--------------------------------
	add_action( 'woocommerce_before_shop_loop_item_title', 'school_before_shop_loop_item_title', 5 );
	function school_before_shop_loop_item_title() {
		?>
			<div class="popular__item_img">
		<?php 
	}

	add_action( 'woocommerce_before_shop_loop_item_title', 'school_end_shop_loop_item_title', 20 );
	function school_end_shop_loop_item_title() {
		?>
			</div>
		<?php 
	}

//-------------------------------------------form-wrap--------------------------------
	add_action( 'woocommerce_after_shop_loop_item', 'school_before_shop_loop_item', 5 );
	function school_before_shop_loop_item() {
		?>
			<div class="popular__item_main">
				<?php the_excerpt(); ?>
				<p class="popular__item_weight"><?php the_field('weight'); ?>грм.</p>
			</div>
			
			<div class="popular__item_footer">
		<?php 
	}

	add_action( 'woocommerce_after_shop_loop_item', 'school_after_shop_loop_item', 20 );
	function school_after_shop_loop_item() {
		?>
			</div>
		<?php 
	}
