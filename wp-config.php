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
define( 'DB_NAME', 'cg_base' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'beVhi;wu#0NhHMS#/d7+65TFG-%v?5btr`;+zyGhgq @#BMBL:xib[!?`CH{Lt)*' );
define( 'SECURE_AUTH_KEY',  'h-*0FKvfUTTR((1,4hfJ,gK+Fs{H%UBluVphEdu1DG0uS7bug0WKF8LttIY36aL=' );
define( 'LOGGED_IN_KEY',    'Y;W1>st>H<dq<E+ZBKC<[jYN,)B7hODFB1]K5B9*sz*9-]zTMxpY5B,G)Azgndo;' );
define( 'NONCE_KEY',        'Q]av,/>ZDR[Y*5.7e]VGbeS5y|h2V-h=ttoGPq3K[aq/?_4La3Rx~l49k!n<PB#c' );
define( 'AUTH_SALT',        'G,2Y52_pT}io+7*i_p@B6n0OqdQg;(|6eatn3!7w?qW)$#s1&uUyuPtDewXFh$UY' );
define( 'SECURE_AUTH_SALT', '. I}~T8oLsR[zVqOX+&#KLLV `}q63|N+c~>_DnuPwTh??]7V CF6cUx~7VS{5{R' );
define( 'LOGGED_IN_SALT',   's}C,vM#.Cqsr@PRx)QO]Rcg4l7iOkd<[*|3(1B4b%[?g:yED#$v,[ch6w,$XuM&@' );
define( 'NONCE_SALT',       '[p|A[N9~ag<xd~h- O--b:mE6($&U)>=cX%<][V32~_ %c9;U#htm3QqDc1*=y!I' );

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
