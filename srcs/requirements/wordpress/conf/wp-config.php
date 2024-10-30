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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', getenv('DB_NAME') );

/** Database username */
define( 'DB_USER', getenv('DB_USER') );

/** Database password */
define( 'DB_PASSWORD', getenv('DB_PASSWORD') );

/** Database hostname */
define( 'DB_HOST', getenv('DB_HOST') );

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
define( 'AUTH_KEY',          'VZ0=$x,E-K6;UQEHqo3KXIrsMW<FE+*mwqlzk8Dd5Y8G4*}vYZO[#VYs4:1{EODF' );
define( 'SECURE_AUTH_KEY',   'UBZ@G$)l{8Xtjdj70*R8.vr?KdCX1^$Zi<ni&Zql?Y`R*c1ZF+Jd 8BgP_=1|NEJ' );
define( 'LOGGED_IN_KEY',     '>#Z4e]2OdmR,]jl{Y!<t$sHHG^Q7tOBXq7ICJY@CAGVk:}=V0:X2f~y$7,]1aE:T' );
define( 'NONCE_KEY',         '0d4p(p%u%9vy/e~.hk37CXV%nb6q85B,>orelZ0C%SA~yF9za=^lCnUTupB<k;OF' );
define( 'AUTH_SALT',         '4ksy%LC`KUkl=A|!GPR;_EC4>LX7Q+[i4%Cp`Xda/]5`HNqhMZ` O>,^xa8g:(:r' );
define( 'SECURE_AUTH_SALT',  'A[.yd0=!*`e9x_> $f,$ `DYi&f,n<Gzn{L*K@*Md7]<W$H(h9h:LVqc?:ACMJY-' );
define( 'LOGGED_IN_SALT',    ')i!ffk!aI[<FCV03YA+L@wW5qe0T7iJ`8rxr+E)ElZ<ih6[0e<J.sg{Au`T9SRyQ' );
define( 'NONCE_SALT',        'C#YCrbI{& xPjE]RtV;j-,|M;IR_i7~<t<~eyP9(5%EJuQZx:/*<d|(Q4 k]B;}n' );
define( 'WP_CACHE_KEY_SALT', 'CXs(5CnK|e;;c3[[TR(-eDdW>7m.*0g3K+*/Nt!2J^x-+eIM<T#/ [<,N5D#!8U7' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
