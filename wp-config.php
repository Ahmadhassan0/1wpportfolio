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
define( 'DB_NAME', '1wppro' );

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
define( 'AUTH_KEY',         'J8Gai0@!$)+ZFA%NlM*<dm#XMHs=`6x =G^RLfy+I 3V-+Otb2h!#U i]b)xt&S8' );
define( 'SECURE_AUTH_KEY',  'b/U[;]cf)NQp>yL3qe=t[@&.3++B`K5wa?[VFUV/z*38C_;tYi|/xQ,mu63zOsE~' );
define( 'LOGGED_IN_KEY',    'f##/BOjRe=omDe@;U?;bQ-F.!mksGzy#{Y ?L&usH,fL4o%2D-?1fwIQ^/8`n1#6' );
define( 'NONCE_KEY',        '~}*mz.^vJc<cHb.KWR*pb1R6pjr~Pv{+0k:<]m`9$`>XD!I#[ZJLf9K@PfYYLb>b' );
define( 'AUTH_SALT',        '+A)j*8SpV*nx71zK~1HVweE)2*4Bmk~[sXP3$#F9CG5~U?:&R7=2r,=]MKcM`*OZ' );
define( 'SECURE_AUTH_SALT', 'mDXF~IC2OJLKJT(QaCW2=ZApB,4vO$T`7kk$,3/e;*b3dqte:[i^C1)bIVCUBEmn' );
define( 'LOGGED_IN_SALT',   '7!e5VL^&ZK=3SiCGFa)pZUeid0A*k*2V1TK6>q/3/!Up_Fh!p~4V%BT/fz|P/SBz' );
define( 'NONCE_SALT',       'R)C{[p70ARM(R%I;1zQ&W.UiAB:mA?=1_9eB@[Ye@V`Yh=Og,WF^sSge,t9HDSi2' );

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
