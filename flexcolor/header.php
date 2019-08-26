<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="utf-8">
	<title><?php wp_title("", true); ?></title>
	<meta name="description" content="">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link rel="icon" href="<?php the_field('favicon', 'option'); ?>">
	<meta name="theme-color" content="#000">

</head>

	<?php wp_head(); ?>

<body>

	<span id="top"></span>

	<div class="preloader">
		<div class="pulse">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>

	<header class="header">
		<div class="container">
			<div class="header__container">

				<button class="hamburger" type="button">
					<span class="hamburger__box">
						<span class="hamburger__item"></span>
					</span>
				</button>

				<nav class="nav">
					<button class="header__toggle click">Каталог</button>

					<div class="header__catalog">
						<div class="header__article">

							<div class="header__article_category">
								<h4>Текстиль</h4>
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
											<a href="<?php the_permalink(); ?>">
												<?php the_title(); ?>
											</a>
										<?php
									}
									wp_reset_postdata();
								?>
							</div>

							<div class="header__article_category">
								<h4>Полиграфия</h4>
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
											<a href="<?php the_permalink(); ?>">
												<?php the_title(); ?>
											</a>
										<?php
									}
									wp_reset_postdata();
								?>
							</div>

							<div class="header__article_category">
								<h4>Интерьер</h4>
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
											<a href="<?php the_permalink(); ?>">
												<?php the_title(); ?>
											</a>
										<?php
									}
									wp_reset_postdata();
								?>
							</div>

							<div class="header__article_category">
								<h4>Сувениры</h4>
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
											<a href="<?php the_permalink(); ?>">
												<?php the_title(); ?>
											</a>
										<?php
									}
									wp_reset_postdata();
								?>
							</div>

						</div>
					</div>

					<?php 
						wp_nav_menu( array(
							'menu'=>'page',
							'menu_class'=>'list',
						    'theme_location'=>'menu',
						) );
					?>

					<div class="header__left header__nav">
						<?php 
							wp_nav_menu( array(
								'menu'=>'login',
								'menu_class'=>'list',
								'theme_location'=>'menu',
							) );
						?>
						<div class="hov_ru"><a href="#">РУС</a></div>
						<?php cart_link(); ?><?php the_widget( 'WC_Widget_Cart', 'title=' ); ?>
					</div>
				</nav>

				<div class="header__logo">
					<a href="<?php echo get_home_url(); ?>">
						<b>FLEX</b>COLOR

						<div>
							<span></span>
							<span></span>
							<span></span>
							<span></span>
						</div>

						<p><b>print</b>studio</p>
					</a>
				</div>

				<div class="header__left">
					<a href="#">РУС</a>

					
					<div class="header__left_login">
						<img src="<?php echo get_template_directory_uri(); ?>/assets/img/vhod.svg" alt="">
						<?php 
							$current_user = wp_get_current_user();
							echo ''         . $current_user->user_login     . '<br />';

							wp_nav_menu( array(
								'menu'=>'login',
								'menu_class'=>'list',
								'theme_location'=>'menu',
							) );
						?>
					</div>

					<?php cart_link(); ?><?php the_widget( 'WC_Widget_Cart', 'title=' ); ?>
				</div>

			</div>
		</div>
	</header>