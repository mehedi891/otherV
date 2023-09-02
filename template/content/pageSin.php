<?php
/**
 * Template part for displaying page content in page.php
 *
 *
 */

?>
	<?php get_template_part('template/template-parts/breadcrumbs','page');?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >



	<div class="entry-content">
		<?php
		the_content(); ?>
        </div>




</article><!-- #post-<?php the_ID(); ?>
