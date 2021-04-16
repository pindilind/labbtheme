<?php get_header(); ?> <!-- hämtar header från header.php -->

<main>
	<section>
		<div class="container">
			<div class="row">
				<div id="primary" class="col-xs-12 col-md-9 col-md-push-3">
					<?php
					while (have_posts()) { //startar loopen
						the_post();
					?>
						<h1><?php the_title(); ?></h1> <!-- hämtar titel från db -->

						<p><?php the_content(); ?></p> <!-- hämtar text från db -->

				
					
				</div>
				<aside id="secondary" class="col-xs-12 col-md-3 col-md-pull-9">
				<?php dynamic_sidebar('undersida');?>   <!-- hämtar meny widget -->

			
				</aside>
				<?php
					} //avslutar loopen
					?>
			</div>
		</div>
	</section>
</main>

<?php get_footer(); ?> <!-- hämtar footer från footer.php -->
