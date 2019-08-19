<?php
	/**
		* Template name: info
	*/

get_header();
?>

	
	<main class="main">

		<section class="info--page">
			<div class="container--tovar container">
				<div class="info--page__block">
				
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					
						<h2><?php the_title(); ?></h2>

						<?php the_content(); ?>

					<?php endwhile; ?>
					<?php endif; ?>

				</div>
			</div>
		</section>

	</main>


<?php
get_footer();
