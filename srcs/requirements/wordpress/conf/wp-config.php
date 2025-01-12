<?php
define( 'DB_NAME', getenv('DB_NAME') );
define( 'DB_USER', getenv('DB_USER') );
define( 'DB_PASSWORD', getenv('DB_PASSWORD') );
define( 'DB_HOST', getenv('DB_HOST') );
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );
define('FS_METHOD', 'direct');

define( 'AUTH_KEY',          'VZ0=$x,E-K6;UQEHqo3KXIrsMW<FE+*mwqlzk8Dd5Y8G4*}vYZO[#VYs4:1{EODF' );
define( 'SECURE_AUTH_KEY',   'UBZ@G$)l{8Xtjdj70*R8.vr?KdCX1^$Zi<ni&Zql?Y`R*c1ZF+Jd 8BgP_=1|NEJ' );
define( 'LOGGED_IN_KEY',     '>#Z4e]2OdmR,]jl{Y!<t$sHHG^Q7tOBXq7ICJY@CAGVk:}=V0:X2f~y$7,]1aE:T' );
define( 'NONCE_KEY',         '0d4p(p%u%9vy/e~.hk37CXV%nb6q85B,>orelZ0C%SA~yF9za=^lCnUTupB<k;OF' );
define( 'AUTH_SALT',         '4ksy%LC`KUkl=A|!GPR;_EC4>LX7Q+[i4%Cp`Xda/]5`HNqhMZ` O>,^xa8g:(:r' );
define( 'SECURE_AUTH_SALT',  'A[.yd0=!*`e9x_> $f,$ `DYi&f,n<Gzn{L*K@*Md7]<W$H(h9h:LVqc?:ACMJY-' );
define( 'LOGGED_IN_SALT',    ')i!ffk!aI[<FCV03YA+L@wW5qe0T7iJ`8rxr+E)ElZ<ih6[0e<J.sg{Au`T9SRyQ' );
define( 'NONCE_SALT',        'C#YCrbI{& xPjE]RtV;j-,|M;IR_i7~<t<~eyP9(5%EJuQZx:/*<d|(Q4 k]B;}n' );
define( 'WP_CACHE_KEY_SALT', 'CXs(5CnK|e;;c3[[TR(-eDdW>7m.*0g3K+*/Nt!2J^x-+eIM<T#/ [<,N5D#!8U7' );

$table_prefix = 'wp_';

if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

require_once ABSPATH . 'wp-settings.php';
