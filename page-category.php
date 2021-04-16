

<?php get_header(); ?>
<main>
	<section>
		<div class="container">
			<div class="row">
				<div id="primary" class="col-xs-12 col-md-9">
					<h1>Kategori 1</h1>
					<article>
					<?php
						while (have_posts()) { //startar loopen
							the_post();
						?>

							<img src="img/washington.jpg" />
							<h2 class="title">
								<a href="inlagg.html">Hej</a>
							</h2>
							<ul class="meta">
								<li>
									<i class="fa fa-calendar"></i> 1 januari, 2016
								</li>
								<li>
									<i class="fa fa-user"></i> <a href="forfattare.html">Peter Pärmenäs</a>
								</li>
								<li>
									<i class="fa fa-tag"></i> <a href="kategori.html">Kategori 1</a>, <a href="kategori.html">Kategori 2</a>
								</li>
							</ul>
							<p>hej</p>
					</article>
				
					<?php
						}//avslutar loopen
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
				<?php get_sidebar(); ?>
			</div>
		</div>
	</section>
</main>
<?php get_footer(); ?>