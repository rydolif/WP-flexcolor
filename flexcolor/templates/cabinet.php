<?php
	/**
		* Template name: cabinet
	*/

get_header();
?>

	<main class="main">

		<section class="cabinet basket">
			<div class="container">
				
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				
					<?php the_content(); ?>

				<?php endwhile; ?>
				<?php endif; ?>

			</div>
		</section>

	</main>


<?php
get_footer();
