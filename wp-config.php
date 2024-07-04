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
define( 'DB_NAME', 'seestrandresort_db' );

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
define( 'AUTH_KEY',         'V|@JBf9+rn5d!3il&Czr3T*s(g7Z(UGz>iv)7daL#DC{3Y>D88a?:H*:WTH/uqf{' );
define( 'SECURE_AUTH_KEY',  '5J+WAwt`}5g<azmSyp:|b{+HVBq@5>(1?=u]?BmD`9}pY!jJ*l7%pDFP~suTJVyI' );
define( 'LOGGED_IN_KEY',    '.z_P7Wzvr<CH~W#7$u m)P/fvN+VbcMO!dvb7+r|>K!:B]~)X;v#.sZ8&=UpldBQ' );
define( 'NONCE_KEY',        'WS}] yKjLEsE5ND-Y5.]<#~_]Ngc188EMGOt=M `N|n -u6|rdYE/>%ye9hT#4)8' );
define( 'AUTH_SALT',        ':`m[Iwmvzp6tf]UO4vM6,6r-nj4?%@?zp~rgj,kE4D_7^}:[xGypF_pU!E ?_u|z' );
define( 'SECURE_AUTH_SALT', 'uKzHtemLw)c2g2eii^*v.KQugwUYeuWX;CTo$}[^v:[)cJAwQM%KvuyLCE#-a9x&' );
define( 'LOGGED_IN_SALT',   'cZjmB%]E2fX[n]Ilt!9`<+K)].iYhx8~6S%OTuGAMM ggaoDZN.6vLpMu%gGJ/oY' );
define( 'NONCE_SALT',       '<prpJ;ThsZt7wt.#V000`q`+@EvA`Bl]K2%gtr?w>}awV-cihx>k#m`(s6iNb9Bg' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'db_';

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
