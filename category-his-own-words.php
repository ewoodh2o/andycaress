<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>


 <?php 
		$year = $_GET['y'];
		if($year != '2008' && $year != '2009' && $year != '2010') { $year = '2008'; }
		query_posts( 'cat=6&posts_per_page=-1&year=2008&order=ASC&orderby=date&year='.$year );
	?>

		<div id="container">
			<div id="content" role="main">

				<h1 class="page-title"><?php echo single_cat_title( '', false ) ?></h1>
				<?php
					$category_description = category_description();
					if ( ! empty( $category_description ) )
						echo '<div class="archive-meta">' . $category_description . '</div>';

				/* Run the loop for the category page to output the posts.
				 * If you want to overload this in a child theme then include a file
				 * called loop-category.php and that will be used instead.
				 */
				get_template_part( 'loop', 'category' );
				?>

				<div id="nav-below" class="navigation">
					<?php if($year == '2008') : ?>
						<div class="nav-previous"><a href="/in-his-own-words">&larr; Introduction</a></div>
						<div class="nav-next"><a href="/category/his-own-words/?y=2009">2009 Archives &rarr;</a></div>
					<?php elseif($year == '2009') : ?>
						<div class="nav-previous"><a href="/category/his-own-words/?y=2008">&larr; 2008 Archives</a></div>
						<div class="nav-next"><a href="/category/his-own-words/?y=2010">2010 Archives &rarr;</a></div>
					<?php elseif($year == '2010') : ?>
						<div class="nav-previous"><a href="/category/his-own-words/?y=2009">&larr; 2009 Archives</a></div>
					<?php endif; ?>
				</div><!-- #nav-below -->

			</div><!-- #content -->
		</div><!-- #container -->

<?php get_sidebar(); ?>

<div style="clear:both"></div>

<?php get_footer(); ?>
