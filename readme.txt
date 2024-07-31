=== Pronamic Pay with Rabo Smart Pay for WooCommerce ===
Contributors: pronamic
Tags: pronamic, pay, rabobank, woo, woocommerce
Requires at least: 5.9
Tested up to: 6.6
Requires PHP: 8.0
Stable tag: 1.0.0
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

#### VIES VAT number validation

If a payment via this plugin is initiated with a VAT number, this plugin will attempt to validate this VAT number via the VIES VAT number validation. The VIES VAT number validation is an online service provided by the European Union that allows businesses to verify the validity of VAT numbers issued by EU Member States. This is important for businesses that are trading with companies in other EU countries, as it helps to ensure that they are only dealing with legitimate businesses. Communication with this service is done via the [http://ec.europa.eu/taxation_customs/vies/checkVatService.wsdl](http://ec.europa.eu/taxation_customs/vies/checkVatService.wsdl) URL. The disclaimer for this service can be consulted via [https://ec.europa.eu/taxation_customs/vies/#/disclaimer](https://ec.europa.eu/taxation_customs/vies/#/disclaimer) and the privacy statement via [https://ec.europa.eu/taxation_customs/vies/rest-api/privacy-statement](https://ec.europa.eu/taxation_customs/vies/rest-api/privacy-statement).

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

= 1.0.0 =

- First release.

== Links ==

- [Pronamic Pay with Rabo Smart Pay for WooCommerce](https://www.pronamicpay.com/connections/rabo-smart-pay-for-woocommerce/)
- [Pronamic Pay manuals for Rabo Smart Pay](https://www.pronamicpay.com/manual-category/rabo-smart-pay/)
- [Pronamic](https://www.pronamic.eu/)
