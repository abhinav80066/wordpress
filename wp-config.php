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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'abhi' );

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
define( 'AUTH_KEY',         'xN{UG}F[e`zk{bgp]^s#a]tw;meOO6qnh&P);af|k=WTBz+Y_7DI3LS-d$N2v| @' );
define( 'SECURE_AUTH_KEY',  '6TYcT]kIB4/Z:).WcO/&BQrw13pVQM$=x`Qg#gpmO|^E?x3&k_,A%kk4-.MId8[F' );
define( 'LOGGED_IN_KEY',    'i^->h[i#F~aj3?xARd;2>:FEe_7+B1o%`&ZXwSe~sZxIe=XV:= 9dFT9EL lBzH#' );
define( 'NONCE_KEY',        '/M*j=lx-P9w^^G; w?6#V6XpV3K4bEoiW8XIK2RV61@H[7*yzcK(frwLDr$]CYXF' );
define( 'AUTH_SALT',        'kSxa==*NV%B<#_*`2J1|C(8X`9)b#q3iQhfhObI)]+.{3L`9f3%4@wjpi-w.tBJ[' );
define( 'SECURE_AUTH_SALT', '@fHc19.Xi,?>^`]kps^Wp1h<@)N,v0$!:TJtFO/<^=bkJ4C2g:28o@]&#&5v[yAp' );
define( 'LOGGED_IN_SALT',   'y_449DoGUaD$2`sb,>y?oN!0;[:+JJz9U7|P{H|(tS02j5Qb>.O^T8@Ci(M,,h*)' );
define( 'NONCE_SALT',       'xZ3AFNae?m2>BZ]Z+grFXw%9A`gR`9#B&tivI3xn;%Oe-j=R5k#_zg$zAa}fVqSW' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
