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
define( 'DB_NAME', 'ecommercedb' );

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
define( 'AUTH_KEY',         '`f2-RVs4yc#P{8N8I>vD:@k7/is$|Vt0O}>)06d!tT^0.*pp|q^WtYZ3i}g9,%o^' );
define( 'SECURE_AUTH_KEY',  '`z+C|YNhN]DK]hQ<73+4*cHI-SlkH2rDR}zv;K!B`fYt]f3N?>SMS_hZ,Rw@ZEZ4' );
define( 'LOGGED_IN_KEY',    '<^u~|yo3k^!q:rlkD/V5}(*{SvDnE/2$pT`{`8aSGJfS*`!O+I,F]%N=gg?M2 D|' );
define( 'NONCE_KEY',        '0=1Y$&lEq6][`z<mWqe5fkz#ciG^WZ]*U$:=7l1`^ft`^I6.+@gVlmO4R-RZw6Ng' );
define( 'AUTH_SALT',        'G*w_,K<*;#/ssiH*8Hz;|Un)vAe_PWWa4Ldp?G4xYp N(Uf-V4Ac<M{!b^yWidq#' );
define( 'SECURE_AUTH_SALT', '^,m<,F/a;,@kuAV~B!b2_<MM)Tfuzi)]EB(`n3E|ci5HHfe+Sjn~0I`L!`JP+k]=' );
define( 'LOGGED_IN_SALT',   'h$`RQ5vPxYD}c,}r4#e$m|8j F$,NG5VAd(DO0j[7LgS$WKsaAMBoLU5f!mlgc&C' );
define( 'NONCE_SALT',       'lJyK;uxw=yTBt;u;R}ilCS/0[Y>f~TT@~L@H]]UXe|]8`7gE;MS33a#rC]L7=;+C' );

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
