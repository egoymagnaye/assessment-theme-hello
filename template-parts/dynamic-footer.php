<?php
/**
 * The template for displaying footer.
 *
 * @package HelloElementor
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$footer_nav_menu = wp_nav_menu( [
	'theme_location' => 'menu-2',
	'fallback_cb' => false,
	'echo' => false,
] );

$footer_nav_menu_2 = wp_nav_menu( [
	'theme_location' => 'menu3',
	'fallback_cb' => false,
	'echo' => false,
] );
?>
<footer id="site-footer" class="em-footer--container" role="contentinfo">
	<div class="em-footer--inner">
		<div class="em-footer--about">
			<h5><a href="/"><span>MNTN</span></a></h5>
			<p>Get out there & discover your next slope, mountain & destination!</p>
			<p>Copyright 2019 MNTN, Inc. <a href="#!">Terms</a> & <a href="#!">Privacy</a></p>
		</div>
		<div class="em-footer--menu">
			<h4>More on The Blog</h4>
			<?php echo $footer_nav_menu; ?>
		</div>
		<div class="em-footer--menu">
			<h4>More on MNTN</h4>
			<?php echo $footer_nav_menu_2; ?>
		</div>
	</div>
</footer> <!-- .em-footer--container -->
