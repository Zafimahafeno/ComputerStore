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
define( 'AUTH_KEY',         '  ZNAEl7ta<F9#)G-mE}FfZ_P~#}N49^M^3C<+nlA{%ty?#<NpMNA`c!F*fQK?sd' );
define( 'SECURE_AUTH_KEY',  '[_D3q>@ Bbk$%fJP1_XLD#XF4%+joW#PJQ7)05KG!NztOCY9 ,nv*E<V7oBnqT(u' );
define( 'LOGGED_IN_KEY',    'ecuvbtA@iG$;m/@NhCrhg7![H4uM#z|6Gz7-S{L>yX6OGic3~lb0JfGmF*iSs+{M' );
define( 'NONCE_KEY',        ')+8>Ye+Q@k=|c;_&68fP<iO6f3.UFc1ay`lVYuLZ05]0%y2H]Dv7x:d<Wg{$5%_p' );
define( 'AUTH_SALT',        '!M$bs6{u^tka<<>+E(Dp42#utE3b]}@^$mAwKkESf%[.fo[bw m+CA}jVa m:CWM' );
define( 'SECURE_AUTH_SALT', 'h$x.5X1+Kj;m/v[CV0y _HjA0Qi<QC%./%6>X`ZS5R@TYSzRyjH4}P-@K >=&a}f' );
define( 'LOGGED_IN_SALT',   'xygIcF-l[tk?{!KX9A=nqn!|+3S]VAz8}W/kfa3=NfjA5uF^l0d8PxbB-4KI((VO' );
define( 'NONCE_SALT',       'n?zMZO~Lu]t~<={(0qPv3}Yl3wKfNCltOh6%d_$]Cx{G}0WgOY:CqofiJwH%-N-:' );

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
