<?php
	/**
		* Template name: cart
	*/

get_header();
?>

	
	<main class="main">

		<section class="basket">
			<div class="container">
				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
					<h2><?php the_title(); ?></h2>

					<?php the_content(); ?>

				<?php endwhile; ?>
				<?php endif; ?>

			</div>
		</section>

	</main>


<?php
get_footer();
