<?php get_header(); ?>

<main>
	<section>

		<?php
		while (have_posts()) { //startar loopen
			the_post(); 
		?>

			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<div class="hero">

							<img src="<?php echo get_template_directory_uri() . './img/city.jpg' ?>" />
							<div class="text">
								<h1><?php
									the_title();
									?></h1>
								<p><?php
									the_content(); ?></p>
							</div>
						</div>
					</div>

				<?php
				} //avslutar loopen
				?>
				
				</div>
			</div>
	</section>
</main>

<?php get_footer(); ?>