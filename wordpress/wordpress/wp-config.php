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
define( 'DB_NAME', 'wordpress_essential_training' );

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
define( 'AUTH_KEY',         'nZ~JR:bS ?v7346&.S8Ys$$BX>A&ZxX=t-@6=c=9X<%zaTrOLIw^@$_@e]j(N}:4' );
define( 'SECURE_AUTH_KEY',  'Dh#DJ}IB$:PIG=Tyb2@Pc J)KZ:|X$,ALr(/g)F$-8=lj0&QO8HTHLJE_tI6L~=o' );
define( 'LOGGED_IN_KEY',    '&_3Si2Wzvrz``R%${)Eo~cRg6]:K`EwsX_=tbALMc$cl+8h~d;(r,uurI#&Y95ha' );
define( 'NONCE_KEY',        '^<4R;5coY@@87OQ~0c;e*P|^naAPgE? +sswB}T6a>If0~lx:Ag_eR;([T!0e_A{' );
define( 'AUTH_SALT',        'O%}!A}I$Hyu:.,HKR8_P37_LDwX1JbwmBw;.qeY]>:u})#&vR1pCY7ZDVgPbIgHr' );
define( 'SECURE_AUTH_SALT', '>u?MTzJIXNX<x+=f+:tDm$*K^/r;LBZ5,4&B3B`&]*/$l-~R4d5K9}[`LZI865P,' );
define( 'LOGGED_IN_SALT',   'JY`/Fj/3U-v]g=uJ&(db|_e2Py{[INwu_2Tw4r8tDuXhm3{zsBW[RmJvIwE{#|a_' );
define( 'NONCE_SALT',       '1y^d-f^P2^zRTPIs!^U4rH#wu@a%h-rBYi&2K.cQCry:y+-HPU$i(ieJ{zN(X_B,' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpet_';

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
