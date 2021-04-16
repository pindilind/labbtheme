<?php get_header();?> <!-- hämtar headern från header.php-->

		<main>
			<section>
				<div class="container">
					<div class="row">
						<div id="primary" class="col-xs-12 col-md-9">
							<article>
								<img src="img/washington.jpg" />
								<h1 class="title">hej</h1>
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
								</ul><p></p>
							</article>
						</div>
						<?php get_sidebar();?> <!-- hämtar sidebaren från sidebar.php -->
					</div>
				</div>
			</section>
		</main>
		<?php get_footer();?> <!-- hämtar footern från footer.php -->
