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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_predia' );

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
define( 'AUTH_KEY',         '/g0+R|0su0^6OX3-E;::?>~ZHYY <w%5_Z0JW,SFJ?zUo;limC<yx;@cg-.+vpIz' );
define( 'SECURE_AUTH_KEY',  'JRB+/6Rsv.B6jxHv/L2])&[.y!&GkBopJ0Q{qeT^H|0b7D_e51#5fSG5) T@|J!F' );
define( 'LOGGED_IN_KEY',    '*&LL]fQyY@{KWw!f`;8F,6n;g1SU1/h>p5>]W%OS;=+X:^FEpY`/!>Ex^EV}kGV_' );
define( 'NONCE_KEY',        'T)S*Y|P6dx6~?u9n<e]s|VpbpR;ag]6BnFaq{<i$:v[B{d[X$(lj>B`r.%9oq~.,' );
define( 'AUTH_SALT',        'yO#W>x4%(Bqg=SAzJsW,u#!L[bi([[H`-W&ih~1ki(`x+KP7#j7uB?mb/q!Jiymg' );
define( 'SECURE_AUTH_SALT', 'o}Z8U%n-QnfFE.J$wT>sE=V[zmZ_QlIT*M2C.ej$Ye1r&Txo-dXJ.;OclJ~V-I Y' );
define( 'LOGGED_IN_SALT',   'G$R~#S65WPk}?M{D`}C~1:CQT/}Y+gwIEb8wTzXYsy](FtvOA.%(4N+Z[?1T}%wa' );
define( 'NONCE_SALT',       'nJU,Z|!7LSi,mw>t8S(DQIf:9KU@pe&-wnagqlmS%72kt>+37aKXu@m.;(<+):X}' );

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
