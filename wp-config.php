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
define( 'DB_NAME', 'dbtest' );

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
define( 'AUTH_KEY',         '+AMvmw6y%0R}QCSO(?C&_L9k5BXonz$M*r[Ww9K1|@r}3k`<ciA^6uf@m$cSB89S' );
define( 'SECURE_AUTH_KEY',  'Ag7<7>Y#uu04{r|/A--#XrGUQ@uD[.i`B8m?uwc(Q&ZTgh#OoU4~H,Qw[zL*9aFO' );
define( 'LOGGED_IN_KEY',    'Mwm^t!lqC46De,U?yBl[jniO0k;C33n23]=;Q*APy%Q~|6%3Mcx] g%,1-v,m^@(' );
define( 'NONCE_KEY',        'G:4xtyre@[G|2jJ!u8;)AVXL?;&IL6/!pMwgcHZr%XheU!8c=Cp7`K22wkB5so`N' );
define( 'AUTH_SALT',        '4Ey>hkf-xB*@GxKI%c[6)iOVu<>^yZd)*]B&gV-:_KEq*T~u=e$#1eQ^w:M,8:}x' );
define( 'SECURE_AUTH_SALT', 'Uwj$iVfY7q%gN<FH$ar)bG`)te1eaas5tqron27O,K,tk:UvV[9e#ON!aKd>AVlz' );
define( 'LOGGED_IN_SALT',   'v7z5k+v(R_y!XGrlhGmU9V>a:v{l(#Gs}@ejzJjMa&.(oS[xsV9dO$5vHwKH?1}Z' );
define( 'NONCE_SALT',       ',lo)Bu46`}cifsP:;,Y6N$CQ1>?!hf.R9nnu%T*6tmh79e%RI@?K]V(+BFPa%}E0' );

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
