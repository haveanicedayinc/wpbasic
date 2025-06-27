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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'WO;vex208M1W +7G[3?jwXuA@bL@,OlrAXrxu=L?1%Nd!AXPUCJ#p1P=wG4pUlx5' );
define( 'SECURE_AUTH_KEY',   'z!ElwqK;fU`uf(-MhLAt*+@m(KW9i=Growq5@w),xw6NpJ`1sAgBPAWmgJ]jRM}Q' );
define( 'LOGGED_IN_KEY',     'cBQ-E&&,h(x%ndwWj!r,+0d66n?cw!sUaZKrxJ3iB3|e .i39Nkn3c&Bb1B/>~TG' );
define( 'NONCE_KEY',         '7YR{TEVuQ9;ThRHJDXVDOh!{Ijso(aXhM&tsw#V7a1OQ=vXXNdq.E|xkm4l7[-.G' );
define( 'AUTH_SALT',         ' ym+({rhJ/=}!0o=gh[eK@Al0O5$hhhU~n3 sMf#;-x)h*|!<=Mk.79k(9R`Dg!Q' );
define( 'SECURE_AUTH_SALT',  '>-iZ)}Y%&27]wy^x;m/$)ri]Pz/KfU+@ELz~lP]oWIgA&!a8{e]ATmKv7-m[(#ls' );
define( 'LOGGED_IN_SALT',    'z[=K,_TRR2a_d>tE^QFo^@Y#J_G&^GHeM`w3MH*l);FeFi6$#mQon?QXj:I#;h7W' );
define( 'NONCE_SALT',        '7$;rR&ws(7`v7cS2!,,ijf#wXYzBEd87RU~*lgB`_@YJX9+hZ9@NM.ijigJ|0K4l' );
define( 'WP_CACHE_KEY_SALT', 'D/GUvaoK>tb!Pn-4Q ]yDUS7:X]*&SE!}|6,/ebY%)k5TH/Eu!ztg04KHQMG0yG#' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
