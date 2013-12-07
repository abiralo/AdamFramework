<?php
/**
* WARNING: This file is part of the core Adam Framework. DO NOT edit
* this file under any circumstances. Please do all modifications
* in the form of a child theme.
**/

/**
Thiis the the fucntion which renders the Base WP Template Pages
**/

function adam(){

	get_header();
	?>
    
    <!--Start Primary-->
    <div id="primary">
		<div id="content" role="main">
			<?php if ( have_posts() ) : ?>

				<?php //twentyeleven_content_nav( 'nav-above' ); ?>

				<?php /* Start the Loop */ ?>
				<?php while ( have_posts() ) : the_post(); ?>

					<?php echo the_content(); ?>
					<?php get_template_part( 'content', get_post_format() ); ?>

				<?php endwhile; ?>

				<?php //twentyeleven_content_nav( 'nav-below' ); ?>

			<?php else : ?>
				adam_not_found();
			<?php endif; ?>
		</div>
	</div>
	<!--End Primary-->
    <?php

	//Get the Footer
	get_footer();
}