<?php
	/**
		* Template name: index
	*/

get_header('page');
?>

	<section class="hero" id="hero">
		<div class="container">

			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="" class="hero__logo">
			<h1>Японская кухня у Вас дома</h1>
			<a href="<?php echo get_home_url(); ?>/shop/" class="btn--hero btn">Сделать заказ</a>
			
		</div>
	</section>

	<section class="category" id="category">
		<div class="container">

			<div class="category__list">

					<?php if( have_rows('list') ): ?>

						<?php while( have_rows('list') ): the_row(); 
							$img = get_sub_field('img');
							$link = get_sub_field('link');
						?>

							<a href="<?php echo $link; ?>" class="category__item">
								<img src="<?php echo $img; ?>" alt="">
							</a>

						<?php endwhile; ?>

					<?php endif; ?>
					
			</div>

		</div>
	</section>

	<section class="menu" id="menu">
		<div class="container">

			<div class="menu__title">
				<h2>Меню</h2>
				<div class="swiper-button-prev"></div>
				<div class="swiper-button-next"></div>
			</div>

			<div class="menu__slider swiper-container">
				<div class="swiper-wrapper">

					<?php  

						$prod_cat_args = array(
						    'taxonomy'    => 'product_cat',
						    'orderby'     => 'id', // здесь по какому полю сортировать
						    'hide_empty'  => true, // скрывать категории без товаров или нет
						    'parent'      => 0 // id родительской категории
						  );

						$woo_categories = get_categories( $prod_cat_args );
						  foreach ( $woo_categories as $woo_cat ) {
						      $woo_cat_id = $woo_cat->term_id; //category ID
						      $woo_cat_name = $woo_cat->name; //category name
						      $woo_cat_slug = $woo_cat->slug; //category slug
						      echo '<div class="menu__slide swiper-slide">';
						      echo '<a href="' . get_term_link( $woo_cat_id, 'product_cat' ) . '">';
						      $category_thumbnail_id = get_woocommerce_term_meta($woo_cat_id, 'thumbnail_id', true);
						      $thumbnail_image_url = wp_get_attachment_url($category_thumbnail_id);
						      echo '<img src="' . $thumbnail_image_url . '"/>';
						      ?>
						    	<?php echo "<span> $woo_cat_name </span>" ?>
						      <?php  
						       echo '</a>';
						      echo "</div>\n";
						  }

					  ?>

				</div>
			</div>
			
		</div>
	</section>

	<section class="popular" id="popular">
		<div class="container">

			<h2>Популярное</h2>

			<?php echo do_shortcode( '[featured_products per_page="8" columns="4"]' ); ?>

		</div>
	</section>

	<section class="content" id="content">
		<div class="container">

			<?php the_content(); ?>

		</div>
	</section>


<?php
get_footer();
