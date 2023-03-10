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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '89P;5|1@wZ~,9B}hs/:KRqXyJA,vC2.pL8ea3mkT{ QD{tWZbio5*n31J{@{8a{O' );
define( 'SECURE_AUTH_KEY',  'tFG:}RFzk0y[HT}oWNwJYvv(UPp85[5fyQ;E43UN#Oy>;X8@>=%|$01U`+:2y.v5' );
define( 'LOGGED_IN_KEY',    'qtsAhbX@33N#Q#<DJboTxbdEeNG9Wu%_@(nBB#9 1Kc2aCb1@a.d+tx{fhY0Xn3R' );
define( 'NONCE_KEY',        'O!e7E~=6[l<`iO{{x?0>vib.LuNvxJWYe8fh#x?%I9ypgFA52h=:5xRD;&/Dk;+<' );
define( 'AUTH_SALT',        'u=NDliTx-GcQ|Et `wAZy~-h:HD(_$rt#mbIFfN^M:ZsG*,&?X2=~I3.D wtkAS`' );
define( 'SECURE_AUTH_SALT', '=.R?xvj98=WP9r5Zt9=]&ehR2d^:y^VH{,{&]5y5L|N*k76p?<j%4[7#j>4^mZg7' );
define( 'LOGGED_IN_SALT',   '8&G~ZttE {@i`fFbMd+G/7x_nua)U$02XM`.dtYPrYM14cYv_E|^)ODn|p%Wvl[V' );
define( 'NONCE_SALT',       '{l(|gA)(xd_9mK>[WXdEwq0|,Mb+l.a!R2tx,tbj6tj@.k0jo?nL6dccj^}YxpCn' );

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
define ('DISALLOW_FILE_EDIT', true);