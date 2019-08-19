
	<footer class="footer">
		<div class="container footer__container">

			<div class="header__logo footer__logo">
				<a href="index.html">
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
			

			<div class="footer__nav">
				<?php 
					wp_nav_menu( array(
						'menu'=>'page',
						'menu_class'=>'',
					    'theme_location'=>'menu',
					) );
				?>
			</div>

			<div class="footer__right">
				<div class="footer__end click">
					<a href="#tabs">Каталог</a>
				</div>
				<div class="footer__up click">
					<a href="#hero" class="click">
						<span></span>
						<p>Наверх</p>
					</a>
				</div>
			</div>
			
		</div>
	</footer>


	<?php wp_footer(); ?>

</body>
</html>
