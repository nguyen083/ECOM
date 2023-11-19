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
define( 'DB_NAME', 'nongsan' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3308' );

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
define( 'AUTH_KEY',         'Pp2Qr/P]L)c= wA7?J1M>t3SnEv#,]b#c6 ySwPAlhIzr%UhUwlWy7k}c63PFkoe' );
define( 'SECURE_AUTH_KEY',  'h&3j8@dVx`E? pD$0vwB[eJpiaQb%K,:I/?>DC=<g4lesUc/?i>&KC/(YXgY=%tn' );
define( 'LOGGED_IN_KEY',    'Fu-fCCy#0yD_:jNj[ OL)N*Z9}+d^?L*H 3QF/KStHc6z7(zYVRR?)IU`$Ohy9RL' );
define( 'NONCE_KEY',        'w*ixFLs2fj74*A2mGGbC1 Mf3H12R4j#T,;9$YY7WD~g<X^<UaC|Yhd+]Y<0@8p ' );
define( 'AUTH_SALT',        'Y0~d~3!y{@F)9`W#GK/DQ%`3wJU1~g8zMm1<W=(j-aLR<N?:F09)GUDNHN3LR?on' );
define( 'SECURE_AUTH_SALT', 'L0xyr@QV$94Lkm-mB68@vw|nGI@J^>{}BB8mx&msp-7Q*zrip7eEA]&^%!ANu&P%' );
define( 'LOGGED_IN_SALT',   'JjfTR>AN7C$n(#GV`(j~m7<Ee8o+5/,X@`$9@?vU[6H&)u?WG&5&U*[Q}Q{*H9fB' );
define( 'NONCE_SALT',       '4S%*atHuWy(_paW~i1?Nf^l$`+n2L6?i0??&hUwi(e&heZ{,1}5WZ2nJMu(.Ae3v' );

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
