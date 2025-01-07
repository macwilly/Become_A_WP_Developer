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
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          'nCq9W9|1yF?Mk[3ynd[ As^Z;FM#Iq4Y4mQ$TbZS2GL*}wDtdKm|9L>!_e:HRM_!' );
define( 'SECURE_AUTH_KEY',   'N|z!HaZAnde7S)/J%AjUGq)fQ`XlVSD@E:)42g!+1|.9|_=b@/}IrY78]MNHH;X#' );
define( 'LOGGED_IN_KEY',     'U]2 g}oUzoFc?Z-:07N2{R[WS }+7|6~Gd80R9m[ACj7C&U0D=8.+Q(04J5`v5_i' );
define( 'NONCE_KEY',         '8/`UQ.)<-)fNvGezpiVtY8DCi;_#yWzo!D.WYO8]{)l~{_QB{>OSl0</VBSGghfD' );
define( 'AUTH_SALT',         '*BGd)#DbaH&VfWil?,wW[78seO)-L)4h%=*Xu8:5JvQfI|Fs|T<IzRY`Y?yt;,ZO' );
define( 'SECURE_AUTH_SALT',  ':>#uX5dDQ0~h?-0I).~vd07hl;WG6v&Cv%8a~;rNA<Ip-,To9zu&j(Bt4_vRPz-e' );
define( 'LOGGED_IN_SALT',    '8Hc1Mjp!TH-r_sHkQ^9[%+d<VG3A0lm~[ u@l1]UsgMQQ/-45mo7]i4GzCqZAyaI' );
define( 'NONCE_SALT',        '1yJvh<|w;Ew=b;x!=7y6sE ZZ{g3_?b@Ex9.6QDw|B;WEJFM:c8CL/THt:%}VN7Q' );
define( 'WP_CACHE_KEY_SALT', '=OE+reGzs,Y6#<lX>K%N%k4+toJBpf0O Nf^5),=Bh-wlD4klPGAc%~)>ny`L&vj' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
