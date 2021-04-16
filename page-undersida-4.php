<?php get_header();?> <!-- hämtar header från header.php -->
		<main>
		<section>
                <div class="container">
                    <div class="row">
                        <div id="primary" class="col-xs-12 col-sm-8 col-md-6">
                            <?php
                            while (have_posts()) {
                                the_post();
                            }
                            ?>
                            <div class="text">
                                <h1><?php the_title(); ?></h1> <!-- hämtar titel från db -->
                                <?php the_content(); ?> <!-- hämtar text från db -->
                     
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-6">
                            <img src="<?php the_post_thumbnail_url();?>" /> <!-- hämtar bild från db-->
                        </div>
                    </div>
                </div>
            </section>

		</main>
<?php get_footer();?> <!-- hämtar footer från footer.php -->