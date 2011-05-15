<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>
	</div><!-- #main -->

	<div id="footer" role="contentinfo">
		<div class="constrained">
			<div class="column">
				<?php
					/* This fetches the menu for the footer.
					 */
					get_sidebar( 'footer' );
				?>
				
				<div class="copyright">
					Design and content Copyright &copy; 2011 Andy Caress Melanoma Foundation.<br/>
					Site created by <a href="http://www.two-fish.com/">Two-Fish Cyberworks</a>.
				</div>
			</div>
			<img src="/wp-content/themes/andycaress/images/photos/andy.jpg" class="column" />
		</div>
		<div style="clear:both"></div>
		
	</div><!-- #footer -->

</div><!-- #wrapper -->

<div id="darkening"></div>


<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</body>
</html>
