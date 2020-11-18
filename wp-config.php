<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'webprogramer' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'swux.O_u9?_j=)CbHofTP}T4_1jKpn:hw^VYBWncRqm0Xm(B,+@`V%~$TmGZ.4Eq' );
define( 'SECURE_AUTH_KEY',  'Hac91o54e];eJhlY*8MWJ(Z:E68S!XE2x6;n6qRj>2~oN:UVO2QX` kf)zwE7r)#' );
define( 'LOGGED_IN_KEY',    ';e (s+@ba>d0|)]f5m%lA2:c?*zi>e03`yCe80`/eCur?[WJ$)sNF0Ek3zh-!K$5' );
define( 'NONCE_KEY',        'OVXKFP0F= >k}Q#[*Oo4z)~dH=un1BwzJl;LOW8a:?/f}=68q~u12 Lw9$rq(cof' );
define( 'AUTH_SALT',        'l(oSW47@iuc*RKq.l `EppouGj2YS[YGn+A-En}gSP~K$s6@[!&C&>L^voH&RIBU' );
define( 'SECURE_AUTH_SALT', '+)|jNw9$X-!I/2tE<!t}w0e6|c1g<JH`Oz/T@QTBV6|ef;PQKH$e9,x_)NS7[2r5' );
define( 'LOGGED_IN_SALT',   'aSJ]rJ,J<}J$NKR6Y~BIRq8on:<6d-%h&dNG{)]7A;]O4t?Q7bOkeO@AI>#>S4Ck' );
define( 'NONCE_SALT',       'bZPcZj#=qUsYkUx=bNK:T]Ac7$^7(U2sNb!op7ThVxN$@o<.%NS<IX@KiNS?,al(' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
