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
								
				<p>
					
				</p>

				<ol>
					<li>Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.</li>
					<li>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. </li>
					<li>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse idunt ut laoreet dolore magna aliquam erat dolor sit amet, consectetuer adipiscing volutpat.</li>
				</ol>

				<blockquote>
					“ Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse idunt ut laoreet 
					Lorem ipsum dolor sit amet, consectetuer adipiscing eliе..”
				</blockquote>

				<p>
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
				</p>
				
			</div>
		</section>
	</main>


<?php
	get_footer();
