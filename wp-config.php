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
define( 'DB_NAME', 'covid' );

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
define( 'AUTH_KEY',         'U7~x~n7Ov:p_IX.Dvrux+~f[bJ:fdi?]Ld:]xBd)F]T?GTyFZXc`j]y5O}wilv$w' );
define( 'SECURE_AUTH_KEY',  'VzYvNt_;lVeiSOR<l)UKYO:Eb3tD!L1Vtajs(AAy_X<S`nu;gy@,c,9XPUgyHhIC' );
define( 'LOGGED_IN_KEY',    '?ufa{jYGh-$!~9cu2*o3vG3Vzq;Oh*?IoH>x:YA,%ZNBq ark`(>C7z/(me9WJT-' );
define( 'NONCE_KEY',        '0N|h#B{/gIsn.:F;*aq:oE;e]o2(-M>t];iHvu]<r (#.eJt-0bP}}]ZX/YR2<D*' );
define( 'AUTH_SALT',        'E#(/^pMvtLO/{(I{uC!e)69cv@*bn,|egEuN_qC75W&^Z#F6Z?OA`.`EUF7lE~~S' );
define( 'SECURE_AUTH_SALT', 'YY=heq@tGPucGOgCYXS@L_FduM.;^*o1qUHDy@wfgdyhTk=2-0_#Ug/IJs!vNqE0' );
define( 'LOGGED_IN_SALT',   '&TXQI)Tw.FdL{e>CVQ4SF7WUtX/0IN[5[k7ZLsqrB}BRFy?wCj-L$|}H.M$7Q?W7' );
define( 'NONCE_SALT',       '!i< K<EP,8ouN<9uTrmg7BVHXARuuY;EAS<#hwf0h+av;RA|Wwm4Dcr(:F+Y4;^i' );

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

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
