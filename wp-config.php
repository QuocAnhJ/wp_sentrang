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
define('DB_NAME', 'sentrang');

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
define('AUTH_KEY',         '7r!}oW}<wfOeTGtNBttG~y>J99<Uxwedl#5,a*jI}xn DY1$v`B(MTWIcD]O;uG=');
define('SECURE_AUTH_KEY',  'aD-.B1O,S&U -GG[FGjB/9gr~,L~gl:`y:=,]@*ZnT{[Ddq9,j&a2BIq*<fMGt6o');
define('LOGGED_IN_KEY',    ' )k[-;X6=y,#l)f!x(g.?EW1RoUyK/zrw9lI4r/uq#|q:~0,8tfW)]s00A s.c%9');
define('NONCE_KEY',        'l0Z|&Oez#)@M.!w[5&[:y+~0*qRtH`jo@~*PWQt$:5_XxsZSM`ZCw(^P]P2)x^ND');
define('AUTH_SALT',        '(t1yboYclETsVE9<&`PfPH-GDwI?*;eS~[PTj(-.R=3xJHnU3A,q#odszD,_jLjz');
define('SECURE_AUTH_SALT', 'a7<G$fU1]-:e9R-]6wS-b#b/j1by?WG5e1D)+)zt%qqOtmCSY4}u,fmD4((IVS(|');
define('LOGGED_IN_SALT',   'Yz{9B/#h5&kL{k=1Xeo/B{IAGVb:eMob0H0:JGZZYXe9b96eZS9`$E2iFX!R(TU?');
define('NONCE_SALT',       'RH_~f+&;L ^4CnjbOrN~y`gH,qL`AWNeMN_$Csi*4moeD!U3PJ6lv!A=!4aGt[my');
define('FS_METHOD','direct');
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
define('WP_DEBUG', true);

// Enable Debug logging to the /wp-content/debug.log file
define( 'WP_DEBUG_LOG', true );
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
