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
define( 'DB_NAME', 'easy_spa' );

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
define( 'AUTH_KEY',         '(nc7]*:7dcH#Def2%lUn C;G$;.dKbF%Cdo3fBx,K|VWA$%OZV;OXYGchJMUM.}!' );
define( 'SECURE_AUTH_KEY',  '(C+H-(4O!tT)]l9A?N}8u=FIW($}kt}4i$dj]sP)pM?zB&M8z&CjvdLZJ&aDbiFm' );
define( 'LOGGED_IN_KEY',    ' (?!dil2,K65GZy9>Ai=oN>U2Z^&8~:UJp*V >#E5c-=P=q|R38<nm:}E=D*024=' );
define( 'NONCE_KEY',        '-v%^IW|L5bkH`s.3LXt]cd*[qI2Qfc9*.ut?B(X:=|R2>$A6#8m}d[[KgPJy$eq4' );
define( 'AUTH_SALT',        '2CMc-eA@6>W4oXVU1PbBHvYgjTf~W;!#AL{e`BV28wD)t+^4O^/:P)HD=H2S;@&r' );
define( 'SECURE_AUTH_SALT', 'KNX=X [3uOqb$zB0:@15RQ^Qa#px>rv`Om>KT#G1yo4.]&s1#0ri_Dyy^[yerf*L' );
define( 'LOGGED_IN_SALT',   'xE&2F@]GRGkrN%EmltTO>&=qQG9EXs&|b*?6(yFzzd&!n~b/)`!dX6Cs PnlLhri' );
define( 'NONCE_SALT',       'ELeqyv>t8Du,Q%Wn7L.Mw:;kpKtP}6s_R;_O:{u5&475}O78?}^xIfn}tGSmIJA6' );

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
