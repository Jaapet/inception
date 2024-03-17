<?php

define( 'DB_NAME', "wordpress" );
define( 'DB_USER', getenv( 'SQL_USR' ) );
define( 'DB_PASSWORD', getenv( 'SQL_PASSW' ) );
define( 'DB_HOST', "mariadb:3306"); 
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', 'utf8_bin' );

define('WP_SITEURL', 'https://' . getenv('DOMAIN'));
define('WP_HOME', 'https://' . getenv('DOMAIN'));

#https://api.wordpress.org/secret-key/1.1/salt/
define('AUTH_KEY',         '&%d}ixJ6#./ybxWX}fP=`T>%l(M=` B!y+;R5%MrrsO7(ro$^XfxnRih4Yg=[hqC');
define('SECURE_AUTH_KEY',  '$3c5>(bJuae$6Hj$K+iiV>7|sX^$q7&}.mjf.|.(>640ee!:HaZZ+.C.dt&{ms}z');
define('LOGGED_IN_KEY',    '|`<;BXJ+}o(y7-Yt)e-y#de>jAfL10(aa@Jf+o4MwRm+*,Gib`jn%!|XuO_*~|aq');
define('NONCE_KEY',        'Ft>H4CK>/A2R{y*H&zx=RK<oZs/5h,&+:.*oKx+BtdU6=3`VB<Ou9d9G(VWtx--v');
define('AUTH_SALT',        'l u~kfcf*6LHD>9D9iv;O+Nv5sJYilk/,>JtR&LYa=8^_=m8E~R|sE+dyy!#BfaR');
define('SECURE_AUTH_SALT', 'CWRCXaRgW~rq;EUs]>+q|:n`5EYAnh0CCe(Mb2>Hhu4|LoewC#]w7zwBqx_1d2 5');
define('LOGGED_IN_SALT',   'im%X$&btOCP(T=xQXHQ-|#3#-1#qsc2<,>a^$%|4:QKvbI=4DY,|Y p4/+fTn&PL');
define('NONCE_SALT',       '4s~7C,X;FJUq^niZB/:d~LIshBn%;.xrUU=R=e{-dseF,lPh^6S5Jk^-a}%DIY/a');

$table_prefix = 'wp_';

define( 'WP_DEBUG', true );

if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

require_once ABSPATH . 'wp-settings.php';