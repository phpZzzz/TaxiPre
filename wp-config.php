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
define('DB_NAME', 'taxipress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '9BbkM9,][yi!W-yme%WH-qE.ug0rxbDWQ{}B_qy_I`+Qbl4*T!G6Bp3Q5j1xB=yj');
define('SECURE_AUTH_KEY',  'W!F_`]hD]HX+dSsv++1?5 +c8mnJK -ANaES8i<IR}`7aO`$k=61K.Y2trt0}/5n');
define('LOGGED_IN_KEY',    'Z~(yZWINW%riJ(u+(E>X<*#)Qa2&D{2ce2Jo,Xt wQM-Z^qi+oO_q|kwGR%AW{-(');
define('NONCE_KEY',        ',I%k]+~p}+I))d`UWyj;>ZdBRk5;&{{2p0`9:6OIIhL}4X`.R]PL/{VQFWT$f8.H');
define('AUTH_SALT',        '0MOy[CtcmkK^@$:L#ala*PLn<hJ^B_cHzlQdZZF{V;=/P^7<d0E1{7N1.Y-X$Z W');
define('SECURE_AUTH_SALT', ';cCo;97LewQvz:a,!Lr&E@X?`L!-u  tHf4[,mzZ^}p -^i}QdN?UpMZ[d</M^fF');
define('LOGGED_IN_SALT',   'c(9!U6r}H`7Lg@;W&Gh~Y6Tdo:vnBuzlOcQJ.8i4I?V`:8O;ct?1S=v#hVJ=F6Aq');
define('NONCE_SALT',       'G*72ZA}f^+{p`Ev_|ABDD)@Etf?VJiVl@rY13-iL-&Xwyr3G9Qw1Y42Q-_ eSWAE');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'txp_';

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
