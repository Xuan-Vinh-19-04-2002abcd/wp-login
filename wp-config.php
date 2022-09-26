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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'vinh' );

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
define( 'AUTH_KEY',         'O>KQ)AQo9ipsVLVf-JnP<(%H([E9P1QQi6mBXovBZzh6Yg)DgBsTxIVf`xjItY!t' );
define( 'SECURE_AUTH_KEY',  '[=h%v-O2FrU/]Z?xt![&NdJ*Ds%fQ/BoS,.NG/4eru`$K#@4`mJW2x0wVH aHaqu' );
define( 'LOGGED_IN_KEY',    'QAlxYLqthRsnV+|PG#i4Sg&KUPF/#t!tRxQb ]||{}5t+0fI>sM.2@%Rt%@-EmF<' );
define( 'NONCE_KEY',        'g[fYo73qEV|xNer0jO6F<]wob`[{_Sz=YkJ=S,1F>dc((6z3^&l@/tlP:M]GS2~b' );
define( 'AUTH_SALT',        '^{0s~C{gZ6z~F60fiV&kl U&0Kr@_9[^`15;rIf|ke<HuuS&i{c4I^)KDII<<9OR' );
define( 'SECURE_AUTH_SALT', '-=:O1A<ni<[/8{%_KWiZ8zY+e?eSb+uoWD`mg,cLq^z%KF4. t_7Vj<<OH2{4h53' );
define( 'LOGGED_IN_SALT',   'X66;MoZwD$*#yV=pW=Iy~Eg:LPUf<gee=xbAYHqiFb}Ui_u9TN85h79HKpT 4[i`' );
define( 'NONCE_SALT',       '#u5JaZZE.RK@05},LP jGH1mND=G.i}#:HiuG2fA~TjPwZ>&:m!~{mL=ir#Oy:SL' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
