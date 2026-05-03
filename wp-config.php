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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'charcoal_shisha_indonesia' );

/** Database username */
define( 'DB_USER', getenv('WORDPRESS_DB_USER') ?: 'root' );

/** Database password */
define( 'DB_PASSWORD', getenv('WORDPRESS_DB_PASSWORD') ?: 'rootpassword' );

/** Database hostname */
define( 'DB_HOST', getenv('WORDPRESS_DB_HOST') ?: 'db' );

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
define( 'AUTH_KEY',         '#%gsZfF^!2{TKHXmkjP#2~}JDw?@%!aJCe(u}(.h/64b_lkGOG77Rk.6(7h;LwoV' );
define( 'SECURE_AUTH_KEY',  'h0V ZYTFyNE]k{Jvaz|Vl%u1iOh1B}/DOQ[-;xnwCLVT,.D9m8*mYw).$^Ud3{@&' );
define( 'LOGGED_IN_KEY',    '.J|vWl?|8uM*yc~JLm@enZLz?6xK*_}kx}rrBo<6LB3ZEaMOiLqKmPZ)4jfkZW?b' );
define( 'NONCE_KEY',        'k[:*d!S!L9$`/lx..$,AM^>c8A`L22y)e[GCsMxDdLnc(*:&f4X)w{]uPs%|;%y$' );
define( 'AUTH_SALT',        'd_roW.&M4fBY,V>.nbo(<sbLsGTikjY<e9L%!5=@@yR?]Vnt9}5T8U7HehaeBd8e' );
define( 'SECURE_AUTH_SALT', '8;K%!cd9x`5g&xwH&<pKTYFx]`Dl*&$wO,)4-gza33M:AK3lF.[OV~gW@VDLY s*' );
define( 'LOGGED_IN_SALT',   'oZx#@hZ8&>[9}TY4[^U7mG@c[Ep]7.0({e1@[UONl+r:0ar%E@Ic`%7m3MOCXn/_' );
define( 'NONCE_SALT',       '-.BGO|K94(!Nw_Sj[9gC]Mp5${H}7.MW)afE)7qg3I^MiW{Q(=H96YRz|NWfY[4y' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */


define('RELOCATE',true);
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
