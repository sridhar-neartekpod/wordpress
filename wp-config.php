<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '-NZftCXR`m)Y@yh$5G{i]zQW;pgTzhR3M?hZ0xU|U]s?@Xmg1Mk5)|=TA`=B J2D' );
define( 'SECURE_AUTH_KEY',  'CPuL`b2cPPi8{8wmIV G$S!,)K,=;CNztfoniJ}ers~i6PV(xDR*CZ85!|v+Ro0x' );
define( 'LOGGED_IN_KEY',    'glf:?>w{pYRP4?sa6{Z*mq,GeA*[h5?i>>oT[++0*i7KwwPN.>U73`+dXK{%a6b(' );
define( 'NONCE_KEY',        '&K%~8r_qdMTbEb[;fIAw]C5;GNhu6OONzP#2o-N$0Nv8S+jAjBzkyCuk.^%V@uD_' );
define( 'AUTH_SALT',        '7U@6poMbd3T6Kelk2ZrI:TRo<$:#dRG>r<^3D}5J9+N_DD^`ZiExs}ER5a*jFJ~a' );
define( 'SECURE_AUTH_SALT', '4Kv;1es7]0KQ}*{_Z-_!W0^*Hb#n6$9w:(LM_ZKHL?Hymj/M>v4r/peRvz]*x-3(' );
define( 'LOGGED_IN_SALT',   '!cS@%NHaJQW&)1PoOd+/<)HxhXl#b{/tXR/8S~*)%>x:5l:dU9$!QqO^0>Q5 l~[' );
define( 'NONCE_SALT',       'v=>[9/E8$+_l2tJC&_8-.xfg6rAqU*MKO#e4}#[9alD#8KWu@7Fo:UOEG?=d_xGJ' );

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
