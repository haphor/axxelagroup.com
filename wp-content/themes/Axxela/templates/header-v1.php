<?php
/**
 * Header-v1 template.
 *
 * @author     ThemeFusion
 * @copyright  (c) Copyright by ThemeFusion
 * @link       http://theme-fusion.com
 * @package    Avada
 * @subpackage Core
 */

// Do not allow directly accessing this file.
if ( ! defined( 'ABSPATH' ) ) {
	exit( 'Direct script access denied.' );
}
?>
<div class="fusion-header-sticky-height"></div>
<div class="fusion-header">
	<?php if( is_active_sidebar( 'secondary_menu' ) ) : ?>
	<div class="fusion-row">
		<div id="secondary_menu" class="fusion-secondary_menu">
			<?php dynamic_sidebar( 'secondary_menu' ); ?>
		</div>
	</div>
	<?php endif; ?>
	<div class="fusion-row">
		<?php if ( 'flyout' === Avada()->settings->get( 'mobile_menu_design' ) ) : ?>
			<div class="fusion-header-has-flyout-menu-content">
		<?php endif; ?>
		<?php avada_logo(); ?>
		<?php avada_main_menu(); ?>
		<?php avada_mobile_menu_search(); ?>
		<?php if ( 'flyout' === Avada()->settings->get( 'mobile_menu_design' ) ) : ?>
			</div>
		<?php endif; ?>
	</div>
</div>
