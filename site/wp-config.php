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
define( 'DB_NAME', 'std_975_sleziasfalta' );

/** MySQL database username */
define( 'DB_USER', 'std_975_sleziasfalta' );

/** MySQL database password */
define( 'DB_PASSWORD', '*****' );

/** MySQL hostname */
define( 'DB_HOST', 'std-mysql' );

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
define( 'AUTH_KEY',         'AfEnYx>pPG8+8Mf:W;gjm%0.1`/1/ewOpDo5#ps~-^nO?nB9]]onQ_RoPY>CLzY!' );
define( 'SECURE_AUTH_KEY',  '^DzGA!N:q?<hj5#=ltg3K#I8-K]*]~;WXsxYB.-(w50uF>:cj7.:v#XSW?JQd&mp' );
define( 'LOGGED_IN_KEY',    '?H{I*d&w_L L+43koXsTeO6E&~]AWyOk1CXTe>.fdD|{Q_KSi>3)hL9;Z|Mx6UXQ' );
define( 'NONCE_KEY',        'LMS?W]FUG{V)$H:1s^,hh;1Y@AZ{NEw%VV+JC}Eq(y)aeg_,z)b,NKa<ND+CR%vf' );
define( 'AUTH_SALT',        'i$,<{mZ{X(N<2Uooe([O%3{[d#Wkt#[L@( .*8QynN)b>HzC:-`c]8Bw~cW_bV42' );
define( 'SECURE_AUTH_SALT', 'mJZlfDJCA[&l `3uLy@f@5ZZd7D;qm<ykof#[+w=@$8TWpO7^vyn;JvjQW 39aC%' );
define( 'LOGGED_IN_SALT',   'J&0E2|v-#>ODk]$2#ypQaBt35Apt~/#MoH@@mOmk4M]&JxaeX!d1Hei{n{h%|@D4' );
define( 'NONCE_SALT',       ')4fp<B]JUcFq_v8?0IQi%3X9H@jvyL>9[omwMe}iJ<w%F{?DW?9th$]uz/|kKf`W' );

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
