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
define( 'DB_NAME', 'swiftgh' );

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
define( 'AUTH_KEY',         'x,FY4*@q`fA$Sw]+MRV:^C=$$>^G S:yN%xu)Y*#aqA,kHgTN@!!rJg%XP9*[Z$?' );
define( 'SECURE_AUTH_KEY',  'As?4FE1?LZop(!O,~c%3)cr9>t~|fL.bPI(lz{kz#zh0Iu0=Y 5>w&m1pMTRcK%A' );
define( 'LOGGED_IN_KEY',    '&w+KCE:^QFo:[5~:f.l[ [E,xU;}v>5a]dpO${Opvna#I619@QFjtlWJr{pdY/Uq' );
define( 'NONCE_KEY',        'lhQ8hsDxFuGU59r(V{^<T]LsUbz+J$ZGZeq62FCWb0`i,[~+lsu6vL;>lxk!4j/S' );
define( 'AUTH_SALT',        'H-|xMT?[K:H(W~~{!6O99>vO^N9o_RS|+SICj_-z[H87d=Qda4f>Ga&!C|D+BK;q' );
define( 'SECURE_AUTH_SALT', '.;_|},6XxQ};DE!gFz<5p&qMhOd5qq)O&zEa-aABR|794vz|#es>a{ABRoF`#qAG' );
define( 'LOGGED_IN_SALT',   'G(uzz{^R$}L=J}^f))QiTR$aym<2u)hOO{m8nc>M9?sQdvAs`b@%{X|*jh~i/qF=' );
define( 'NONCE_SALT',       '3:ZkkpsbD=u<0CoCT^`FU{8un(X Oo><5G!KedU6l3XN(Ml0/irg**p%~syr%i-&' );

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
