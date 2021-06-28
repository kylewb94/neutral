<?php get_header(); ?>

<section id="blog-archive">

	<div class="container">

		<div class="row">

			<div class="col-12">
				<h1><?php the_archive_title(); ?></h1>
				<hr>
			</div>

		</div>	

		<div class="row">
			
			<?php if(have_posts()) : ?>
				<?php while(have_posts()) : the_post(); ?>

				<div class="col-12 col-md-6 col-lg-4 blog-post">							
					<div class="card">
						<a href="<?php the_permalink(); ?>">
							<?php if(has_post_thumbnail()) : ?>
								<div class="thumbnail">
									<?php the_post_thumbnail(); ?>
								</div>	
							<?php endif; ?>
						</a>
						<div class="card-body">
							<h3 class="card-title blog-post-title">
								<a href="<?php the_permalink(); ?>">
									<?php the_title(); ?>
								</a>	
							</h3>
							<p class="card-text blog-post-meta">
								<?php
									$categories = get_the_category();
									$output = '';
								
									if ($categories) {
										foreach ($categories as $category) {
											$output .= '<a href="' . get_category_link($category->term_id) . '">' . $category->cat_name . '</a>';
										}
										echo $output;
									}
								?>
							</p>	
						</div>
					</div>
				</div><!-- /.blog-post -->

				<?php endwhile; ?>
				<?php else : ?>
				<p><?php __('No posts found'); ?></p>
			<?php endif; ?>

		</div><!--/.row-->

	</div><!-- /.container -->

</section><!--/#blog-archive-->

<?php get_footer(); ?>