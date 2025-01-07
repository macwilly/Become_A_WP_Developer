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
define( 'AUTH_KEY',          'ZA(>?&nA;Q=Eb;x?Oi4$?G2@X=+ijv.a}Ax(awQ-;{d;c=VLO>) |Y/`*h(6n`T`' );
define( 'SECURE_AUTH_KEY',   '+qo,Yiz8@OY,_q9*ZMxB~P(Dr20$Bo6wS{d#`B]nK:4)uBJo$cP$6IH8-&,%bV%I' );
define( 'LOGGED_IN_KEY',     'vd/_J~MeGj-,]9*K%Oz,|crm5=4w;>Zrrq.;Lx7je,Zh/Pd@W/SRcy)mp|5;,le(' );
define( 'NONCE_KEY',         'Q9=s <Y xIX&n]o9BG()}>k;C/EcXY]<#{|4u+Ea4q^BH^m_8ULpl9P$EvqL|f4%' );
define( 'AUTH_SALT',         'T7yzs` tY!Vu`ho}[)!ZI|n)/BbU?LqmysX-}2(!3V!pJ=ni2iOtVF.&WF(UXFy;' );
define( 'SECURE_AUTH_SALT',  '{9di{lJ`q()COg8Tf}2ga~vp:QS_LhEf)u2o5|z>7o0|y?a<O5Mo!-7OR]H4UfmZ' );
define( 'LOGGED_IN_SALT',    'upIrSmXBSv)b@.|*K7IZ]=lLRnv5EFW#e|zI%p>DoKu9sXEv~0kq5M;Mh``3Yh$g' );
define( 'NONCE_SALT',        '4L+,,#@7B{O4Ht/BE>-o*-P{Deeov0d,ux*F]wi.?w v-D1uBa&}-`]atZ@^Q^K@' );
define( 'WP_CACHE_KEY_SALT', 'Po+g0Xkjy7uf(Q9lJt2kR)Lb[CXI!V_yn|sORs }N0Ry_3#iSM6d4eu=T7P=FHgb' );


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
