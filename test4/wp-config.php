<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'test4' );

/** Database username */
define( 'DB_USER', 'test4' );

/** Database password */
define( 'DB_PASSWORD', 'ibrahim1234' );

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
define( 'AUTH_KEY',         'idM,m2Wj8dE<rb~hr6SN7Ho0qV>MhW,WMSVDjzB|P?*/&RNUwk|d].^qUd?AU:d)' );
define( 'SECURE_AUTH_KEY',  'F^A_/l<$,*jn:+hA_jmvVB~%J.r@`i~b[SbKKvR|;*Q/vpM_ S_@-#1TZM8&gk2V' );
define( 'LOGGED_IN_KEY',    'ay,nP$Va2f%d3ETWKH6d%iwP!8e-8DN,|TrMmmBw)-]XFdWC`v<==b!f{mZYB#% ' );
define( 'NONCE_KEY',        'EP/MK-bTs REYqi1yz`LNZ_S5/&y|yT_=Lw2XQHAzK9 /7Ky*mJ8Bh6Q<wU9z5aB' );
define( 'AUTH_SALT',        'aOVbD<* t+t(e@UAufdM5%13e_Aa&$Vj}sB<6CVs}C 3i$Ic+m-= r@brbRi%z{A' );
define( 'SECURE_AUTH_SALT', 'W4LCb8T!i;wieG7kx`X8U%/C._Gbv`@YTTZa905?Gy CGBzX$z<p:c;:/Z;iyd!I' );
define( 'LOGGED_IN_SALT',   'J^Q)}s[e=DvR<XX/ON=kV>?x7Oj&[h-C#jKv?C#mW0EUjD$N0z8zN$X/]}r+,voF' );
define( 'NONCE_SALT',       'T`{LBVx:pD{^77@cm~k-2wTv)n`zw~5rk[mVq2R0-`r%_)E04O)+9W*?lNU-Fqt(' );

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
