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
define( 'DB_NAME', 'patagonia' );

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
define( 'AUTH_KEY',         'nb>qy9@ZOn#8dy~bNx4]pVAz/=``_bo}{?P2F~1B4q]--[KYka> Nh:eSse|?;aT' );
define( 'SECURE_AUTH_KEY',  'WEmDK%9Qn5H el7~ov9!#y{C+yJe*:wzmO8sBU$k8$USL!jlqXr}H_N<[Y#>6 0f' );
define( 'LOGGED_IN_KEY',    ':o9VBQH:-{8!w2Z}>-`>a8[d-5J@Ey$lHCDX0&8pky8n|,|w=~Vwb3Ia7:pZM1./' );
define( 'NONCE_KEY',        '4`ID#l33+^)]) BvCFL/6~%j<Y+#3,Wk@ /F6#(=MBbHbdJbJ1#GWin0-e0x@fxZ' );
define( 'AUTH_SALT',        '_X/HzwDy{HR(z!SC+&kC<32m;4RtLopy<te]S(a~Kr~V?1@+f*oK*LmPXLaTv!_a' );
define( 'SECURE_AUTH_SALT', '=eD59RDn4[C3m~|YfNN<b;g]V7oh-;QF!Ynq=L%6P=A{V{c%;Bf3rH e7]oSDzL^' );
define( 'LOGGED_IN_SALT',   'oZZ7z+Uw|jZa6j-Fl)^(5&L+deSk$r3y)`=e(p2*st]&@wM8g6Z`*U REk:fFHM?' );
define( 'NONCE_SALT',       '4^=?>9QOHRwc]8gd<m% 6m,ru+lp.BC&+RWEV7~Sj4X7L[jIWFthUv.K>A}x,OoM' );

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
