<!doctype html>

<html <?php language_attributes(); ?>>
	
    <head>
		
        <meta charset="<?php bloginfo('charset'); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
		<title>
			<?php bloginfo('name'); ?> |
			<?php is_front_page() ? bloginfo('description') : wp_title(); ?>
		</title>
		
		<meta name="description" content="<?php bloginfo('description') ?>">
		
		<?php wp_head(); ?>
		
    </head>
	
    <body>
        
		<header>
            
			<nav class="navbar navbar-expand-lg" role="navigation">
				<div class="container-fluid">
					<a class="navbar-brand" href="<?php echo get_home_url(); ?>"><?php bloginfo('name'); ?></a>
					<p id="subtitle"><?php bloginfo('description'); ?></p>	
					<div class="navbar-nav ml-auto animate slideIn">
						<?php
							wp_nav_menu( array(
								'theme_location'  => 'primary',
								'depth'           => 2,
								'container'       => 'div',
								'container_class' => 'navbar-nav ml-auto',
								'container_id'    => '',
								'menu_class'      => 'navbar-nav navbar-expand-lg',
								'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
								'walker'          => new WP_Bootstrap_Navwalker(),
							));
						?>	
					</div><!--/.navbar-nav-->
				</div><!--/.container-fluid-->	
            </nav><!--/#navbar-->
			
        </header>
		
		<main>