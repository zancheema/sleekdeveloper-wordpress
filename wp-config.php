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
define( 'DB_NAME', 'sleek_developer' );

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
define( 'AUTH_KEY',         '?@ZSa4~79I$N-JfOXZ]_,UnL>j3zqV-Z#AA=IJ8BRX,2(T9y)0nJb4~u!?PjI8^N' );
define( 'SECURE_AUTH_KEY',  'GkWubyk7K0=|(Sz,s[Ug#HV{R/W3]ma`At3b;l4?WKo)+?<CI##1vQ$#{[qN[tO4' );
define( 'LOGGED_IN_KEY',    't$:]dRdL!2SCY;nO6X !omI]<eG}MkBWXSs6XVy]rqHeCiFD%{t~;sXkd]>~Ex(:' );
define( 'NONCE_KEY',        'pdw*X&iE$,;q(!^dsG0h;-3tyi[^[P&*Vx%v-HO,sc]Up:P]5eczRNf+Nl!p.@/k' );
define( 'AUTH_SALT',        '1]=7ro&=CFb?NP7~-+Rh>Jwz0$#L~O#)WaJwCD|Sh)bLgB64lPy*k5-(b-,C@AO.' );
define( 'SECURE_AUTH_SALT', 'O[&vd~h<|{7RRkQ>9h#pCOw#0wqm3TE~Yy)d)_>y:FhMRWxQ!A_r}xQr!S{5B[5v' );
define( 'LOGGED_IN_SALT',   'yR!AerEt&L.Jj[MveGi9~!<LuP^mIwlq+OSCQP_qjfCLLZzV8oW,9n_`LhUTeKH ' );
define( 'NONCE_SALT',       '&L=}i1HQ:=0VB&6?%iz7KHaYn:ewa)ak[jn3?PTnX6P?lCu|V]CsQHk! !mP=C0!' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'sd_';

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
