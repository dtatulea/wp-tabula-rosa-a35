	<div id="left-col">
		<?php custom_nav_menu(); ?>


		<div id="sidebar">


			<?php 	/* Widgetized sidebar, if you have the plugin installed. */
					if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('main_sidebar') ) : ?>
			
		<?php endif; ?>
		</div>
	</div>

