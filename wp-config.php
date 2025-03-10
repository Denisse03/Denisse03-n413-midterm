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
define( 'AUTH_KEY',          'h.j*?F4{Y6WP^[ uvS4bj9GSKpoz^/;lmgvE3{xFjF8>v.;(|U*:iwrmh+Wci.~]' );
define( 'SECURE_AUTH_KEY',   '^y>jIyTQnUtU.n>+aV!n#>t,}$5!~|fNNyVV)<?4S*^mG#Ddhj`bJ8Jx67bH/R&{' );
define( 'LOGGED_IN_KEY',     '?012m;}f@bXF&T91wvH&}umg`lhHoA&-al?nG9V[ZF{L-cj#vm01QC`C|ts@<*@1' );
define( 'NONCE_KEY',         'C(L=8:D0=etQ$K2|vIy;ur9T^,kx!aGkyah7A1j-UjOL3(kfESaEIC1r.&vD,2:E' );
define( 'AUTH_SALT',         'qw>`$uNEAH!!aD5|JYc3blUofZR$UO8^IMR6`XUrJ !b~x=;2nGuj?3$45*qy]Im' );
define( 'SECURE_AUTH_SALT',  ')D24w?[D;GC/;GQ+5~Hu3C$jAt`U>eBY2o?zz+FS5(/Yx& xuIVQaTfs{5xfPx/M' );
define( 'LOGGED_IN_SALT',    '1|OxG>k=v:va{^?*X#pCI@<ny$Irg#S;&0z5i)^8{^Y^Hh|fp[5zTd)Ab@L6#P)N' );
define( 'NONCE_SALT',        'c{:iS;@Sr$qQYEgax}[,A|T`=ik-dsd#zVMC^<]Lr.G[({VQbv]ZXAjQAV>neFMs' );
define( 'WP_CACHE_KEY_SALT', '84/L;:qQk!^vsF68Kk^4&NNGrTkfdecnFBZ7MqNcF]QZqMC`;;+~^-B_Z8J5yK9E' );


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
