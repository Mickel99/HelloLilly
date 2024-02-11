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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'lilly' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         '.[?kf=o;e~zP@(u4Kz+AK}Jug-7;q|EH9!hMK& m>+::Sy(#ov$_X_u&*&Xytr F' );
define( 'SECURE_AUTH_KEY',  '~r+P6k3U{?eWY=IolX5+sL?aDk)GU~jKJUp!yzenq]lN*lKzgER7UQf_JI+ws0*#' );
define( 'LOGGED_IN_KEY',    '@ MPhkpa}~+ap,Xo^Aj|/zjZYz5xfsr V=ZUlBM,t(5p{!<ug?L3KhHA0:;+LyO?' );
define( 'NONCE_KEY',        ';(]!Cv.8j{mG1~{w~RO0%VRQoWvD-rf)c$z{ly3V6x: 7ZF[,l.QGj!LEgwK<5BC' );
define( 'AUTH_SALT',        'MtBHq$M E2^5K/fsJQ$3Imh],^`-I&im!Zyz.2Ha@M^e>PE?EmKLa3W484|/zmzD' );
define( 'SECURE_AUTH_SALT', '=YX5`(Q.]sutj&L^hRU|RYS2XC1}Y&sw;mA6IBl&R=,Bt$Br cx.oI>c /fzFeC5' );
define( 'LOGGED_IN_SALT',   '8zBqhGc >3k G)_n~E|Uvp1^oZ^`k+uA/@LWYN/ >.pmj7B}hhya{(Ni/i?dhvmH' );
define( 'NONCE_SALT',       'eVGRqVYLpzLG&{VTTn`4bNYgCRZgxxD:GaOs$XW-(X3Nas^X6Aj#acxH|j)i]}oQ' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
