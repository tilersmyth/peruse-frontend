<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header('index'); ?>

 <div class="inner cover">
	<?php while ( have_posts() ) : the_post();

		the_content();

	endwhile; ?>
	<p class="lead">
	  <a href="https://app.goperuse.com/signup" class="btn btn-lg btn-secondary"><span>Get Started</span></a>
	</p>
</div>

<?php get_footer('index');
