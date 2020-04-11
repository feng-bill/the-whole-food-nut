<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

define(‘WP_TEMP_DIR’, ABSPATH . ‘wp-content/’);
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'food-nut');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost:8889');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'f30674fb80a597ee7c62c8b778169cf177894a679a17c30f8cad3fa792f4d017');
define('SECURE_AUTH_KEY', 'c9a9120a83af479f8f75b86be9b3a4d7dbd10c1ea6068e010d0cef628c8a9ac8');
define('LOGGED_IN_KEY', '9a6b3b3ff57699a07554aedd8d0785efa5b2c7fc586fa2a3d3915bba08900d2f');
define('NONCE_KEY', '3422cb1d160372a0ffce93276f5caac4f961f8420a18ad0bb700a70a77bb3709');
define('AUTH_SALT', '0ed0b43c60104b1bfd9dbc788bccdcf50f2341a4a28d740c8eae59dbed4efb58');
define('SECURE_AUTH_SALT', 'aeda44d6c56f326bc5cd1bf7415a42438c328e8cba29fb52a4e7287233e372db');
define('LOGGED_IN_SALT', '838bb9d2aa350ebfc3cebb0707c638a29e3b56b0eee352b82b8cb1e53cbfa25d');
define('NONCE_SALT', 'e0e00069bc1f9aad4633b6d0532ed98b3ff6b381e9e0d09667e8d29932e5f738');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */
/**
 * The WP_SITEURL and WP_HOME options are configured to access from any hostname or IP address.
 * If you want to access only from an specific domain, you can modify them. For example:
 *  define('WP_HOME', 'http://localhost:8888/food-nut');
 *  define('WP_SITEURL', 'http://localhost:8888/food-nut');
 *
*/

define('WP_SITEURL', 'http://localhost:8888/food-nut');
define('WP_HOME', 'http://localhost:8888/food-nut');


/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define('WP_TEMP_DIR', '/opt/bitnami/apps/wordpress/tmp');


define('FS_METHOD', 'direct');


//  Disable pingback.ping xmlrpc method to prevent Wordpress from participating in DDoS attacks
//  More info at: https://docs.bitnami.com/?page=apps&name=wordpress&section=how-to-re-enable-the-xml-rpc-pingback-feature

// remove x-pingback HTTP header
add_filter('wp_headers', function($headers) {
    unset($headers['X-Pingback']);
    return $headers;
});
// disable pingbacks
add_filter( 'xmlrpc_methods', function( $methods ) {
        unset( $methods['pingback.ping'] );
        return $methods;
});
add_filter( 'auto_update_translation', '__return_false' );
