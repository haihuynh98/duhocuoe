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
define( 'DB_NAME', 'dmjboyswhosting_duhocuoe' );

/** Database username */
define( 'DB_USER', 'dmjboyswhosting_duhocuoe' );

/** Database password */
define( 'DB_PASSWORD', 'FigGkm}Gl_1F' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
 */
define('AUTH_KEY',         'JgaGcf_clz.}it[7>[/^~M@|`|ncu.>f*rGG2_-jsGA^xP:|<eR;`%a(J@!S5K2d');
define('SECURE_AUTH_KEY',  '(88~.wk|zj]Eu[n6l+u#}T{-9i?6Qgw$<_ ;ZZ7GV:JR2`]apiGi (*us,)4UwdV');
define('LOGGED_IN_KEY',    '2 ?JMK-t~@DFoPcd<T-B`*%Xj_W)s7Dul/a~O iCK+`{)WSYHB J<.`vS^o~?-wH');
define('NONCE_KEY',        'p,CsG+%Cb:rh2^0dZjsGR`n^O|(Yt4NGZ5g,k$vDCrZ_NxZFCbe?wZ| ,-n(T|`|');
define('AUTH_SALT',        '}[H.+O)tQjX{BDXP~Kd?rYdt=:-z?BLO/y-dTyrzi,y(l0HpgvJr|Ncz4.T&xFz8');
define('SECURE_AUTH_SALT', '-pce)b> -/#*,1@K~>?0XEN/ .2FIx;,v3[|wFgss&r[nI-c,gFOpVd#!$oy&?)Y');
define('LOGGED_IN_SALT',   'xry`x$clFMNL&ir1u|-^>2$I8W^I<5|!gu@T!/(Z1n=hvy3/Q_o^4 vCB8s} )eN');
define('NONCE_SALT',       'lHGiMO$+zK%mOV+y;q3ZKgE5*.W~U:S2/)&zGV&XpASsmO<odU;T{Z-qJ>m}J|2H');

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
