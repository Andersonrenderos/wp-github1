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
define( 'DB_NAME', 'wp-github1' );

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
define( 'AUTH_KEY',         'wC}lZ~p0@R]k/zy`_rloL}(AAh_C#Kll1|[%wz4;`+x:?*qDnRFz .nf^SN0*|1O' );
define( 'SECURE_AUTH_KEY',  '@GPTTz[WV@zP56{TngY!D`+:&Bzq0{*62^kJ9UE?-TW-*K@ZdKf|Et9 be=?.3h=' );
define( 'LOGGED_IN_KEY',    'Nfs%ofrlyJvS j{t$@uFb/cpnF^M8I_xId-vyLN-1}7N;HIBEko4ut}Y,q-By l/' );
define( 'NONCE_KEY',        '.2[GlneQ<w}ikXmF0ZJ<OU@ Vuq},]M]+9tD1eQiHSnts]LOY-]VX*2]CRK0%XD6' );
define( 'AUTH_SALT',        'KfzIuTVk7 Xa*qYQe !fYQr~TYnq{h!CZ4JiX6)p%ZWd^20j.B9q5oOO5cPfV7Zn' );
define( 'SECURE_AUTH_SALT', 'YfUg~JL<OUe}fPYJp4P]>AMnvd8u7HE!iR0UUh2lRekN|;9)G^y(EG_DHc`[wz~4' );
define( 'LOGGED_IN_SALT',   '{p!dvPJB]y.6VZUx8pob}pZ)=2s=yD>)w3/-~*l>UM@IL]}tpUwqxzAQ[N;sam1u' );
define( 'NONCE_SALT',       '#i:(>IH1>BUcik=y,1hDb$?E]0o{Q$&M ;sVxlY]*[lftRHG,ni9x1+:X(B:B`?T' );

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
