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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'rk-projects' );

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
define( 'AUTH_KEY',         'r#u(>CiBGB|<{gxUH@1FC<|QUY2j7A;$aqBRM+q0MG sf$uf9c/#urKBqNgy8)&g' );
define( 'SECURE_AUTH_KEY',  'rMOI_T:%Otewu^eM?vawcH-0o)pPct}v_-k?q%?4sU!+Okg83s(+0(#.by7uchMK' );
define( 'LOGGED_IN_KEY',    'PipY^(eYY.oYXB3d(5;lYEI,PI4Q8xaPv{s$9&Aw-::0uZ)VD)Zhd=b<o4aZ?m+ ' );
define( 'NONCE_KEY',        'XTEepeJ3xpivB*5|jiKJLC@2?f?8P*jlaST#F}|@[aKfpm5#,+;$qGD :/c{`I,B' );
define( 'AUTH_SALT',        'VL2jGjK*BPPBwDNdOIK|;[II;ApgiN)58.>kKC#9:BDIS`sPrsc/Ht_Tfuf N.L6' );
define( 'SECURE_AUTH_SALT', 'Y|W+pBr]?BkFU>Dx20$)$Rl<#d?U(u4$n+~6=)tUL&!pB%=xyk@XMHD>R;]d2g7r' );
define( 'LOGGED_IN_SALT',   '7c6%e$xUmq-5]d/8bOK~Ckad-R Hd>1{U9T }J!?}SW O#OP[zTv/sh!S~%$jl+:' );
define( 'NONCE_SALT',       '_~O;g%)R}^l U[U:YyznOPqhRAZ588<r[w3-MlM|f!-H<3(Dk%U!.ayAJ.kH^VEx' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
