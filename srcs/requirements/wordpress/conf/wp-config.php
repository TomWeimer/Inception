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

define( 'DB_NAME', 'database_name_here');

/** Database username */
define( 'DB_USER', 'username_here');

/** Database password */
define( 'DB_PASSWORD', 'password_here');

/** Database hostname */
define( 'DB_HOST', 'db_host_here');

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
define('AUTH_KEY',         '_QNx1%t?,7NB8#X&eUFP-Ku]W`.ZX*_81cB>(3T7T~V3_>GCdIKzyev)1Cg=%4AP');
define('SECURE_AUTH_KEY',  'fnxg3H+%Mo=x]:t2+;CC)7n_u}5e Is:t{3e*r! c(^|35.mQ[:-@a@yAXC(T ^f');
define('LOGGED_IN_KEY',    '^I[>3FLfb:WK3DW$=j_A|+A1bke8+-]7BaW(W~nlusDZ>r6[p/-RE#!PfJkT/Cy4');
define('NONCE_KEY',        'l5$6 3o2z<V`QFfl?3S|0uqb1n|9^ R=^56#r]Pi}H9?_;@C$yv/EoPzg_fBn6ju');
define('AUTH_SALT',        'g`Gqh/ =e@<LaW2=QN8At>r7t0r#3^Kkt%nEQZmf*)dk|p#x2l}4r>!p4cm&}gR3');
define('SECURE_AUTH_SALT', '%`i84ZHl9Arcz1Gc6?)Otx4e2P320 ~/!%0 <9 >jm*g#miLw5|x2$(;+<B!*,Wi');
define('LOGGED_IN_SALT',   'x^dd@j<.32+L2oO;-jD^I IWYJpn}%AJfI-M}pu6yZuVDY_q_KfsbfCAJ&0Bts4q');
define('NONCE_SALT',       '_PG:Z?9%N;f&QTy!3Pb>lPTw>Zq2ASG;8NJG+/voMHE%.<{u<~+2H4Jv7;Vi2BY(');

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

