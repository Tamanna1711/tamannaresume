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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Tamanna_resume new' );

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
define( 'AUTH_KEY',         '[n~sbsS*Fayk#!gOG%bK:qc&w9pf$[z8B-7m<NVji9Zetn2Y23=y`Z8?n<v[Uqy@' );
define( 'SECURE_AUTH_KEY',  'Ee8~vUj-4Is`n_.#K;nHSh$4jAwGdZ6K5IiOWCg)%2J1?l(n]ep`{DVB5Q?{ai:*' );
define( 'LOGGED_IN_KEY',    'Ew |bM7O^7faOYLfa@nIM{xrm[T.Zju0;NW7oz{,S6(`*=x!mv(X0,{bAqIToJO=' );
define( 'NONCE_KEY',        ';2|II:F{IA%yP?$?GGN V|HF`RF>DCLr<n^~)}r9:lPblzY5S77RD$AGAiR/<<Wu' );
define( 'AUTH_SALT',        'oT;q0:m5^:;!p1b{?Sah3lq*`L-m=lt9E}LvP>i8Sf3Eov`zmV.xv{C*j*:|>~8r' );
define( 'SECURE_AUTH_SALT', '-gwL)Qo7Q~+,HftsG;VqTs/uz8PLqPXCY+`7!d:4KcJup:6s0LwbgMNOF]{V>U&>' );
define( 'LOGGED_IN_SALT',   'zt+c3nRdblj+]bo_Tidf)Z`[%9d&aDI>($alg@o+GX|TU??+R(#+#Fyvx`sK] PK' );
define( 'NONCE_SALT',       'I<;ZV[!j3twNNRSiysmnVdgAnS)wj.QcBc{/Bq/Z:n64&Pk9Q^#NzY`MKtn0L*cV' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
