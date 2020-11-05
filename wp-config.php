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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'axxela_new' );

/** MySQL database username */
define( 'DB_USER', 'gas_new' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wX4hdYDGfmHtXXtA' );

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
define( 'AUTH_KEY',         'RB]B+e5;(LzB*]|x?~oRze0` JDTc=MbSE2}pLhwCV>(n~7YBUnaf2w3a1@S27G9' );
define( 'SECURE_AUTH_KEY',  'X}[-o1h[zV@3b%k[4q!w+!Z%L#Pb6K_Cj$Ytj4dq%wa}ol^<1,TiM]j78pmO[y:1' );
define( 'LOGGED_IN_KEY',    'RPGV>l:pBaVW4=Df#p3ZPoTR2-lUB1K;!A<m?$k{t0.K4-~G.];2T=X1kM(nL}a#' );
define( 'NONCE_KEY',        'm-rg=bAzqnWR#ctI+:#!9p<#D^b]WUp<--JuQaJ<Z/l8|s/c[@=wm?08rFkPtq_ ' );
define( 'AUTH_SALT',        '2@e+E?sYUy}u.deX_K i=*#/R~Rc. N9]P<BBUX[+vH#=J+QaI*i!Uz?eQm-g!d~' );
define( 'SECURE_AUTH_SALT', 'ij$Aw7L(pfM9y#L^w#^pr0f`kS)!=B:0Cw< -/ So+jXGMRKf=-Rpw|C+`xMxuS1' );
define( 'LOGGED_IN_SALT',   'h#MkdEPia79aUE-m4AZ,(OA^-l535d8*|+8,=7r,NT55coYigi=``~ez+&.~s7n2' );
define( 'NONCE_SALT',       'pN7;ei;)zw^*Q0uFI;b%hZ@+6 ,u=bX{EE?c%t@=KrdI@JOg~A*.9>v?>r4t-+d]' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */
define('FS_METHOD','direct');

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
