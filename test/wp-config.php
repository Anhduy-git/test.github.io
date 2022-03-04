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
define( 'DB_NAME', 'testwordpress' );

/** Database username */
define( 'DB_USER', 'testwordpress' );

/** Database password */
define( 'DB_PASSWORD', 'anhduy4802' );

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
define( 'AUTH_KEY',         'NWx@#iDJQ0D xOoSBO87XGV3T,U0b@pg^YI:#lJmaf=]Y%2/QaGpAyy4b2TNS92V' );
define( 'SECURE_AUTH_KEY',  '#ZMNFFD~6w11.O^GhOUBj4U^P%Rg,oVC60m~j/aNW>)f^vZdeydKh1My&/kjSz!u' );
define( 'LOGGED_IN_KEY',    'OHindw<c|m>Ij<1q!TMNKl%3]y^kkx-h{(Q5*m??IlgZDB2]J<@*c5M{SgAJX,`-' );
define( 'NONCE_KEY',        '1x6?V d8.%fYC8iJLpHg~hZYy(MWNY3 Rq:p+I0Q0C:s|Lxqb>~Z[GhI^<qK@XR|' );
define( 'AUTH_SALT',        'pW[+JpV&Y7TIDN@QimH>P3%a.6P].t9?I9sK)[E11KLe!`gn3RaH@2i|fxt6M.,X' );
define( 'SECURE_AUTH_SALT', '^_ {xnBN7lK:#$fI0b8r=a Afo#3+E;`0BOYNs:>^;S s2d {o,C*!@Ye)Oeq0Uq' );
define( 'LOGGED_IN_SALT',   'A]D_pEr}9;gEw0Zov?HpQZojH{p{Gvk`I:sfD!%,0?rr/Q`UCT,-8N_skTNd%~4|' );
define( 'NONCE_SALT',       '9_N+9t7R}?}hX8pR-xdm0_!dOGk^xjE9zVMUQz#~]$dlBFG|-IW>?GX|hL.Z^s3G' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ad_';

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
