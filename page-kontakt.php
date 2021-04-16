<?php get_header(); ?> <!-- hämtar header från header.php -->
<main>
	<section>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-md-8 col-md-offset-2">
					<?php
					while (have_posts()) {
						the_post(); //startar loop
					
					?>
					<div class="text">
						<h1><?php the_title(); ?></h1> <!-- hämtar titeln -->
						<?php the_content(); ?> <!-- hämtar text -->
						<?php dynamic_sidebar('mejlWidget'); ?> <!-- hämtar mejlWidget -->
					</div>
				</div>
				<?php 
				} //stoppar loop
				?>
			</div>
		</div>
	</section>
</main>
<?php get_footer(); ?> <!-- hämtar footern från footer.php -->