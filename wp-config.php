<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'blogw' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '6VyxosLYUpFhK1or0OfliIxjSMgmTd8YunDYIrEIq0sLYTaDeXgu4CiHlCjDj2jg' );
define( 'SECURE_AUTH_KEY',  '2nTA3R3X9sB5hnXgAJVI4LigqGKn71kDbJH4paE98ZUzJSSMr27STXyFiQSPW5rj' );
define( 'LOGGED_IN_KEY',    'K2P0SKqsZVNHqeTKROJvMGWePELl9mSeZHkwkijINjInzus77aoWnLYaw47vL4RY' );
define( 'NONCE_KEY',        'Guacw0IrdYKvXBszhKqTxIIbnyfnk96TG4nB21k8u00cltafkfdke7e0shGIp6Z3' );
define( 'AUTH_SALT',        'WGZHojrMhA3bxaTGNIV94wxjgsyEzsCCiJXk146T980rWCBLVDMh2tkl11CxWeCh' );
define( 'SECURE_AUTH_SALT', 'a4t8RQlVhyXhlv6aRiS1rtLzZe6mlAuBuVkxBaFwMJC781aazbGKUtKaihVzMEQT' );
define( 'LOGGED_IN_SALT',   'ePbr6P1JIessXLAv6QMRMZSXdGGHmamaPdcGSDrquZ0cx3nNxE83pgKzdfYW0Aws' );
define( 'NONCE_SALT',       'GzYC7AM6NNHNPDTkJhjaS25BrMEZPcgr9lv2TnxMexV0Yg7RLkj2Qp2d6osMMbPz' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
