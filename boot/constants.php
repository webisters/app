<?php
/*
 * This file is part of App Project.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
/**
 * @package app
 */
/**
 * The current environment name.
 */
if (!defined('ENVIRONMENT')) {
	define('ENVIRONMENT', $_SERVER['ENVIRONMENT'] ?? 'production');
}
/**
 * True if it is in development environment, otherwise false.
 */
if (!defined('IS_DEV')) {
	define('IS_DEV', ENVIRONMENT === 'development');
}
/**
 * Path to the root directory.
 */
if (!defined('ROOT_DIR')) {
	define('ROOT_DIR', dirname(__DIR__) . \DIRECTORY_SEPARATOR);
}
/**
 * Path to the app directory.
 */
if (!defined('APP_DIR')) {
	define('APP_DIR', ROOT_DIR . 'app' . \DIRECTORY_SEPARATOR);
}
/**
 * Path to the bin directory.
 */
if (!defined('BIN_DIR')) {
	define('BIN_DIR', ROOT_DIR . 'bin' . \DIRECTORY_SEPARATOR);
}
/**
 * Path to the boot directory.
 */
if (!defined('BOOT_DIR')) {
	define('BOOT_DIR', ROOT_DIR . 'boot' . \DIRECTORY_SEPARATOR);
}
/**
 * Path to the config directory.
 */
if (!defined('CONFIG_DIR')) {
	define('CONFIG_DIR', ROOT_DIR . 'config' . \DIRECTORY_SEPARATOR);
}
/**
 * Path to the public directory.
 */
if (!defined('PUBLIC_DIR')) {
	define('PUBLIC_DIR', ROOT_DIR . 'public' . \DIRECTORY_SEPARATOR);
}
/**
 * Path to the storage directory.
 */
if (!defined('STORAGE_DIR')) {
	define('STORAGE_DIR', ROOT_DIR . 'storage' . \DIRECTORY_SEPARATOR);
}
/**
 * Path to the vendor directory.
 */
if (!defined('VENDOR_DIR')) {
	define('VENDOR_DIR', ROOT_DIR . 'vendor' . \DIRECTORY_SEPARATOR);
}
/**
 * Path to the webisters directory.
 */
if (!defined('WEBISTERS_DIR')) {
	define('WEBISTERS_DIR', VENDOR_DIR . 'webisters' . \DIRECTORY_SEPARATOR);
}
