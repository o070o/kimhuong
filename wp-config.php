<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'vietbox' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '^,)ImE-2u@xYDVWI`mH1fe,VE7((?B2nLsrJ]i/LJ3`JG@Uz}92W<Jp}=yk`C~li' );
define( 'SECURE_AUTH_KEY',  '|RbOfg$2*%e~<,LouS!b2d+.9pSD2{ijD`00nFlrhIKq8oX@x9=DAfj9`_y<F_+M' );
define( 'LOGGED_IN_KEY',    '1@!lIDX{>3zV~Vc!|r*/wIu f5-E{4egc%-%}i+C}ACs%6Rj`Z(%.8g|y@Da-*0u' );
define( 'NONCE_KEY',        ':SFzg>sdsBb)v0K&Yx 07B%!;3D/91EQ:skLt(NRPv1N(pi-%`E|SVK{YO!HB?MS' );
define( 'AUTH_SALT',        'mGLI)!>,<-cT/@J=E1MG&`b!xg;wi7,C;(tz#<R&!.24r=oB^O&-hxtj`+v.OVl7' );
define( 'SECURE_AUTH_SALT', 'ZOs:^=9pFp11[y~m_,xDgBi-~pn $n-l]-+gM?`.-1=oa~W7nkQ`^O,RnYaRGP7C' );
define( 'LOGGED_IN_SALT',   'oNXH($?]AYx>HP!<]UDqQ|.Nvi{Q}G?5oTFv&dCS 9?S-fjR?C}#]/G#!z^l}7I_' );
define( 'NONCE_SALT',       '+h}HbVu#aQkedPLbQ5J{KH,]:DYX&O M$o3VCdEhF2m7j-TX>e41{;b}>C( b7?x' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
