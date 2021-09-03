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
define( 'DB_NAME', 'sriherobg_db' );

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
define( 'AUTH_KEY',         '97j1*HQ$vMSz*q7Pi<PGCA?a_vukF4GT<X@#4T8Ckk4Ut)U68+f}gIYi461TY[nD' );
define( 'SECURE_AUTH_KEY',  'bWFjWKP!^.!%QG)q i#|5cP&ztjF~0.,J?liA^GCd}-RFY~Qn%NojY%ksv)H+^^E' );
define( 'LOGGED_IN_KEY',    '0v^I.|JxHY_`}UuG;?&)]m^BfV)}/F,#i@dc#!9kAG*|Z=i!e3VW05xCn]Y,zyz,' );
define( 'NONCE_KEY',        'Y(Z2?DOY{>9@0,}|=^a/Q^9u2pOx#)KD+cVDT6Pv $b]{y^${{}*(T(qlF+*uL68' );
define( 'AUTH_SALT',        '|#=aa=E_C1=xa5T{_3(Nd5OpOKhq/R_vuDzM8uN`G]he@;>`<0:wq:H>-N@33mTK' );
define( 'SECURE_AUTH_SALT', 'nG!&RF-F=Ds%msChQ2?0/l0b]SN=!I4oBhj/EybV14v[6 u@0 qNyR@{7.spdv[N' );
define( 'LOGGED_IN_SALT',   '1=F, F[y6`W6](uv;Ar`>%)p+9PK/7}qZxMpjj0R7}%armPh:<o3KZ.B@<R@_^*{' );
define( 'NONCE_SALT',       'y|ZoL0FSHrqG~n#:3_h=A^a@ooO%{W]tnw|IA=ce(&4#ILq&N<?K}CV%sHRz[@b5' );

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
