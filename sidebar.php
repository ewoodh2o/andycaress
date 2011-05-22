<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>

		<div id="primary" class="widget-area" role="complementary">
			<ul class="xoxo">
				
				<?php /* The following are manually crafted sidebar bits */ ?>
				<li class="widget-container widget_his_own_words_archives widget_link_list">
					<h3>His Own Words</h3>
					<ul>
						<li><a href="/category/his-own-words/?y=2008">2008 Archive</a></li>
						<li><a href="/category/his-own-words/?y=2009">2009 Archive</a></li>
						<li><a href="/category/his-own-words/?y=2010">2010 Archive</a></li>
						<li><a href="/in-his-own-words/wall">Wall</a></li>
					</ul>
				</li>

				<li class="widget-container widget_donate widget_link_list">
					<h3>Support our Cause</h3>
					<ul>
						<li><a href="/donate">Please Donate</a></li>
					</ul>
				</li>
				
				<?php /* And now, the dynamic (admin-controlled) stuff */ ?>
				<?php dynamic_sidebar( 'primary-widget-area' ) ?>

			</ul>
		</div><!-- #primary .widget-area -->
