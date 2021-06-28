<?php get_header(); ?>

<section id="blog-page">

	<div class="container">	

		<?php if(have_posts()) : ?>
			<?php while(have_posts()) : the_post(); ?>
		
			<div class="row">

				<div class="col-12">
					<h1><?php the_title(); ?></h1>
					<hr>
				</div>

			</div><!-- /.row -->	

			<div class="row">

				<div class="col-12 col-md-8 blog-main">
					<?php the_content(); ?>
				</div><!-- /.blog-main -->
				<aside class="col-12 col-md-3 offset-md-1 blog-sidebar">
					<?php if(is_active_sidebar('sidebar')): ?>
						<?php dynamic_sidebar('sidebar'); ?>
					<?php endif; ?>
				</aside><!-- /.blog-sidebar -->

			</div><!-- /.row -->
		
			<?php endwhile; ?>
			<?php else : ?>
			<p><?php __('No page found'); ?></p>
		<?php endif; ?>

	</div><!-- /.container -->

</section><!--/#blog-page-->

<?php get_footer(); ?>