<?php
/**
 * The footer template.
 *
 * @package Avada
 * @subpackage Templates
 */

// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}
?>
<?php do_action( 'avada_after_main_content' ); ?>

</div> <!-- fusion-row -->
</main> <!-- #main -->
<?php do_action( 'avada_after_main_container' ); ?>

<?php global $social_icons; ?>

<?php
			/**
			 * Get the correct page ID.
			 */
			$c_page_id = Avada()->fusion_library->get_page_id();
			?>

<?php
			/**
			 * Only include the footer.
			 */
			?>
<?php if ( ! is_page_template( 'blank.php' ) ) : ?>
<?php $footer_parallax_class = ( 'footer_parallax_effect' === Avada()->settings->get( 'footer_special_effects' ) ) ? ' fusion-footer-parallax' : ''; ?>

<div class="fusion-footer<?php echo esc_attr( $footer_parallax_class ); ?>">
  <?php get_template_part( 'templates/footer-content' ); ?>
</div> <!-- fusion-footer -->

<?php
				/**
				 * Add sliding bar.
				 */
				if ( Avada()->settings->get( 'slidingbar_widgets' ) ) {
					get_template_part( 'sliding_bar' );
				}
				?>
<?php endif; // End is not blank page check. ?>
</div> <!-- wrapper -->

<?php
		/**
		 * Check if boxed side header layout is used; if so close the #boxed-wrapper container.
		 */
		$page_bg_layout = 'default';
		if ( $c_page_id && is_numeric( $c_page_id ) ) {
			$fpo_page_bg_layout = get_post_meta( $c_page_id, 'pyre_page_bg_layout', true );
			$page_bg_layout     = ( $fpo_page_bg_layout ) ? $fpo_page_bg_layout : $page_bg_layout;
		}
		?>
<?php if ( ( ( 'Boxed' === Avada()->settings->get( 'layout' ) && 'default' === $page_bg_layout ) || 'boxed' === $page_bg_layout ) && 'Top' !== Avada()->settings->get( 'header_position' ) ) : ?>
</div> <!-- #boxed-wrapper -->
<?php endif; ?>
<?php if ( ( ( 'Boxed' === Avada()->settings->get( 'layout' ) && 'default' === $page_bg_layout ) || 'boxed' === $page_bg_layout ) && 'framed' === Avada()->settings->get( 'scroll_offset' ) && 0 !== intval( Avada()->settings->get( 'margin_offset', 'top' ) ) ) : ?>
<div class="fusion-top-frame"></div>
<div class="fusion-bottom-frame"></div>
<?php if ( 'None' !== Avada()->settings->get( 'boxed_modal_shadow' ) ) : ?>
<div class="fusion-boxed-shadow"></div>
<?php endif; ?>
<?php endif; ?>
<a class="fusion-one-page-text-link fusion-page-load-link"></a>
<script src="<?php echo get_template_directory_uri(); ?>/assets/min/js/main.js"></script>
<!-- <script async defer
  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC3CwcI0pih4PDmtsspVda05JbJWXypfrk&callback=initMap"
  type="text/javascript">
</script> -->
<?php wp_footer(); ?>

<?php if (is_front_page()) {
	// if (!isset($_COOKIE["visited"])) {
	// 	setcookie("visited", "beentheredonethat", time()+31500000);
?>
<script type="text/javascript" id="cookieinfo"
src="https://cdn.rawgit.com/designvkp/CookieInfoScript/68f31f13/cookieinfo.min.js"
data-bg="#003e68"
data-fg="#FFFFFF"
data-link="#27bdd3"
data-moreinfo="http://anakleapps.com/axxela-wip/privacy-policy/"
data-cookie="CookieInfoScript"
data-text-align="left"
data-close-text="Got it!">
</script>
<!-- <script type="text/javascript" id="cookieinfo"
src="https://cdn.rawgit.com/designvkp/CookieInfoScript/68f31f13/cookieinfo.min.js"
data-bg="#003e68"
data-fg="#FFFFFF"
data-link="#27bdd3"
data-message="We use cookies to enhance your experience. Click testing to lern more"
data-linkmsg= "testing"
data-moreinfo="http://anakleapps.com/axxela-wip/privacy-policy/"
data-cookie="CookieInfoScript"
data-text-align="left"
data-close-text="Got it!">
</script> -->
<?php //} ?>
<?php } ?>
</body>

</html>