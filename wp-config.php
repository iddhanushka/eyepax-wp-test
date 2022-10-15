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
define( 'DB_NAME', 'wpd_dhanushka' );

/** Database username */
define( 'DB_USER', 'wpd_user' );

/** Database password */
define( 'DB_PASSWORD', 'fIH2m)/WuaU76gik' );

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
	define('AUTH_KEY',         '-u&_*]f.[3Z^+d~IhC6&tK?;L^aR-}o~$Tdz.xb*/dmQDh{$Hfd^~P[l:[$Zkm<U');
	define('SECURE_AUTH_KEY',  'HdpmD`p[9)G:TW+( S&pUz7q)=nK%[y}+#{*D>i+I;_dal-uw})k&Inh G-IL^%*');
	define('LOGGED_IN_KEY',    'jfTC*Fskdbma&)lq?Bhl8@G.+WC/NZ[SLL]ZK<943hZwow/`yz V`*K+q!dVe;*C');
	define('NONCE_KEY',        'agm-V!_IroY!A,+aXD!om?Awv016;wZ%FZEGCn+0`E+1jD-{w4J7X-DL:U[s|15~');
	define('AUTH_SALT',        '(rH(=|o#z?3w&Wsw>oa B0M6Wc)*MLK+xg!7g~|B(ln,;?~|EhX|ph||+.aGQ(t-');
	define('SECURE_AUTH_SALT', '><olD9)QR(PLyN.PK6Ub{txu W$D{qZ;{L|:0p>!_8I--j-,-M<$J5p:4I^Kn}5r');
	define('LOGGED_IN_SALT',   ':}ZN@fuB+9KX@?PB#Vv-S0qApaQROZEYt!@b)MG8/!WG9>-6FcRzXloH&:^3.?xK');
	define('NONCE_SALT',       'Lo1Ih0f7J[U68Q^zjSaVVR.krlQMu;29q2RG@T1EvIdoD2GXz-pGaG[7vs~$85k;');

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
