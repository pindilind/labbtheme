<?php get_header(); ?> <!-- hämtar header från header.php -->

<main>
	<section>
		<div class="container">
			<div class="row">
				<div id="primary" class="col-xs-12">
					<?php
					while (have_posts()) { //startar loopen
						the_post();
					?>
						<h1><?php the_title(); ?></h1> <!-- hämtar titel från db-->
						<p><?php the_content(); ?></p> <!-- hämtar text från db -->

					<?php
					} //avslutar loopen
					?>
				</div>
			</div>
		</div>
	</section>
</main>
<?php get_footer(); ?> <!-- hämtar footer från footer.php -->