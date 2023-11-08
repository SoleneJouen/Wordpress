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
define( 'DB_NAME', 'Wordpress' );

/** Database username */
define( 'DB_USER', 'MOI' );

/** Database password */
define( 'DB_PASSWORD', 'MOI' );

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
define( 'AUTH_KEY',         'QR0KWl:j4&81ZKL.lpY{Ahtd=5,B@bEFRP7aJ^a?8/U Da@kRGU}{hJV`Q=^x`F4' );
define( 'SECURE_AUTH_KEY',  'q1g!74@@V e:wNk9Z7(O:;{BEVemyQ]dEzW1;/r,m&-Zw.?05Bo|MzBxD=sV&C2|' );
define( 'LOGGED_IN_KEY',    'U;[AQ;cR4WDnIgscE)2qM#VHm+@s:[NpvSsn2!jO.eao(IV%QT(f!]85!Z/TN<1U' );
define( 'NONCE_KEY',        'Ves}f3s1N[kI7o3hEgAuBBE.sL9>T(.A&x]V!-e$NJ^qX2S4u^3TE@>_Q(HF$O$.' );
define( 'AUTH_SALT',        '9Stg)zsl>SegA=IOh%%FcBT]9A{;~SA.7rG }f?,~T!-&>+3VQ<j5e={N_j(#GW~' );
define( 'SECURE_AUTH_SALT', 'mt(jGyUOX_1-Q$&84]8B}PD+M{gzV7/*xtMAI=He$fVx{M/%[~o%:y<vR4R.JcFM' );
define( 'LOGGED_IN_SALT',   't<qR`&Ly% O!Bb?Ha_.69Jf3ock/]PG(75FP;R]meQsqdn:4utb$%1Q/f>kmk2n,' );
define( 'NONCE_SALT',       'utP73i(kV45>O8%[/F: KeO9OrjWS+lv>/8C!Mo}_u:yK*^G(~Hon83_~s9Mt2D9' );

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
