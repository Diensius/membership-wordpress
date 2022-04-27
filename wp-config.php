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
define( 'DB_NAME', 'blog-pribadi-wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'F:_&c|agD-mu5YRxhj[{L$ L@>lS2crhv%Qvd8;K>imsNz[^U_Oa]cSFzQFYH++*' );
define( 'SECURE_AUTH_KEY',  '73rQp<jU!dv^v6$)pqs3K40wq;J|5OuHI}6nZid3MYu~4&!4uGw^pI+f!c Yf*sK' );
define( 'LOGGED_IN_KEY',    'cmm^|d#Bxtla=wN^n0z!()IufPu3F:Up/~Ne:25^LB/ZSs@l0a>MK<4am&oh,nVv' );
define( 'NONCE_KEY',        'aW3j6:_Vig,-cS)a.jTUFRH{H0c+^GJ=},.T5(stln(wrr[qjm(U1}Th~1{f.55%' );
define( 'AUTH_SALT',        '~}-|]y<1U:ioZ@|SFu%Xva{0z:3Q;BCWp(/B@0#}y99&~6K# BS(!&GH^/|uIYOK' );
define( 'SECURE_AUTH_SALT', '#T(arDXk-_oTAjm8#M3{*M74AxM1Jj_H:B2v#=HMk}LVg|o~|gG4 K.Xw~E^mr4q' );
define( 'LOGGED_IN_SALT',   'lP$)r %cWHa&vH`A7*z=?Z)jW6F3Z[+rFKh=`R8F%{QhuJk{KcgkK@f$i>@GNS`|' );
define( 'NONCE_SALT',       'lm2Q7bQGT9f[S>$+Q:<-1|pEw;DX}@f4Qg9.Z<_2cuyHabpAZ0K[fw|*m-ZOr:$e' );

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
