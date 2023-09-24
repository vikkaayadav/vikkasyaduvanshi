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
define( 'DB_NAME', 'vikkasyaduvanshi' );

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
define( 'AUTH_KEY',         'Uwlf]KoFZBaHIg?NINvnfrN&z/B$MmX,sq]=O# io.N/8DNSvhbBWl7G-_a6kE)Q' );
define( 'SECURE_AUTH_KEY',  'vpGB sW<jYq#0+gJr}6P$|/mo5wByS)?1atMoQ=?H+Tso-Ks6ucCndSE!bbu9FEh' );
define( 'LOGGED_IN_KEY',    ') 2fU0$=9:XSV]95IhV2l,8m&g-!Le7Pw>eFF]V4}tr#J8FYqAHM(mA^b7R;cRP ' );
define( 'NONCE_KEY',        'M4+&pJ3kI>*kMvFEaL@03rrp?Z{q784n&)=)K udP>#Dg3RoV@=&~RcQ,N] f*lC' );
define( 'AUTH_SALT',        'sC(1y/rjup{@2qjr=2kkZTo4yC;J13++X_uzh,;|`lE]#t?$XY%;4dC!PisD+*K,' );
define( 'SECURE_AUTH_SALT', '5EP5$FRV8.g8 *w&d~.]J%?,3+6rg1M;Ohj?(eNg6PmpP0cTr{uulLA1(E}.Qmp-' );
define( 'LOGGED_IN_SALT',   'F*(;.&e8v<<?6#)r%q!@?z65@h&6;E>ztAsjSMrVlCvLWF`p5+QfQhO:T(iL<!;_' );
define( 'NONCE_SALT',       ']Oda#!BETFZX6K#rUDt;Z7:[4y =qiULY^cS$4>yHXApB6`*]B7,vD6fx$u0-[dy' );

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
