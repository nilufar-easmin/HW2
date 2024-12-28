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
define( 'DB_NAME', 'hw2' );

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
define( 'AUTH_KEY',         'gM$S$3jI!X.h.qWA:a6:Etm^v5qi{xL~8&3%=>*cFh##j*ZA=*MKaML:cTE43fJ7' );
define( 'SECURE_AUTH_KEY',  'I4Z,3<T)ZJP-C{Q&v;Uu UEpe7c8@oxH[Lgj$i%4ij-BO.88J1^=cb8[;? fru>t' );
define( 'LOGGED_IN_KEY',    'JY?U8xtMfIa$_d,#!j*MZ)WTDb)6;igov+-}^4PR@OO3^4z&5X{:de!Hc%-Kx?zx' );
define( 'NONCE_KEY',        'k%QSNm >`v2dLtu7#=ufj <)Ntz-&*0fU/i`7OX1Bu^=z{>:Q|r.[~[o4#W<aVNN' );
define( 'AUTH_SALT',        '1wqM]0@MYyu%0v_ZZfEJGS)MPC<P<5XSv5S$ l3H=+`zx)FOVf:~M6DqMxj;yYoo' );
define( 'SECURE_AUTH_SALT', '/WD%]kabm338dpxG:aD%NYjq!>dZ^7hX40%#^Dqm<%RW_M&><M-p (SJC}kGZtdW' );
define( 'LOGGED_IN_SALT',   'LV(?awE+e9y|}|$=W.-m@=OCU{b)G^?3?EV.hGSV`CW@8;XC_:fcIk}6m-$Sx%xn' );
define( 'NONCE_SALT',       'p)0O^_PU78kMQq!L]2h`/=(l#^PkPems(|]9RJaE*k!-++-~T!5hzMX=?Q%~(;,x' );

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
