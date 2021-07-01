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
define( 'DB_NAME', 'myFirst' );

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
define( 'AUTH_KEY',         'aV;rMR2Yf1[8^jCF*.]I&O+zOimUyOQN_k_Nd`:E-@43`)3n8S~&52y[lJuk-W8[' );
define( 'SECURE_AUTH_KEY',  'XIwAGO6`mi^?qU!)D[??Bs1{d:}#5$5%*}1)!ayRrN.{kT.KmD_v3>T9N8lq8+V~' );
define( 'LOGGED_IN_KEY',    'S,[74/[sWy[$u``ksmR$0 B?F[(Uz:%@DX|/`FPW F{=+7]V3Z]I!stn8= Ib5~D' );
define( 'NONCE_KEY',        'cfo?rBxRfxGZv9%PZ<235tCg?l,,ny)O@-Q!Yv9dNv?<k]vJ@mO^)-am;W@PI-9k' );
define( 'AUTH_SALT',        '|UK[wjC?ur@iRDAPvLLPDK<`QC/s$Nb@|1u+QCLZUI=YfLr+k%A+*AM4H=1]L@;)' );
define( 'SECURE_AUTH_SALT', '`x1op;.t(LOMp{q5K_/~C<kpo8M9:HW]Jvln$__aMJ<V/:bH.=h=@!7T$601:s31' );
define( 'LOGGED_IN_SALT',   'fmPc+;(5=RuWm(CRXDN>2kBQ4}Opb;k!]g6greb4VS>z/Jo|v?-div;NI>^{*  X' );
define( 'NONCE_SALT',       'RN&+xzz*WBZE/Xh:T4Jho{WeJoyPMp4<v.D_)aF9rLb,|Mj=X en-`AwA{a#`o/)' );

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
