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
define( 'DB_NAME', 'REPLACE_DB_NAME' );

/** Database username */
define( 'DB_USER', 'REPLACE_DB_USER' );

/** Database password */
define( 'DB_PASSWORD', 'REPLACE_DB_PASSWORD' );

/** Database hostname */
define( 'DB_HOST', 'REPLACE_DB_HOST' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
 *
 *
 */


define('AUTH_KEY',         '4D+0*7:fmLo&7Af}4Fox</SKMz{dfN.E%+>|Tk|4@=UzT- @7yPKOwyHN[$=@`+v');
define('SECURE_AUTH_KEY',  '+Dtl+:.,;2((1MGg.G>mVS4]/F-[xA+?ce<hChyx/xu?Vo-suF96Z6{@qo!.J;T?');
define('LOGGED_IN_KEY',    '(8Jc<CRj/rJ-^sp!lRno?q<)#(JyX D%b;[(MbZ%Z,sxe?|&/<Ng9@^fgPag*G|e');
define('NONCE_KEY',        'v[qpbp-scW=NX 1f)wKCoaQ&;~En (,ck_N9Mbf7t<vid{?7ioo]@MA.7#2l;rlp');
define('AUTH_SALT',        'PW5RYz-QJ=L08@QJr-^W4RD4twEC[T3Fw%GA-NiLbkvg{-NHp| |5Ibo=9M-P+GH');
define('SECURE_AUTH_SALT', 'uC7,UrA=mvK|kb-cZT*a^ one|z/D0-(+0{mx9Y}[(; klo7<D2U0SZQ(&>a+#K[');
define('LOGGED_IN_SALT',   '.YUuE0qHE0!RzM|LB!|]vAA-,vwDGi6ZIDTP:9^RY~R$sY3&f`pB@us^/eeCuSH3');
define('NONCE_SALT',       'd&`[eT0E-6|cp]_xl- ~xqlU5-Z J@_AT+C<x5VYQb)<T6=|B!1Jt-5+OeJOs!2j');

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
