<?php
	/**
		* Template name: about
	*/

	get_header();
?>
	
	<main>
		<section class="about" id="about">
			<div class="container about__container">

				<h2><?php the_title(); ?></h2>

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; ?>
				<?php endif; ?>

			</div>
		</section>
	</main>


<?php
	get_footer();
