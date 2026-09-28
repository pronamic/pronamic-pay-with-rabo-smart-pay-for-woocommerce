# Changelog

All notable changes to this project will be documented in this file.

The format is based on [Keep a Changelog](https://keepachangelog.com/en/1.0.0/),
and this project adheres to [Semantic Versioning](https://semver.org/spec/v2.0.0.html).

<!-- Start changelog -->

## [1.7.0] - 2026-09-28

### Changed

- The plugin now requires PHP 8.3 or higher.
- Subscription renewal reminders are now sent 14 days before the renewal date instead of 1 week.
- Improved reliability of scheduled background tasks (Action Scheduler).

### Fixed

- Fixed a currency mismatch error when calculating payment totals in a currency other than EUR.

### Composer

- Changed `php` from `>=8.2` to `>=8.3`.
- Changed `automattic/jetpack-autoloader` from `v5.0.21` to `v5.0.23`.
	5.0.22 started honoring the root package's `exclude-from-classmap` setting; 5.0.23 reverted this again.
	Changelog: https://github.com/Automattic/jetpack-autoloader/blob/v5.0.23/CHANGELOG.md
- Changed `pronamic/wp-money` from `2.4.5` to `2.5.0`.
	Adds an optional currency argument to `Parser::parse()`, allowing amounts to be parsed in currencies other than EUR.
	Release notes: https://github.com/pronamic/wp-money/releases/tag/v2.5.0
- Changed `woocommerce/action-scheduler` from `4.0.0` to `4.2.0`.
	Fixes a lock that could get permanently stuck, enforces unique action inserts atomically, reduces SQL queries on the admin page and adds protection against object-injection attacks in stored schedule data.
	Release notes: https://github.com/woocommerce/action-scheduler/releases/tag/4.1.0, https://github.com/woocommerce/action-scheduler/releases/tag/4.2.0
- Changed `wp-pay/core` from `v4.34.0` to `v4.35.0`.
	Changes the default subscription renewal pre-notification period to 14 days, fixes a currency mismatch exception for non-EUR payment lines and fixes errors for payments or subscriptions whose post no longer exists.
	Release notes: https://github.com/pronamic/wp-pay-core/releases/tag/v4.35.0

Full set of changes: [`1.6.0...1.7.0`][1.7.0]

[1.7.0]: https://github.com/pronamic/pronamic-pay-with-rabo-smart-pay-for-woocommerce/compare/v1.6.0...v1.7.0

## [1.6.0] - 2026-08-03

### Added

- Added Pronamic Pay default payment methods, including online banking payment methods for the Czech Republic and Slovakia.

### Composer

- Added `pronamic/pronamic-pay-default-payment-methods` version `v1.1.0`.
	Provides default payment method definitions, adding online banking payment methods for CZ and SK.
	Release notes: https://github.com/pronamic/pronamic-pay-default-payment-methods/releases/tag/v1.1.0
- Changed `automattic/jetpack-autoloader` from `v5.0.16` to `v5.0.21`.
	Maintenance release with changelog and readme updates.
	Release notes: https://github.com/Automattic/jetpack-autoloader/releases/tag/v5.0.21
- Changed `justinrainbow/json-schema` from `5.3.3` to `5.3.4`.
	Restores history lost in 5.3.3.
	Release notes: https://github.com/jsonrainbow/json-schema/releases/tag/5.3.4
- Changed `pronamic/wp-money` from `v2.4.4` to `2.4.5`.
	Throws a `CurrencyMismatchException` when adding or subtracting money with different currencies.
	Release notes: https://github.com/pronamic/wp-money/releases/tag/v2.4.5
- Changed `woocommerce/action-scheduler` from `3.9.3` to `4.0.0`.
	Major release with breaking changes to unique action scheduling and automatic purging of failed actions.
	Release notes: https://github.com/woocommerce/action-scheduler/releases/tag/4.0.0
- Changed `wp-pay-extensions/woocommerce` from `v4.14.1` to `v4.15.0`.
	Allows `woocommerce/action-scheduler` `^4.0`.
	Release notes: https://github.com/pronamic/wp-pronamic-pay-woocommerce/releases/tag/v4.15.0
- Changed `wp-pay/core` from `v4.32.0` to `v4.34.0`.
	Allows `woocommerce/action-scheduler` `^4.0` and syncs the refunded amount currency with the total amount when the refunded amount is zero.
	Release notes: https://github.com/pronamic/wp-pay-core/releases/tag/v4.34.0

Full set of changes: [`1.5.0...1.6.0`][1.6.0]

[1.6.0]: https://github.com/pronamic/pronamic-pay-with-rabo-smart-pay-for-woocommerce/compare/v1.5.0...v1.6.0

## [1.5.0] - 2026-04-02

### Changed

- Maintenance release with updated payment stack dependencies.

### Composer

- Changed `automattic/jetpack-autoloader` from `v5.0.15` to `v5.0.16`.
	Release notes: https://github.com/Automattic/jetpack-autoloader/releases/tag/v5.0.16
- Changed `wp-pay-extensions/woocommerce` from `v4.14.0` to `v4.14.1`.
	Release notes: https://github.com/pronamic/wp-pronamic-pay-woocommerce/releases/tag/v4.14.1
- Changed `wp-pay/core` from `v4.29.0` to `v4.32.0`.
	Release notes: https://github.com/pronamic/wp-pay-core/releases/tag/v4.32.0

Full set of changes: [`1.4.0...1.5.0`][1.5.0]

[1.5.0]: https://github.com/pronamic/pronamic-pay-with-rabo-smart-pay-for-woocommerce/compare/v1.4.0...v1.5.0

## [1.4.0] - 2026-01-05

### Composer

- Changed `automattic/jetpack-autoloader` from `v5.0.13` to `v5.0.15`.
	Release notes: https://github.com/Automattic/jetpack-autoloader/releases/tag/v5.0.15
- Changed `wp-pay-extensions/woocommerce` from `v4.13.0` to `v4.14.0`.
	Release notes: https://github.com/pronamic/wp-pronamic-pay-woocommerce/releases/tag/v4.14.0
- Changed `wp-pay-gateways/omnikassa-2` from `v4.9.2` to `v4.10.0`.
	Release notes: https://github.com/pronamic/wp-pronamic-pay-rabo-smart-pay/releases/tag/v4.10.0
- Changed `wp-pay/core` from `v4.28.0` to `v4.29.0`.
	Release notes: https://github.com/pronamic/wp-pay-core/releases/tag/v4.29.0

Full set of changes: [`1.3.3...1.4.0`][1.4.0]

[1.4.0]: https://github.com/pronamic/pronamic-pay-with-rabo-smart-pay-for-woocommerce/compare/v1.3.3...v1.4.0

## [1.3.3] - 2025-11-17

### Composer

- Changed `automattic/jetpack-autoloader` from `v5.0.12` to `v5.0.13`.
	Release notes: https://github.com/Automattic/jetpack-autoloader/releases/tag/v5.0.13
- Changed `wp-pay/core` from `v4.27.1` to `v4.28.0`.
	Release notes: https://github.com/pronamic/wp-pay-core/releases/tag/v4.28.0

Full set of changes: [`1.3.2...1.3.3`][1.3.3]

[1.3.3]: https://github.com/pronamic/pronamic-pay-with-rabo-smart-pay-for-woocommerce/compare/v1.3.2...v1.3.3

## [1.3.2] - 2025-11-11

### Composer

- Changed `automattic/jetpack-autoloader` from `v5.0.10` to `v5.0.12`.
	Release notes: https://github.com/Automattic/jetpack-autoloader/releases/tag/v5.0.12
- Changed `wp-pay-gateways/omnikassa-2` from `v4.9.1` to `v4.9.2`.
	Release notes: https://github.com/pronamic/wp-pronamic-pay-rabo-smart-pay/releases/tag/v4.9.2

Full set of changes: [`1.3.1...1.3.2`][1.3.2]

[1.3.2]: https://github.com/pronamic/pronamic-pay-with-rabo-smart-pay-for-woocommerce/compare/v1.3.1...v1.3.2

## [1.3.1] - 2025-09-17

### Removed

- Removed "VIES VAT number validation", no longer used ([061414d](https://github.com/pronamic/pronamic-pay-with-rabo-smart-pay-for-woocommerce/commit/061414ddee01e46d21136141598032216f8cbae7))

### Changed

- Changed `automattic/jetpack-autoloader` from `v5.0.9` to `v5.0.10`.
	Release notes: https://github.com/Automattic/jetpack-autoloader/releases/tag/v5.0.10
- Changed `wp-pay/core` from `v4.27.0` to `v4.27.1`.
	Release notes: https://github.com/pronamic/wp-pay-core/releases/tag/v4.27.1

Full set of changes: [`1.3.0...1.3.1`][1.3.1]

[1.3.1]: https://github.com/pronamic/pronamic-pay-with-rabo-smart-pay-for-woocommerce/compare/v1.3.0...v1.3.1

## [1.3.0] - 2025-08-22

### Composer

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

## [1.2.0] - 2025-06-19

### Composer

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

## [1.1.0] - 2025-02-25

### Commits

- Removed iDEAL issuer selection for Rabo Smart Pay. ([9916e49](https://github.com/pronamic/wp-pronamic-pay-rabo-smart-pay/commit/9916e49529d25cb61e3a669c5774acb8a9d62b1c))
- Tested up to WordPress version 6.7. ([fe42ba1](https://github.com/pronamic/pronamic-pay-with-rabo-smart-pay-for-woocommerce/commit/fe42ba15ea5126d06923080ea9033328f5d9d97d))

### Composer

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

## [1.0.0] - 2023-06-06

- First release.

[1.0.0]: https://github.com/pronamic/pronamic-pay-with-rabo-smart-pay-for-woocommerce/releases/tag/v1.0.0

<!-- End changelog -->
