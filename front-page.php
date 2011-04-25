<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

		<div id="welcome">
			<div class="constrained">
				<div class="text">
					<?php
					/* Display the home page content
					 */
					 get_template_part( 'loop', 'index' );
					?>
				</div>
				<div class="photos">
					<img src="/wp-content/themes/andycaress/images/photos/andy.jpg" />
					<img src="/wp-content/themes/andycaress/images/photos/andy.jpg" />
					<img src="/wp-content/themes/andycaress/images/photos/andy.jpg" />
				</div>
			</div>
		</div>

		
		<div class="constrained">
			<div id="container">
				<div id="content" role="main">
					<h1>Recent News</h1>
					<!-- Show the recent posts that aren't his-own-words -->
					<?php
						// Create a new instance
						$second_query = new WP_Query( 'cat=-6' );
						if($second_query->have_posts() ) {
							while( $second_query->have_posts() ) 
							  {
									$second_query->the_post();
					?>
						<div class="post">
							<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
							<div class="entry">
							  <?php the_content(); ?>
							</div>
							<div class="meta"><?php the_time('F jS, Y') ?> in <?php the_category(', '); ?></div>
						</div>
					<?php
						} } else {
					?>
						<p>Sorry, there are no current news stories.</p>
					<?php
						}
						wp_reset_postdata();
					?>
				</div>
			</div>
		</div>
		
		<div style="clear:both"></div>

<?php //get_sidebar(); ?>
<?php get_footer(); ?>


