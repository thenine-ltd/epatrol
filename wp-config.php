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
define( 'DB_NAME', 'epatrol' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'ServBay.dev' );

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
define( 'AUTH_KEY',         'Ustu}2e$<sfU?r?g|OgE+Y}e;<mdY&+1DCt/q(3H@V-r@A[Nz;E%rR*T/uf1N6@~' );
define( 'SECURE_AUTH_KEY',  '0)=f$)JLcC5kSpBf3D8_>E2bHM9ESd+U}f$H[}sBAG`IC)Lwzfxvp3s&UlJQx=40' );
define( 'LOGGED_IN_KEY',    'Xkj]z]~fUHhiTfT}jvzqi]B*qrc@oTiGFi76?rlOQzT8uwNLM|dKnzNtV9;hZUCr' );
define( 'NONCE_KEY',        '##g7v/,I!UY@!8;~|F@,jBPkYDF,[i!Id+)+Ov:>Z[9aQH2OY^/4k hn bNX:TS@' );
define( 'AUTH_SALT',        'u}t<w8#(gKEMmq`UU|@c?H+3k`pd*T@~)}kf&EN7Z((3k.iUPVqu!NU}zTa+si8X' );
define( 'SECURE_AUTH_SALT', 'Y%5YrY>;vY:4Jx<MeAAD{bfM7J7%mKsT71L>w+{JMz9&HTJ2og5Jw=Ze:wg%J#>9' );
define( 'LOGGED_IN_SALT',   '4No*0x^Tx1WcTaZV}Ep1$X](5$:6c7V Yw|.N5T*pi0gO5XBF98{qr6@8c]?g-Fe' );
define( 'NONCE_SALT',       'AD7`^e>8s,`S3Y :g),eTjCguhjm[f+^sq{L[va<K`1V,h2Cf4Xx=RkB&n7c_m0[' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
