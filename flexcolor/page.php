<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package schoolstudy
 */

get_header();
?>

	<main class="main">

		<section class="hero" id="hero">

			<div class="container hero__container">

				<h1>Ваш дизайн<br><span>на любой продукции</span></h1>

				<div class="click">
					<a href="#tabs" class="btn hero__btn">Выбрать товар</a>
				</div>

				<div class="hero__img">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/hero1.png" alt="">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/hero2.png" alt="">
					<img src="<?php echo get_template_directory_uri(); ?>/assets/img/hero3.png" alt="">
				</div>

			</div>

		</section>

		<section class="hits">
			<div class="container">

				<h3>Хиты продаж</h3>

				<div class="swiper-container hits__slider">
					<div class="swiper-wrapper">
						
						<?php 	
							$args = array(
								'posts_per_page' => 12,
								'product_cat' => 'hity-prodazh',
								'post_type' => 'product',
								'orderby' => 'title',
							);
							$the_query = new WP_Query( $args );
							// The Loop
							while ( $the_query->have_posts() ) {
								$the_query->the_post();
								
								?>
									<div class="swiper-slide">
										<a href="<?php the_permalink(); ?>">
											<?php if ( has_post_thumbnail() ) {
												the_post_thumbnail();
											} else { ?>
												<img src="<?php echo get_template_directory_uri(); ?>/assets/img/no.png" alt="<?php the_title(); ?>" class="no"/>
											<?php } ?>

											<p><?php the_title(); ?></p>
											<div>
												<span></span>
												<span></span>
											</div>
										</a>
									</div>

								<?php
							}
							wp_reset_postdata();
						?>

					</div>

					<div class="swiper-scrollbar hits__scrollbar"></div>
				</div>

			</div>
		</section>

		<section class="tabs" id="tabs">
			<div class="container tabs__container">

				<h3>Каталог</h3>

				<ul class="tabs__cover">
					<li><a href="#one">Текстиль</a></li>
					<li><a href="#two">Полиграфия</a></li>
					<li><a href="#three">Интерьер</a></li>
					<li><a href="#four">Сувениры</a></li>
				</ul>

				<div id="one" class="tabs__wrap">

					<div class="swiper-container textile__slider">
						<div class="swiper-wrapper">

						<?php 	
							$args = array(
								'posts_per_page' => 12,
								'product_cat' => 'tekstil',
								'post_type' => 'product',
								'orderby' => 'title',
							);
							$the_query = new WP_Query( $args );
							// The Loop
							while ( $the_query->have_posts() ) {
								$the_query->the_post();
								
								?>
									<div class="swiper-slide">
										<a href="<?php the_permalink(); ?>">
											<?php if ( has_post_thumbnail() ) {
												the_post_thumbnail();
											} else { ?>
												<img src="<?php echo get_template_directory_uri(); ?>/assets/img/no.png" alt="<?php the_title(); ?>" class="no"/>
											<?php } ?>

											<p><?php the_title(); ?></p>
											<div>
												<span></span>
												<span></span>
											</div>
										</a>
									</div>

								<?php
							}
							wp_reset_postdata();
						?>

						</div>

						<div class="swiper-scrollbar textile__scrollbar"></div>
					</div>
				</div>

				<div id="two" class="tabs__wrap">

					<div class="swiper-container polegrf__slider">
						<div class="swiper-wrapper">

							<?php 	
								$args = array(
									'posts_per_page' => 12,
									'product_cat' => 'poligrafija',
									'post_type' => 'product',
									'orderby' => 'title',
								);
								$the_query = new WP_Query( $args );
								// The Loop
								while ( $the_query->have_posts() ) {
									$the_query->the_post();
									
									?>
										<div class="swiper-slide">
											<a href="<?php the_permalink(); ?>">
												<?php if ( has_post_thumbnail() ) {
													the_post_thumbnail();
												} else { ?>
													<img src="<?php echo get_template_directory_uri(); ?>/assets/img/no.png" alt="<?php the_title(); ?>" class="no"/>
												<?php } ?>

												<p><?php the_title(); ?></p>
												<div>
													<span></span>
													<span></span>
												</div>
											</a>
										</div>

									<?php
								}
								wp_reset_postdata();
							?>

						</div>

						<div class="swiper-scrollbar polegrf__scrollbar"></div>
					</div>
				</div>

				<div id="three" class="tabs__wrap">

					<div class="swiper-container inter__slider">
						<div class="swiper-wrapper">
							<?php 	
								$args = array(
									'posts_per_page' => 12,
									'product_cat' => 'interer',
									'post_type' => 'product',
									'orderby' => 'title',
								);
								$the_query = new WP_Query( $args );
								// The Loop
								while ( $the_query->have_posts() ) {
									$the_query->the_post();
									
									?>
										<div class="swiper-slide">
											<a href="<?php the_permalink(); ?>">
												<?php if ( has_post_thumbnail() ) {
													the_post_thumbnail();
												} else { ?>
													<img src="<?php echo get_template_directory_uri(); ?>/assets/img/no.png" alt="<?php the_title(); ?>" class="no"/>
												<?php } ?>

												<p><?php the_title(); ?></p>
												<div>
													<span></span>
													<span></span>
												</div>
											</a>
										</div>

									<?php
								}
								wp_reset_postdata();
							?>
						</div>

						<div class="swiper-scrollbar inter__scrollbar"></div>
					</div>
				</div>

				<div id="four" class="tabs__wrap">
					<div class="swiper-container suver__slider">
						<div class="swiper-wrapper">

							<?php 	
								$args = array(
									'posts_per_page' => 12,
									'product_cat' => 'suveniry',
									'post_type' => 'product',
									'orderby' => 'title',
								);
								$the_query = new WP_Query( $args );
								// The Loop
								while ( $the_query->have_posts() ) {
									$the_query->the_post();
									
									?>
										<div class="swiper-slide">
											<a href="<?php the_permalink(); ?>">
												<?php if ( has_post_thumbnail() ) {
													the_post_thumbnail();
												} else { ?>
													<img src="<?php echo get_template_directory_uri(); ?>/assets/img/no.png" alt="<?php the_title(); ?>" class="no"/>
												<?php } ?>

												<p><?php the_title(); ?></p>
												<div>
													<span></span>
													<span></span>
												</div>
											</a>
										</div>

									<?php
								}
								wp_reset_postdata();
							?>

						</div>

						<div class="swiper-scrollbar suver__scrollbar"></div>
					</div>
				</div>
				
			</div>
		</section>

		<section class="reviews">
			<div class="container reviews__container">

				<div class="reviews__left">

					<h3>Слово клиентам</h3>

					<div class="chat__content jspScrollable">
						<?php
							$args = array(
							'post_type' => 'reviews',
							'posts_per_page' => -1,
							);

							$query = new WP_Query( $args );

							while ( $query->have_posts() ): $query->the_post();

							?>
						
							<div class="chat__content_pane">
								<span>“</span>
								<?php the_content(); ?>
								<div class="chat__content_bot">
									<p class="chat__content_kto">
										<?php if ( has_post_thumbnail() ) {
											the_post_thumbnail();
										} else { ?>
											<img src="<?php echo get_template_directory_uri(); ?>/assets/img/vhod.svg" alt="<?php the_title(); ?>" />
										<?php } ?>
										<b><?php the_title(); ?>, </b>
										<time datetime="1969-07-16">
											<?php echo get_the_date('Y-m-d'); ?>
										</time>
									</p>
								</div>
							</div>

						<?php
							endwhile; wp_reset_postdata();
						?>

					</div>
					
				</div>

				<div class="reviews__right">

					<h3>Написать отзыв</h3>

					<div class="reviews__form">

						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							<?php the_content(); ?>
						<?php endwhile; ?>
						<?php endif; ?>
					
					</div>
					
				</div>
				
			</div>
		</section>

	</main>


<?php
get_footer();
