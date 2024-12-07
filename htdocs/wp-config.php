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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'a*]ikVtyf ,KshEJ|T1_4&UirO1!FEzGp_ZJ8)#YfbN&VDS!VM^L7_jc?s1H}Kc]' );
define( 'SECURE_AUTH_KEY',  ',A6@o?y7?#q]j);_4pRg!<gZ](_ qtg^?{9/0N0&M~N((n]S`cgF)^1Ov+w)nEMh' );
define( 'LOGGED_IN_KEY',    'wdVR*xDVJmEz*Z =9%bk~S)ClDn$>}SfAV.3Qel;s%a~jVSi?m/hE<SOEJ2*2d?>' );
define( 'NONCE_KEY',        '[0r9n7Oq!GWi;yWmGc7t~|O5>R~%{m7^^9?XbHg_%NUa[;?=|]B}w]$0&:<oq::8' );
define( 'AUTH_SALT',        'V6GgPF)f2:O:VP@BYC@-w/X_?(>M@TQ#Dia2<q<]9JJJ(h4@yV;8q7<@5TP94#ze' );
define( 'SECURE_AUTH_SALT', 'qWtn~n|AS<%S@,YZzcsd!#u^ 1~)+2t!}XbDc^Bxma/~)[Gt a>?hQ[40n!72%b~' );
define( 'LOGGED_IN_SALT',   'Ga:;byE.{tD}1)@s*Pi;9H)lS]> {Wo, A!`y<hL`J.*oR:f!Pe`%t=$#<9ZHz??' );
define( 'NONCE_SALT',       ']u8kCqoG  ]R}q0ji0g{MK9JojvO|QW)!>LL=!zxYM${k(oKLd_wjy<*mR$q=qf>' );

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
