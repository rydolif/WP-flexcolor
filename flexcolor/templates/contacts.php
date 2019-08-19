<?php
	/**
		* Template name: contacts
	*/

	get_header();
?>
	

	<main>

		<section class="contacts" id="contacts">
			<div class="container contacts__container">

				<div class="contacts__left">

					<h2>Контакты</h2>

					<div class="contacts__addres">

						<div class="contacts__place">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/marker.svg" alt="">
							<p><?php the_field('place', 'option'); ?></p>
						</div>

						<div class="contacts__tel">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/tel.svg" alt="">
							<div>

								<?php if( have_rows('tel', 'option') ): ?>
									<?php while( have_rows('tel', 'option') ): the_row(); 
										$tel = get_sub_field('tel');
									?>

										
										<a href="tel:<?php echo $tel; ?>"><?php echo $tel; ?></a>

									<?php endwhile; ?>
								<?php endif; ?>

							</div>
							
						</div>

						<div class="contacts__email">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/img/meil.png" alt="">
							<a href="email:<?php the_field('mail', 'option'); ?>"><?php the_field('mail', 'option'); ?></a>
						</div>
						
					</div>

				</div>

				<div class="contacts__right">

					<h2>Напишите нам</h2>
					
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
						<?php the_content(); ?>
					<?php endwhile; ?>
					<?php endif; ?>
					
				</div>
				
			</div>
		</section>
		
	</main>


<?php
	get_footer();
