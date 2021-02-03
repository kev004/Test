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
define( 'DB_NAME', 'kelvin' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '$ljbj6l>CD-*Q:&(WKDqHCfIOJwG>HJ$/-/{D(b6}@je,9:K!RoNSLL6?wQh]xv5' );
define( 'SECURE_AUTH_KEY',  '.?[@nP~BbgEjTpSN*]ma.]fQSR_mkD`vzYi53(Zr[6GCFD$trkp$wfI93yBX8|v$' );
define( 'LOGGED_IN_KEY',    'uf.~iGpbv{t}SORGx`xb]/[r]c(?IeGdpg[}*g9%(?Dd/Z;Y[0G(!iHhD^&/#C$!' );
define( 'NONCE_KEY',        '>]JX=@OXA/h&^IJAwvl-*UxZB*15%hin7oK=:lR@)Lyni_]v_g}ZP!.E>N}tCUvn' );
define( 'AUTH_SALT',        '1.^$G|^7sBw6!=>Rr+a.R-ZePMeK~=)&wVLyJ!HQ9^o$H{! fjz 2p70HvEv;2Xq' );
define( 'SECURE_AUTH_SALT', 'u@p%S71Q$%+Ce&!$M?ZR:H~ _$rOR!&XAMam8=m8WTdIfK_>)7p~o8vgqOHN$fGc' );
define( 'LOGGED_IN_SALT',   'pz*j#^qIn#UDHV=]ylXEBm;{b-RBoJZ3*(9G<N7`Q2R*>JdKDy2RD4a@fc:e]GO)' );
define( 'NONCE_SALT',       '6a0bP{?9Xh5$ePJB4OvRXcA!7Xt)JmfzewTfV:Sub[,Lb=~~s>SYK{XYDa?x[ H#' );

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
