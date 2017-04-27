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
	<h1 class="cover-heading">Whatever the opposite of a paywall is.</h1>
	<p class="lead">Peruse is an API integration that connects users to content and increases revenue</p>
	<p class="lead">
	  <a href="https://app.goperuse.com/signup" class="btn btn-lg btn-secondary"><span>Get Started</span></a>
	</p>
</div>

<?php get_footer('index');
