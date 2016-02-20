<?php
/**
 * Sidebar
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/global/sidebar.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see 	    http://docs.woothemes.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     1.6.4
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>

<?php if(is_product()){ ?>

<?php } else {?>
	<aside class="uk-width-small-1-1 uk-width-medium-1-5 WooSidebar">
		<div data-uk-sticky="{top:100, boundary: true}">
			<div class="aside-bg">
				<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('WooSidebar')) ?>
			</div>
		</div>
	</aside>
<?php } ?>
