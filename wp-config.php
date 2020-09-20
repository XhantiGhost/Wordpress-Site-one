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
define( 'DB_NAME', 'carsite_db' );

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
define( 'AUTH_KEY',         'gpLu6+qlq,`;m=?Nk#fRF*ni@#8Lt%N0]p>CI1RW`fhN bn*{oC>D?Y~4S&hh}`r' );
define( 'SECURE_AUTH_KEY',  'nIe&@{G>zSuXWR&cLgZypQw3lI$Aw<2wF:b:;lODtsHZ=rkd9K)bM.>+XAtG8hKT' );
define( 'LOGGED_IN_KEY',    '7;-)HW=yRQ3<Qe|ss@-J0FS3S%qbj(t*/a:b{lRm.`N87[&0DohEXf-N@cHU*2%h' );
define( 'NONCE_KEY',        'FAyP(F9no2nY_+GQ,lQM^&DzKk8zw^|a,G@[;wPDW;fRRVAF^Vf#<n((0iNQ0d:6' );
define( 'AUTH_SALT',        'Mb+^2|udQGBek8xt7476i$mcy~wPi>8W&8#1<qLChA,JmD]Nvs9tCZ~RKoK&C:&q' );
define( 'SECURE_AUTH_SALT', 'GQ,LHQ**whB!gM85a-R)In,jiOybY?0K17uD>pEj/_;mJuY&Z:*e~]Pr}LO$E.4M' );
define( 'LOGGED_IN_SALT',   'WEEvFhEp!VUsW8Z=03SVV/yyFqo_l=ScHYv:g-=`OE;sR_&9M]BHe}X9TQF%1j9]' );
define( 'NONCE_SALT',       '5Sb{hZqT/GR`<W:K<-Fpy4|>a8m6-=4@?^yrdI1l 8nabc%5`>|U~d,GTK]%P/([' );

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
