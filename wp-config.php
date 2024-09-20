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
define( 'AUTH_KEY',         '*!F`Cyx@*i1P}}iAtC9Hpr.|4j(U=i.o<oDGxt|a(/,QE:^z!(Nmc ~5S& {[qyN' );
define( 'SECURE_AUTH_KEY',  'u]][jSl|PI/Mgz>P.g(O997|huV8mr@CPF1x~y]U_S>jRPZSsAq+|z;cWv?HyZKU' );
define( 'LOGGED_IN_KEY',    'tT-<{OaiUre;NI }PSWl5}D-uDXQ,:[/M@b;77$9nckA6_m4w-HjZ6!|Pm*)>kmQ' );
define( 'NONCE_KEY',        '/h/cu59M7f%FgzUc7j_VB6>2Izbb7NZKb`TCBUpnMFx9Xin6;M5vlAohnP|$qp?K' );
define( 'AUTH_SALT',        'APwECzwS/xQ5z.({U5g3^)Yf::!4{Sa7Qqa|s5_VTWSIZtO^AajmDVjh!C:T:zx.' );
define( 'SECURE_AUTH_SALT', '{T0.n:aFu]X_R+q@YaWIYR<5mraiU^h0qy,JR9#=Ank7s(3Leq2`]@&+Ks@909Y$' );
define( 'LOGGED_IN_SALT',   'Uv<4vo7RkW4li@I4=2M!_{TXD0~4bWTMv,L<qjw]slHA&-y7x0CvigU_YJnc!m%Z' );
define( 'NONCE_SALT',       'T#-R+w5%?(F2q+J(HYg2.[L@aM,PSaPS$VwMb*Rk!rYuEnh @EbSs).)`fz:iHR^' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
