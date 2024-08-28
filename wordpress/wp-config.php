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
define( 'DB_NAME', 'Majeed' );

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
define( 'AUTH_KEY',         '$f,4m<z2DP@+l=%l*fP)TZdw;09JX<RF!71HXLKpR&H~V`XlSW7x)^+rPm;bj>{)' );
define( 'SECURE_AUTH_KEY',  '!qT8kaYiq%3-M2{cmWr;H`&( t6L{AWY($6#v0T[aS!W<*1,O<pL`qy6K?d-n>]y' );
define( 'LOGGED_IN_KEY',    '>YZD%y)gI*P<p!Yai?E{>9.ECFDDYFDZPwb%$BL%OVk-I1OotW<~%d3boWAlodP6' );
define( 'NONCE_KEY',        '.{AD]e+mJ*wy`$YCzYm!g;))c@GAEGq_E]!j UP3LGW}z9]QBBY|1W^oMy^a wk@' );
define( 'AUTH_SALT',        'UcMbV4)]<pSw+2k:D5xPU]]w&5{1AqrGJ5b/Y|/k~T t)|{`9Uv&JE_hp7lBJi)F' );
define( 'SECURE_AUTH_SALT', 'QtRE%u?KaWw7z,0n9M S^:kmiff]}r~>h1g[l,MP1,2Q}kw=i$,N1ALdj9(dUJ)s' );
define( 'LOGGED_IN_SALT',   '(SOwrj1g]?s%*M*<hfL.z[UR#I_lT3,)31d!XsM@D%^`h9Vku)&rv&PqS.{q#daq' );
define( 'NONCE_SALT',       '2mV)2jfSv2 3mqW}:Y6DW2fTLIFe[@N_n!uLOT)A~z>< 0;,%NgaF@go?^za(TH3' );

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
