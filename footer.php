		</main>
        
        <footer>
            
            <nav class="navbar">
				<div class="mr-auto">
					<a href="<?php echo get_theme_mod('footer_icon1link', 'https://www.linkedin.com/in/kyle-barnes-568714122/'); ?>" target="blank" rel="noreferrer">
						<i class="<?php echo get_theme_mod('footer_icon1', 'fa fa-linkedin'); ?>"></i>
					</a>
					<a href="<?php echo get_theme_mod('footer_icon2link', 'https://github.com/kylewb94'); ?>" target="blank" rel="noreferrer">
						<i class="<?php echo get_theme_mod('footer_icon2', 'fa fa-github'); ?>"></i>
					</a>
				</div>
				<div class="ml-auto">
					<p>&copy; <?php echo Date('Y'); ?> <?php bloginfo('name'); ?></p>
				</div>
			</nav><!-- /.navbar -->

        </footer>
		
		<?php wp_footer(); ?>

		<script>
		$(document).ready(function(){
			$("a.dropdown-item").addClass("animate");
			$("a.dropdown-item").addClass("slideIn");
		});
		</script>
		
	</body>
	
</html>