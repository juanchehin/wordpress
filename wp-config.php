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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'zsml[0DeWnBhCa5KD1#ZCGw;mPtk*sSP_>3gfz>>F/7=#K{G{=[~Z>if!.jy81QR' );
define( 'SECURE_AUTH_KEY',  'h*`)3`G@ShlXJLlLS@VAQ,`F]Z*G8MXHtME(e5bSe^6(ul43[[C|b_>(}Qx2=l51' );
define( 'LOGGED_IN_KEY',    'S 0qnlvQL=_a,W`s^#<~eX>Mx<T:!DtQ@Xs{Qy FD^JpWK79Y4=V#?2L$nJh0~,7' );
define( 'NONCE_KEY',        '1D(:Gn*aT(@z13V] <txU!8+whsr3B&kjokqI$Yl5:(k!a:yLQF5_B|+e<,Z/P5K' );
define( 'AUTH_SALT',        'ucCRjR2Ui&MO<GwGy@,-f193mHJT :pR~ EkMs;XZv.<&tQj%#@>_Bg|v@Ks<A^w' );
define( 'SECURE_AUTH_SALT', '14gHSF|WVX%_M7DHaS&Tnf11n{f1J!593.)dXHt).p?2w?8S![R2&*D-xT:S(hB#' );
define( 'LOGGED_IN_SALT',   '9_Z89D{f+5q(a&F0ln@F;C_j9)a{]:IPo-g_dWM56<B@Pzc:mFlb=uv}Z_19%Fr3' );
define( 'NONCE_SALT',       'V2P.)..W%k:1.Rnx>p@uLJe<xT,Ir[ZOKMw;GVLV(#+hv27 $vF3[;;b~<QPGUv@' );

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
