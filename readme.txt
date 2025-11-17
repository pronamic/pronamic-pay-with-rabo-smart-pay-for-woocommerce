=== Pronamic Pay with Rabo Smart Pay for WooCommerce ===
Contributors: pronamic
Tags: pronamic, pay, rabobank, woo, woocommerce
Requires at least: 5.9
Tested up to: 6.8
Requires PHP: 8.2
Stable tag: 1.3.3
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Connect Rabo Smart Pay to WooCommerce with Pronamic Pay. This free plugin is all that you need to start selling with WooCommerce.

== Description ==

[Pronamic Pay](https://www.pronamicpay.com/) · [Pronamic](https://www.pronamic.eu/) · [GitHub](https://github.com/pronamic/pronamic-pay-with-rabo-smart-pay-for-woocommerce)

Connect Rabo Smart Pay to WooCommerce with Pronamic Pay. This free plugin is all that you need to start selling with WooCommerce. After onboarding with Rabo Smart Pay you can integrate all major payment methods in WooCommerce. Simply activate the desired payment methods and you can add them to your checkout.

https://youtu.be/KCsrFRRJT9U

### Features

This plugin is developed from the idea that online payments should be easy. Some of the features:

- Easy install
- Support for most major payment methods
- Payment status pages
- Automatic payment status updates via Rabo Smart Pay webhooks and the WordPress REST API
- High quality support
- Built by Pronamic

### External services

This plugin uses a number of external services to initiate payments. These are documented below with a link to the service's Terms of Use.

#### Rabo Smart Pay API

This plugin provides the link between the shop plugin WooCommerce and Rabo Smart Pay. To communicate with Rabo Smart Pay, this plugin connects to the Rabo Smart Pay API via [https://betalen.rabobank.nl/omnikassa-api/](https://betalen.rabobank.nl/omnikassa-api/) (production) or [https://betalen.rabobank.nl/omnikassa-api-sandbox/](https://betalen.rabobank.nl/omnikassa-api-sandbox/) (sandbox). The documentation for the Rabo Smart Pay API can be found at [https://developer.rabobank.nl/rabo-smart-pay-online-payment-api](https://developer.rabobank.nl/rabo-smart-pay-online-payment-api), Rabobank's privacy statement can be found at [https://www.rabobank.com/privacy](https://www.rabobank.com/privacy). From your WordPress website, customer and payment data can be passed on to Rabo Smart Pay for setting up and processing payments.

### Pronamic Pay Premium

With a Pronamic Pay Premium license, you get access to exceptional support and a range of exclusive benefits that take your payment experience to the next level.

#### Premium support

- **Fast and expert help** from our team of specialists.
- **Priority treatment** for your support tickets.

#### Premium add-ons

- **Pronamic Pay Fundraising Add-On**
  Easily create online fundraising and crowdfunding campaigns.
- **Pronamic Pay Notification Add-On**
  Set up extensive notifications for payers and administrators.
- **Pronamic Pay WP All Export Add-On**
  Export all your payment data with a few clicks.

And much more!

Discover all the benefits of Pronamic Pay Premium at [https://www.pronamicpay.com/](https://www.pronamicpay.com/).

**Upgrade to Pronamic Pay Premium now and take advantage of all the benefits!**

== Installation ==

1. To install this plugin you can follow the WordPress documentation section "[Installing Plugins](https://wordpress.org/documentation/article/manage-plugins/#installing-plugins-1)".

== Screenshots ==

1. Payment Gateway Configurations
2. Edit Payment Gateway Configuration

== Changelog ==

<!-- Start changelog -->

### [1.3.3] - 2025-11-17

#### Composer

- Changed `automattic/jetpack-autoloader` from `v5.0.12` to `v5.0.13`.
	Release notes: https://github.com/Automattic/jetpack-autoloader/releases/tag/v5.0.13
- Changed `wp-pay/core` from `v4.27.1` to `v4.28.0`.
	Release notes: https://github.com/pronamic/wp-pay-core/releases/tag/v4.28.0

Full set of changes: [`1.3.2...1.3.3`][1.3.3]

[1.3.3]: https://github.com/pronamic/pronamic-pay-with-rabo-smart-pay-for-woocommerce/compare/v1.3.2...v1.3.3

### [1.3.2] - 2025-11-11

#### Composer

- Changed `automattic/jetpack-autoloader` from `v5.0.10` to `v5.0.12`.
	Release notes: https://github.com/Automattic/jetpack-autoloader/releases/tag/v5.0.12
- Changed `wp-pay-gateways/omnikassa-2` from `v4.9.1` to `v4.9.2`.
	Release notes: https://github.com/pronamic/wp-pronamic-pay-rabo-smart-pay/releases/tag/v4.9.2

Full set of changes: [`1.3.1...1.3.2`][1.3.2]

[1.3.2]: https://github.com/pronamic/pronamic-pay-with-rabo-smart-pay-for-woocommerce/compare/v1.3.1...v1.3.2

### [1.3.1] - 2025-09-17

#### Removed

- Removed "VIES VAT number validation", no longer used ([061414d](https://github.com/pronamic/pronamic-pay-with-rabo-smart-pay-for-woocommerce/commit/061414ddee01e46d21136141598032216f8cbae7))

#### Changed

- Changed `automattic/jetpack-autoloader` from `v5.0.9` to `v5.0.10`.
	Release notes: https://github.com/Automattic/jetpack-autoloader/releases/tag/v5.0.10
- Changed `wp-pay/core` from `v4.27.0` to `v4.27.1`.
	Release notes: https://github.com/pronamic/wp-pay-core/releases/tag/v4.27.1

Full set of changes: [`1.3.0...1.3.1`][1.3.1]

[1.3.1]: https://github.com/pronamic/pronamic-pay-with-rabo-smart-pay-for-woocommerce/compare/v1.3.0...v1.3.1

### [1.3.0] - 2025-08-22

#### Composer

- Changed `php` from `>=8.1` to `>=8.2`.
- Changed `automattic/jetpack-autoloader` from `v5.0.7` to `v5.0.9`.
	Release notes: https://github.com/Automattic/jetpack-autoloader/releases/tag/v5.0.9
- Changed `woocommerce/action-scheduler` from `3.9.2` to `3.9.3`.
	Release notes: https://github.com/woocommerce/action-scheduler/releases/tag/3.9.3
- Changed `wp-pay-extensions/woocommerce` from `v4.12.1` to `v4.13.0`.
	Release notes: https://github.com/pronamic/wp-pronamic-pay-woocommerce/releases/tag/v4.13.0
- Changed `wp-pay/core` from `v4.26.0` to `v4.27.0`.
	Release notes: https://github.com/pronamic/wp-pay-core/releases/tag/v4.27.0

Full set of changes: [`1.2.0...1.3.0`][1.3.0]

[1.3.0]: https://github.com/pronamic/pronamic-pay-with-rabo-smart-pay-for-woocommerce/compare/v1.2.0...v1.3.0

### [1.2.0] - 2025-06-19

#### Composer

- Changed `automattic/jetpack-autoloader` from `v3.1.3` to `v5.0.7`.
	Release notes: https://github.com/Automattic/jetpack-autoloader/releases/tag/v5.0.7
- Changed `composer/installers` from `v2.3.0` to `v2.3.0`.
	Release notes: https://github.com/composer/installers/releases/tag/v2.3.0
- Changed `woocommerce/action-scheduler` from `3.9.2` to `3.9.2`.
	Release notes: https://github.com/woocommerce/action-scheduler/releases/tag/3.9.2
- Changed `wp-pay-extensions/woocommerce` from `v4.11.0` to `v4.12.1`.
	Release notes: https://github.com/pronamic/wp-pronamic-pay-woocommerce/releases/tag/v4.12.1
- Changed `wp-pay-gateways/omnikassa-2` from `v4.9.0` to `v4.9.1`.
	Release notes: https://github.com/pronamic/wp-pronamic-pay-rabo-smart-pay/releases/tag/v4.9.1
- Changed `wp-pay/core` from `v4.25.0` to `v4.26.0`.
	Release notes: https://github.com/pronamic/wp-pay-core/releases/tag/v4.26.0

Full set of changes: [`1.1.0...1.2.0`][1.2.0]

[1.2.0]: https://github.com/pronamic/pronamic-pay-with-rabo-smart-pay-for-woocommerce/compare/v1.1.0...v1.2.0

### [1.1.0] - 2025-02-25

#### Commits

- Removed iDEAL issuer selection for Rabo Smart Pay. ([9916e49](https://github.com/pronamic/wp-pronamic-pay-rabo-smart-pay/commit/9916e49529d25cb61e3a669c5774acb8a9d62b1c))
- Tested up to WordPress version 6.7. ([fe42ba1](https://github.com/pronamic/pronamic-pay-with-rabo-smart-pay-for-woocommerce/commit/fe42ba15ea5126d06923080ea9033328f5d9d97d))

#### Composer

- Changed `automattic/jetpack-autoloader` from `v3.0.8` to `v3.1.3`.
	Release notes: https://github.com/Automattic/jetpack-autoloader/releases/tag/v3.1.3
- Changed `composer/installers` from `v2.2.0` to `v2.3.0`.
	Release notes: https://github.com/composer/installers/releases/tag/v2.3.0
- Changed `woocommerce/action-scheduler` from `3.8.0` to `3.9.2`.
	Release notes: https://github.com/woocommerce/action-scheduler/releases/tag/3.9.2
- Changed `wp-pay-extensions/woocommerce` from `dev-main` to `v4.11.0`.
	Release notes: https://github.com/pronamic/wp-pronamic-pay-woocommerce/releases/tag/v4.11.0
- Changed `wp-pay-gateways/omnikassa-2` from `dev-main` to `v4.9.0`.
	Release notes: https://github.com/pronamic/wp-pronamic-pay-rabo-smart-pay/releases/tag/v4.9.0
- Changed `wp-pay/core` from `dev-main` to `v4.25.0`.
	Release notes: https://github.com/pronamic/wp-pay-core/releases/tag/v4.25.0

Full set of changes: [`1.0.0...1.1.0`][1.1.0]

[1.1.0]: https://github.com/pronamic/pronamic-pay-with-rabo-smart-pay-for-woocommerce/compare/v1.0.0...v1.1.0

### [1.0.0] - 2023-06-06

- First release.

[1.0.0]: https://github.com/pronamic/pronamic-pay-with-rabo-smart-pay-for-woocommerce/releases/tag/v1.0.0

<!-- End changelog -->

== Links ==

- [Pronamic Pay with Rabo Smart Pay for WooCommerce](https://www.pronamicpay.com/connections/rabo-smart-pay-for-woocommerce/)
- [Pronamic Pay manuals for Rabo Smart Pay](https://www.pronamicpay.com/manual-category/rabo-smart-pay/)
- [Pronamic](https://www.pronamic.eu/)
