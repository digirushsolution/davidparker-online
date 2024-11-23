<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'opticals' );

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
define( 'AUTH_KEY',         'orLc?cYu,5q1o1dO1I(SI[5pV`WzS|dOr{/|T[sa,4sGrP9xZl=Fvgp`^!AI]bOi' );
define( 'SECURE_AUTH_KEY',  '2d?qwaP397Rs4E96A8_{fi>lj8:GpmDt_+DK{av%d=] k`3`8&a.fkOh{RMekyFI' );
define( 'LOGGED_IN_KEY',    'AcEb9dLNHo/bLP:(3QX;+{%Qm=%U+n&Ls]7*6,#Oc}y1tSD4U~?`z(2C/k2,lGod' );
define( 'NONCE_KEY',        '?5=G,AxPBsWxkI`D!;D?LTReYb-~VU^C9VTK;uc^v`o12)pF2&:znYD1!IWA/_lr' );
define( 'AUTH_SALT',        'y5gQM%ME?cz&|d9i.neQ>{?svTOD{`$$VL:#lq?}Z8j~z2{rrRwNM_j/f]6_AIKF' );
define( 'SECURE_AUTH_SALT', 'n[p~CtX41~+H5xY sFz|/y0&$lSmXaut]B?6~8!B(tP~7lBJsL;|X(R?>S:TL5W6' );
define( 'LOGGED_IN_SALT',   'p%<<z=GgF)~2VAmA0m$b/v<}f? IO$[Mp^NsAf7[W~lEHc:-}Q(=pO1dy4^qto>j' );
define( 'NONCE_SALT',       'S1SwF9^f427AaG?a?{?,5(~DH$c3em:%EYJ8S5Z2C1c8KDsFz&vHKxKec$c6v=:6' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
