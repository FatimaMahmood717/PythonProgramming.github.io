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
define( 'DB_NAME', 'wordpress1' );

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
define( 'AUTH_KEY',         'k`e:H<(l_NLgYd;FRE]0!}X?*`02b4sr|#b88>Bv[F#a4,yq;JM?i0W2<#4CGIyE' );
define( 'SECURE_AUTH_KEY',  'I&wN_[C-S8nr+Qk[9hZm1Y/+=y^F{]EM#RBGC9x zld^qRq8R:;z(F>E=K+@z(#h' );
define( 'LOGGED_IN_KEY',    '|v<A}m2OEXl[M7k=pEqI83.2azH.P3L<ePLh68Nd(Ml@MoP<-9+:#:LQ$DcIl[e=' );
define( 'NONCE_KEY',        '0+6m/s@KlM1t <%n?@BT6)i!]3wv;EY6kuy(*P]|A==!bdjkzmR$9t=h`9/3Uz30' );
define( 'AUTH_SALT',        '#M#]F7TV,Jqv!o):?KkI~&{:L=c$ur{ptAt505AXF%IapL|-20=RZWyRnG-$W{,e' );
define( 'SECURE_AUTH_SALT', 'hI#.l*@1N<mtkE%s+V7q5.+xo^*dK]+w{1v{vm{oYMrYg7q6sIAAH}Qjo`S_FkRj' );
define( 'LOGGED_IN_SALT',   'oJ-!NPc+>GiPdZljMNoe>+ j<^*tr&0;2h>k!g#&cc,@X.y+.!zIOv|@8J_V^oi)' );
define( 'NONCE_SALT',       'vQP<}k0cZ%7Z<2P50AB[ih:w}io$pV`+t*p4fYs@^@!BF+*mJK>>vK7DYnmL/U])' );

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
