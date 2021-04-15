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
						
								<a href="inlagg.html"><?php the_title(); ?>banan</a>
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
									echo 'banan9'; 
									 the_category('banan11'); 
									echo 'banan9'; 
									?>, <a href="kategori.html">Kategori 2</a>
								</li>
							</ul>
							<p><?php the_content();?>banan</p>
							<?php
						} //avslutar loopen
						?>
					
						</article>
			
						
					<nav class="navigation pagination">
						<h2 class="screen-reader-text">Inläggsnavigering</h2>
						<a class="prev page-numbers" href="">Föregående</a>
						<span class="page-numbers current">1</span>
						<a class="page-numbers" href="">2</a>
						<a class="next page-numbers" href="">Nästa</a>
					</nav>
				</div>
				<?php get_sidebar();?>
			
			</div>
		</div>
	</section>
</main>
<?php get_footer(); ?>