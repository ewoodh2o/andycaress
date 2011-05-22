<?php
/**
 * The loop that displays a page.
 *
 * The loop displays the posts and the post content.  See
 * http://codex.wordpress.org/The_Loop to understand it and
 * http://codex.wordpress.org/Template_Tags to understand
 * the tags used in it.
 *
 * This can be overridden in child themes with loop-page.php.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.2
 */
?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<?php if(has_post_format('link')) : ?>
						<h2><?php the_content(); ?></h2>
					<?php elseif(has_post_format('video')) : ?>
						<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
						<div class="entry-content">
						  <?php the_content(); ?>
						</div>
					<?php else : ?>
						<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
						<div class="entry-content">
						  <?php the_excerpt(); ?>
						</div>
					<?php endif; ?>
					<div class="meta"><?php the_time('F jS, Y') ?> in <?php the_category(', '); ?></div>
				</div>
					
<?php endwhile; // end of the loop. ?>