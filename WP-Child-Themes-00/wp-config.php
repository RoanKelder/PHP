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
define( 'DB_NAME', 'wp-childtheme-00' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3308' );

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
define( 'AUTH_KEY',         'cvT5Z8.,MClwpV1y4N|z=xRFkZ|B/$@4{iJ9b#W/TNy!$CH6zG$=sAc(y%~&yV+*' );
define( 'SECURE_AUTH_KEY',  '^[e2)Gk_UqFGj=<6)*wXZBx3Txp-EaxX-(`jIf8E0BCi:Q[ZpE8L%8|wpm%`Y4fT' );
define( 'LOGGED_IN_KEY',    'rP/ .m}[wwW }_uGZ4N<Bx%+W<#6#R&nB|!2OQsnYQxT#%[&&sbIIR>G/Aj}2rCa' );
define( 'NONCE_KEY',        'CpX2Qj,CTaN8wo^_&T3-Rrb[qO:-^=b9q_uhLL[n+zuX)Oc](0h<(o|V-%V-(%+b' );
define( 'AUTH_SALT',        'j^m<lL+D^D9.D!tD~:j2-8q7T<2InPZ{ <[{o8y`^ZPR+29pBMxr4m]@m#td9T[t' );
define( 'SECURE_AUTH_SALT', 'kq@:>46JEK)(XL*UPG/hTdB6K~1C6vj?%{Mfdt;SUgB-Sq9$*n>P~;JH<mT Mim$' );
define( 'LOGGED_IN_SALT',   '80>R O*;(&%|hyGFip={`|RrMd[cqn2Y=zr`jm6|{Ur 6}U`DXBuiETTi2pMG~ 5' );
define( 'NONCE_SALT',       'x#_f1POdb34g.&%pbtLd]2.TunweCe}~ssiX_Eole8QIF.sD;:bJKAY5RyV<9Q~]' );

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
