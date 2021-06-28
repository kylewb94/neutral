<?php get_header(); ?>

<section id="blog-single">

	<div class="container">	

		<?php if(have_posts()) : ?>
			<?php while(have_posts()) : the_post(); ?>
		
			<div class="row">

				<div class="col-12">
					<h1><?php the_title(); ?></h1>
					<p>
						by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a>
						&nbsp; | &nbsp;
						<?php the_date('m.d.y'); ?>
						&nbsp; | &nbsp;
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

			</div><!-- /.row -->	

			<div class="row">

				<div class="col-12 col-md-8 blog-main">							
					<?php if(has_post_thumbnail()) : ?>
						<div class="thumbnail">
							<?php the_post_thumbnail(); ?>
							<?php echo the_post_thumbnail_caption(); ?>
						</div>	
					<?php endif; ?>
					<?php the_content(); ?>
					<div class="tags">
						Tags:
						<?php
							$posttags = get_the_tags();
							if ($posttags) {
								foreach($posttags as $tag) {
									echo '<a href="' . get_tag_link($tag->term_id) . '">#' . $tag->name . '</a> '; 
								}
							}
						?>
					</div>	
				</div><!-- /.blog-main -->
				<aside class="col-12 col-md-3 offset-md-1 blog-sidebar">
					<?php if(is_active_sidebar('sidebar')): ?>
						<?php dynamic_sidebar('sidebar'); ?>
					<?php endif; ?>
				</aside><!-- /.blog-sidebar -->

			</div><!-- /.row -->
		
			<?php endwhile; ?>
			<?php else : ?>
			<p><?php __('No posts found'); ?></p>
		<?php endif; ?>

	</div><!-- /.container -->

</section><!--/#blog-single-->

<?php get_footer(); ?>