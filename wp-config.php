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
define('DB_NAME', 'u281826379_panti');

/** MySQL database username */
define('DB_USER', 'u281826379_panti');

/** MySQL database password */
define('DB_PASSWORD', '567degstak');

/** MySQL hostname */
define('DB_HOST', 'mysql.hostinger.co.id');

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
define('AUTH_KEY',         'AIE!%k`}5y_q3]J$1b6#2}D.{. r;glLKhy6,~n*Kt[0|8`#E. 0H#I`Le,ikC]<');
define('SECURE_AUTH_KEY',  ';+Cir&Sd2G%h,F0gs,/,ht.uq,<,(0lYvD?}UYgES/2Xx1UoW#<($*h^<m0%v;]x');
define('LOGGED_IN_KEY',    '7#;j?k8N=8{Bwr))-/R~PvcFD-#{vI:OWI88hfpq?3.3meuYpbO%U{{v8D~%-ANM');
define('NONCE_KEY',        'xPg[m`a^BRXlVxQ%-`@Nd6,?RE;yumX1m%$AXIQpP6`I%l#dsuZMd-0j4Lv&BrCR');
define('AUTH_SALT',        '.gB .JLnMC|UuaB4@(XqddkRb@|R1-YMR{B?udMS)IwcZlxL9@b!_4I<mWYGGZ<T');
define('SECURE_AUTH_SALT', 's< )%wd[(g3^ASsau2r{L1q95&XuhGDB!ZD](1#Cdv|Y58!@&cv/>t+y9np~jsN)');
define('LOGGED_IN_SALT',   'G]d$|%)8/{{,ln&~<B]V3!XY;oR6[Xg~;m%=;=[D>!Kc*]h1q0>,,tV>s@]f#J<`');
define('NONCE_SALT',       'cB+ud+d+$z6|YT2}l~[FQ4PTFv)eh~1k-xO?JQ*P)(kg@t{Y}a#W$3i)1uprpnb ');

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