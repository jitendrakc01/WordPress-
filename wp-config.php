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
define( 'DB_NAME', 'blogwebsite' );

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
define( 'AUTH_KEY',         '.bC^O=8JIn^lAQ@TMJ+LP,mwCoMQD-E$[E6$7ESJ8-R^%^{QOX]rmNK8Xv[7}}~_' );
define( 'SECURE_AUTH_KEY',  '0p&qq(3k$*o8~_5#w;fzVq_*0uR2m@xgd!HL0G+46#52hBKA32Xp4i|Z:9O?yJ18' );
define( 'LOGGED_IN_KEY',    '(~]{`2QPWl#_ghk>kI+>i*[$_ H*.6VVpNHN?#|?Ua1^QVxVw*n@9]~l&am39Jjn' );
define( 'NONCE_KEY',        ')^X!]s!2(?/&~8Yn$p3r1.gFkCaq[$O(HOFU|(PWcox.Why)k-G?&k8HvG`z>}B<' );
define( 'AUTH_SALT',        'p=Do.$Lju:KHmc]|v<zhvIY1$t{5Wi-!cSz7#fAAEwjYD8JvuC?O3+9]l*|,Ni`#' );
define( 'SECURE_AUTH_SALT', 'Z,/}8e~>Owy8<L*N{efKrQ/]KWNl+1Uo*1nW<,5Zq0pQ~OHkk=g/=[AZ?5 %i|{1' );
define( 'LOGGED_IN_SALT',   'JuGL#b|+aWvoFuB]z#Xg=^OM;5<MMyIJ>.tJJfB1X~vDI.=dQTtzBQb43=ncUajY' );
define( 'NONCE_SALT',       '@T4$%Rd)Lz2FkxIeP-qTD?/:?J+/I1^@j/}m3Ic|WUMbunK?)?W?Y-3}r^{$~VE[' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'Blog';

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
