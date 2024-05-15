<?php
/**
 * Plugin Name: Pronamic Pay with Rabo Smart Pay for WooCommerce
 * Plugin URI: https://www.pronamic.eu/plugins/pronamic-pay-with-rabo-smart-pay-for-woocommerce/
 * Description: Pronamic Pay plugin with Rabo Smart Pay for WooCommerce integration.
 *
 * Version: 1.0.0
 * Requires at least: 5.9
 * Requires PHP: 8.1
 *
 * Author: Pronamic
 * Author URI: https://www.pronamic.eu/
 *
 * Text Domain: pronamic-pay-with-rabo-smart-pay-for-woocommerce
 * Domain Path: /languages/
 *
 * Provides: wp-pay/core
 *
 * License: GPL-2.0-or-later
 *
 * GitHub URI: https://github.com/pronamic/wp-pronamic-pay-with-rabo-smart-pay-for-woocommerce
 *
 * WC requires at least: 8.0
 * WC tested up to: 8.0
 *
 * @author    Pronamic <info@pronamic.eu>
 * @copyright 2005-2023 Pronamic
 * @license   GPL-3.0-or-later
 * @package   Pronamic\WordPress\Pay
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Autoload.
 */
require_once __DIR__ . '/vendor/autoload_packages.php';

/**
 * Bootstrap.
 */
add_action(
	'plugins_loaded',
	function () {
		load_plugin_textdomain( 'pronamic-pay-with-rabo-smart-pay-for-woocommerce', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' ); 
	}
);

\Pronamic\WordPress\Pay\Plugin::instance(
	[
		'file'             => __FILE__,
		'action_scheduler' => __DIR__ . '/packages/woocommerce/action-scheduler/action-scheduler.php',
	]
);

add_filter(
	'pronamic_pay_plugin_integrations',
	function ( $integrations ) {
		$class = \Pronamic\WordPress\Pay\Extensions\WooCommerce\Extension::class;

		if ( ! array_key_exists( $class, $integrations ) ) {
			$integrations[ $class ] = new $class();
		}

		return $integrations;
	}
);

add_filter(
	'pronamic_pay_gateways',
	function ( $gateways ) {
		$gateways[] = new \Pronamic\WordPress\Pay\Gateways\OmniKassa2\Integration(
			[
				'id'      => 'rabobank-omnikassa-2',
				'name'    => 'Rabobank - Rabo Smart Pay',
				'mode'    => 'live',
				'api_url' => 'https://betalen.rabobank.nl/omnikassa-api/',
			]
		);

		$gateways[] = new \Pronamic\WordPress\Pay\Gateways\OmniKassa2\Integration(
			[
				'id'      => 'rabobank-omnikassa-2-sandbox',
				'name'    => 'Rabobank - Rabo Smart Pay - Sandbox',
				'mode'    => 'test',
				'api_url' => 'https://betalen.rabobank.nl/omnikassa-api-sandbox/',
			]
		);

		return $gateways;
	}
);

/**
 * High Performance Order Storage.
 * 
 * @link https://github.com/pronamic/pronamic-payment-gateways-fees-for-woocommerce/issues/4
 * @link https://github.com/woocommerce/woocommerce/wiki/High-Performance-Order-Storage-Upgrade-Recipe-Book#declaring-extension-incompatibility
 */
add_action(
	'before_woocommerce_init',
	function () {
		if ( class_exists( \Automattic\WooCommerce\Utilities\FeaturesUtil::class ) ) {
			\Automattic\WooCommerce\Utilities\FeaturesUtil::declare_compatibility( 'custom_order_tables', __FILE__, true );
		}
	}
);
