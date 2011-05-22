<!-- This is page.php -->
<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

		<div id="container">
			<div id="content" role="main">

			<?php
			/* Run the loop to output the page.
			 * If you want to overload this in a child theme then include a file
			 * called loop-page.php and that will be used instead.
			 */
			get_template_part( 'loop', 'page' );
			?>

			<div id="nav-below" class="navigation">
				<div class="nav-next"><a href="/category/his-own-words/?y=2008">2008 Archives &rarr;</a></div>
			</div><!-- #nav-below -->

			</div><!-- #content -->
		</div><!-- #container -->

<?php get_sidebar(); ?>

<div style="clear:both"></div>

<?php get_footer(); ?>
