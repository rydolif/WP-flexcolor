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

				<h1>Ваш дизайн <br><span>на любой продукции</span></h1>

				<div class="click">
					<a href="#tabs" class="btn hero__btn">Выбрать товар</a>
				</div>

				<div>
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

						<div class="chat__content_pane">
							<span>“</span>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
							</p>
							<div class="chat__content_bot">
								<div>
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/star.png" alt="">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/star.png" alt="">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/star.png" alt="">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/star.png" alt="">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/star.png" alt="">
								</div>
								<div class="chat__content_kto">
									<p>
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/vhod.svg" alt="">
										Алина, <time datetime="2019-05-24">24/05/2019</time>
									</p>
								</div>
							</div>
						</div>

						<div class="chat__content_pane">
							<span>“</span>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
							</p>
							<div class="chat__content_bot">
								<div>
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/star.png" alt="">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/star.png" alt="">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/star.png" alt="">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/star.png" alt="">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/star.png" alt="">
								</div>
								<div class="chat__content_kto">
									<p>
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/vhod.svg" alt="">
										Алина, <time datetime="2019-05-24">24/05/2019</time>
									</p>
								</div>
							</div>
						</div>

						<div class="chat__content_pane">
							<span>“</span>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
							</p>
							<div class="chat__content_bot">
								<div>
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/star.png" alt="">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/star.png" alt="">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/star.png" alt="">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/star.png" alt="">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/star.png" alt="">
								</div>
								<div class="chat__content_kto">
									<p>
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/vhod.svg" alt="">
										Алина, <time datetime="2019-05-24">24/05/2019</time>
									</p>
								</div>
							</div>
						</div>

						<div class="chat__content_pane">
							<span>“</span>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
							</p>
							<div class="chat__content_bot">
								<div>
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/star.png" alt="">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/star.png" alt="">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/star.png" alt="">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/star.png" alt="">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/star.png" alt="">
								</div>
								<div class="chat__content_kto">
									<p>
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/vhod.svg" alt="">
										Алина, <time datetime="2019-05-24">24/05/2019</time>
									</p>
								</div>
							</div>
						</div>

						<div class="chat__content_pane">
							<span>“</span>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
							</p>

							<div class="chat__content_bot">
								<div>
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/star.png" alt="">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/star.png" alt="">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/star.png" alt="">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/star.png" alt="">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/star.png" alt="">
								</div>
								<div class="chat__content_kto">
									<p>
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/vhod.svg" alt="">
										Алина, <time datetime="2019-05-24">24/05/2019</time>
									</p>
								</div>
							</div>
						</div>
						
					</div>
					
				</div>

				<div class="reviews__right">

					<h3>Написать отзыв</h3>

					<div class="reviews__form">

						<div class="reviews__form_up">

							<input type="text" name="name" placeholder="Введите Ваше имя" required>
							<div class="stars">
								<p>Оцените  нашу работу</p>
								<div>
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/star.png" alt="">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/star.png" alt="">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/star.png" alt="">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/empty_star.png" alt="">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/img/empty_star.png" alt="">
								</div>
							</div>
							
						</div>

						<textarea name="content" rows="5" placeholder="Ваш отзыв" data-required="true" required=""></textarea>

						<div class="reviews__btn"><button class="btn">Отправить</button></div>
						
					</div>
					
				</div>
				
			</div>
		</section>

	</main>
	
	<script>
		//-------------swiper---------------------------------------
		  var swiper = new Swiper('.hits__slider', {
		    scrollbar: {
		      el: '.hits__scrollbar',
		    },
		    freeMode: true,
		    slidesPerView: 3,
		    spaceBetween: 50,
		    breakpoints: {
		    480: {
		      slidesPerView: 1,
		      spaceBetween: 10
		    },
		    992: {
		      slidesPerView: 2,
		      spaceBetween: 20
		    }
		  }
		  });

		  var swiper = new Swiper('.textile__slider', {
		    scrollbar: {
		      el: '.textile__scrollbar',
		    },
		    freeMode: true,
		    slidesPerView: 3,
		    spaceBetween: 50,
		    breakpoints: {
		    480: {
		      slidesPerView: 1,
		      spaceBetween: 10
		    },
		    992: {
		      slidesPerView: 2,
		      spaceBetween: 20
		    }
		  }
		  });

		  var swiper = new Swiper('.polegrf__slider', {
		    scrollbar: {
		      el: '.polegrf__scrollbar',
		    },
		    freeMode: true,
		    slidesPerView: 3,
		    spaceBetween: 50,
		    breakpoints: {
		    480: {
		      slidesPerView: 1,
		      spaceBetween: 10
		    },
		    992: {
		      slidesPerView: 2,
		      spaceBetween: 20
		    }
		  }
		  });

		  var swiper = new Swiper('.inter__slider', {
		    scrollbar: {
		      el: '.inter__scrollbar',
		    },
		    freeMode: true,
		    slidesPerView: 3,
		    spaceBetween: 50,
		    breakpoints: {
		    480: {
		      slidesPerView: 1,
		      spaceBetween: 10
		    },
		    992: {
		      slidesPerView: 2,
		      spaceBetween: 20
		    }
		  }
		  });

		  var swiper = new Swiper('.suver__slider', {
		    scrollbar: {
		      el: '.suver__scrollbar',
		    },
		    freeMode: true,
		    slidesPerView: 3,
		    spaceBetween: 50,
		    breakpoints: {
		    480: {
		      slidesPerView: 1,
		      spaceBetween: 10
		    },
		    992: {
		      slidesPerView: 2,
		      spaceBetween: 20
		    }
		  }
		  });
	</script>

<?php
get_footer();
