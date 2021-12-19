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
define( 'DB_NAME', 'wordpress_ecommerce' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '{l#M0QgT^y088rse$Uog9{oA-K*#EK)DPobUhx9tm;F/M7wqv4RK#=C[Rjo=+f,T' );
define( 'SECURE_AUTH_KEY',  '*t9.y,Y3K,wW,Irv!RWt=.D,xW{.xEs,Dm*uWjy=w}WBuY Vb23WSsmL^,R7Q^ZN' );
define( 'LOGGED_IN_KEY',    '^4L[B!s{t{s;IEr]BIb{AQy@P{<#I4N(1P<}I.$smO!H]!eJ}KEmM3lji?k7lLi.' );
define( 'NONCE_KEY',        '>~TUXM#6EJ8m=C~84A8FI5K?$$s|&rl+:t%P?lKi`Jg8 YvEYB(o{WEb|M]I6P?t' );
define( 'AUTH_SALT',        '6$+DnSG!h*N2wk[KC>;bb)FoY?BW=}5@E{EwUi]dl`gY%lv1PLK$T7v<hkvUmf?o' );
define( 'SECURE_AUTH_SALT', 'wukk-kO8,kPZ0Wnn{#0(63Z0:]E;P8 )2nVwxx7.3cQ$Uh+ 7.(ZzV1?w)I>Iw/6' );
define( 'LOGGED_IN_SALT',   'po0MXvi F!@=?9#v-w `c*} uG/k+Y%]ZM^It:Pa?_?3>.mqUJ(Q/%y48%~ycG{P' );
define( 'NONCE_SALT',       'ebc1t,ME|B3P-SGMXfuZuo55V^*iZ%44ZQ|=|n8CwN?Gi8iDdiE3YuDw85FpUMis' );

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
