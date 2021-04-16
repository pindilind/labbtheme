<?php get_header(); ?>
<main>
	<section>

		<div class="container">
			<div class="row">
				<div id="primary" class="col-xs-12 col-md-9">
					<h1>Blogg</h1>
					<article>
					<?php
						while (have_posts()) { //startar loopen
							the_post();
						?>
							<img src="<?php
										the_post_thumbnail_url(); ?>" />
							<h2 class="title">
						
								<a href="inlagg.html"><?php the_title(); ?></a>
							</h2>
							<ul class="meta">
								<li>
									<i class="fa fa-calendar"></i><?php the_date();?>
								</li>
								<li>
									<i class="fa fa-user"></i> <a href="forfattare.html"><?php the_author();?></a>
								</li>
								<li>
									<i class="fa fa-tag"></i> <?php
					
									 the_category('<a>, '); 

									?>
								</li>
							</ul>
							<p><?php the_excerpt();?></p>
							<?php
						} //avslutar loopen
						?>
					
						</article>
			
				
					
				</div>
				<?php get_sidebar();?>
			
			</div>
		</div>
	</section>
</main>
<?php get_footer(); ?>