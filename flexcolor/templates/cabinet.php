<?php
	/**
		* Template name: cabinet
	*/

get_header();
?>

	
	<main class="main">

		<section class="basket">
			<div class="container--tovar container">
				<div class="basket__block basket__block--cabinet">
				
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
