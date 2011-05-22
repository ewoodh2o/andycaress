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

				<div id="donation_widget">
					<script type="text/javascript"> 
					function validateAmount(amount){
						if(amount.value.match( /^[0-9]+(\.([0-9]+))?$/)){
							return true;
						}else{
							alert('You must enter a valid donation.');
							amount.focus();
							return false;
						}
					}
					</script>
					<form action="https://checkout.google.com/cws/v2/Donations/340965032199883/checkoutForm" id="BB_BuyButtonForm" method="post" name="BB_BuyButtonForm" onSubmit="return validateAmount(this.item_price_1)" target="_top">
					    <input name="item_name_1" type="hidden" value="General Fund"/>
					    <input name="item_description_1" type="hidden" value="Helps to advance the goals of the Andy Caress Melanoma Foundation"/>
					    <input name="item_quantity_1" type="hidden" value="1"/>
					    <input name="item_currency_1" type="hidden" value="USD"/>
					    <input name="item_is_modifiable_1" type="hidden" value="true"/>
					    <input name="item_min_price_1" type="hidden" value="10.0"/>
					    <input name="item_max_price_1" type="hidden" value="25000.0"/>
					    <input name="_charset_" type="hidden" value="utf-8"/>
					    <table cellpadding="5" cellspacing="0" width="1%">
					        <tr>
					            <td align="right" nowrap="nowrap" width="1%">&#x24; <input id="item_price_1" name="item_price_1" onfocus="this.style.color='black'; this.value='';" size="6" type="text" value="100.00"/>
					            </td>
					            <td align="left" width="1%">
					                <input alt="Donate" src="https://checkout.google.com/buttons/donateNow.gif?merchant_id=340965032199883&amp;w=115&amp;h=50&amp;style=white&amp;variant=text&amp;loc=en_US" type="image"/>
					            </td>
					        </tr>
					    </table>
					</form>
				</div>


			<?php
			/* Run the loop to output the page.
			 * If you want to overload this in a child theme then include a file
			 * called loop-page.php and that will be used instead.
			 */
			get_template_part( 'loop', 'page' );
			?>

			</div><!-- #content -->
		</div><!-- #container -->

<?php get_sidebar(); ?>

<div style="clear:both"></div>

<?php get_footer(); ?>
