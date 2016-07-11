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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'golden');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Db2&VsG1sbv}2s$|fF9XF}}+|frYz T06_x9+|+ZS21}s,(J~oDbG:%M42L6{U)3');
define('SECURE_AUTH_KEY',  '8}en5Y#bmeyr`<0EIX1g(r+b=]lxFQp 7<bi1k]:neJ%tN1n/BT[Oh.K$6e>$_rN');
define('LOGGED_IN_KEY',    'JKoy_l46Y4UmO+rZZ2fG?[Je,(y#F=tyGR~nbxg:B!7I<}%c%x~rq8c*n/xw?KL6');
define('NONCE_KEY',        'qj$PeS2hspFTN5=0_5W7+@2&a$+zsx)k;Zu]Qy#7(zyqBE4ay/Sa:0@Y!Q_]l#R&');
define('AUTH_SALT',        'f2B8cIzT0bg$VG[N$xd}489W~Y=cHxvpK8>/]HSd@6~yHqw9Vj#zc5I6b(Vsy4aB');
define('SECURE_AUTH_SALT', '?tD@ISQxVIc+UHtx[Hz8~/_5}OUv{`Jk&H-o*|Pga%15L <Zqs!dAv1f4/Wa]38c');
define('LOGGED_IN_SALT',   'bPR!}8xH6$B]_#UHmF_`!_>Fc(GrcT~ki#vw:ih!<-+pBr//tX(%)`#0nU4Ij3y1');
define('NONCE_SALT',       '7;)2;17#F?~`a]i`u/Kl`eJ(-[Wi;?JuC:Ll?e{vTM|)kZc10t>2@Pk=iu7HMgGn');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
