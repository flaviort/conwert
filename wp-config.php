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
define( 'DB_NAME', 'conwert' );

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
define( 'AUTH_KEY',         '&Oz#{70Jz}?[x`EcW@~N{a&59n>z|((bFs$KN8olU{t{m^Z+$!_I[9sm3Ko:fND#' );
define( 'SECURE_AUTH_KEY',  'x%MU?3N*,1L7Fa*o!umra%]jnxEJ5Ij<NLr$G!SuF}_D5W!<{(SMv@.;pvaT4?kg' );
define( 'LOGGED_IN_KEY',    'gU2|dl`-qNGYGg9Rk>XB]wc]4)|c8!_iou]6C4:=,K#|0Ozfu3Y?#fOsuF% jA]*' );
define( 'NONCE_KEY',        '-O]L`{:3#-VSJ&YcR1oCO^|#%> 6#QurNkU#X_@CgVSdoG.,8 azl+.;Av9b`S1&' );
define( 'AUTH_SALT',        'kD/v%B.07E3VCGP)QUwrj)[*vl33I*Xq1i[* /P#k%Z*g7N(GuG7= ).kX)4!/F4' );
define( 'SECURE_AUTH_SALT', '4Mdv0lKpF1:Q&kRB(RM#7R%cv}@7hZ_kuxz)Y.b l8IzSXGh&iy#[SDt]D3j95fv' );
define( 'LOGGED_IN_SALT',   '{ZnB[td+OhVst+A!!0wW~fw-iavVQZpI%0l7~$z0UO/in@-%HE5[n}Df4!]X5xzU' );
define( 'NONCE_SALT',       'Wb;o@!^5i0Vfs_)nAD?9+9s3`J52{=z<a,;(AMHd9:p^gP9`HWXq-^}{.5u%b`AR' );

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

define('FS_METHOD', 'direct');