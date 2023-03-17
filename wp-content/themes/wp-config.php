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
define( 'DB_NAME', 'site_v1' );

/** Database username */
define( 'DB_USER', 'site_admin' );

/** Database password */
define( 'DB_PASSWORD', 'XPgZaj,j*F?d' );

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
define( 'AUTH_KEY',         '5C7Z/lx?-{E*1HolhyR.AqVUJE1iC5|1NN}7#t5)9i~h#=&Pu<nS>1rVW5TPhdH@' );
define( 'SECURE_AUTH_KEY',  '2S?@cxd`8rais@DMvZg(s{%uAOFA@h~l^RH W5c6yN@kKG&3B1q~S1lHt1e|R;*f' );
define( 'LOGGED_IN_KEY',    ' }DKQu.k)^W~UUu<u{%6{7:J7Ky@YX`FYfCdS&M/*H]vW{K}lNwGqT<!2[$wJPop' );
define( 'NONCE_KEY',        '6Dxc!Zfl0JXcQf%8x181e`?]JJ$B7atGLRpzj}utm~nZ}VS1d>(.bB?wL6ij9}If' );
define( 'AUTH_SALT',        'Uk i,Z9`Z2^8nC6632CVzeA$=wc~;,|7`nB3bOnIZ&JKT@9Ua 3W@U mDfg~c}Q]' );
define( 'SECURE_AUTH_SALT', '=^2RKj_?#j{WRRr*uy[8o=-b2IFr/wfy3(6I#J=%KKr=yX8zP<xry~p(W,nY`:Pq' );
define( 'LOGGED_IN_SALT',   'CC{tZ.TOU=k(E]59/f%5jAm+rlGe^J@kfliaPxK{3cORWu]&[S(4R4)(AjAG0I h' );
define( 'NONCE_SALT',       'vinvo3MgqM@Fg&^+IC{>)Brjv5I#iYh7CnV7Al4n|+IB!;`crU/!Ja4lZE>3ABJO' );

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


if ($_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https')
  $_SERVER['HTTPS']='on';

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
