<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'fwt');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'NZRt`Ott8[K<06._p0Rxgy%XyUk;LQ#u9go2)_1EXBrFu>Kx/tDBrAm!++v$G.xn');
define('SECURE_AUTH_KEY',  'RGQM51b@Hrg,A>Tc>*eZR-bf5K^dzETUh~9pb)c24+J:Y{ ><6(^KTJ12,ERN14K');
define('LOGGED_IN_KEY',    ']w^.]bPc)+g{yzQ4IFS[O#->d<eJr,^S8I=#%SHu2m5b?Wu^$5qA5#=i9G>jPOj5');
define('NONCE_KEY',        '~f}9+[eI&zlI-*SopzT]jm[&z[d:H10xa%`y)rP(-0nr^fw}^V^.$CKF gaVXfNy');
define('AUTH_SALT',        ',@P8OsIMO/OGK<C8W3qFG%@b??%#WAn;ge(.*/Hcc-$zd4l$1buKLsIFY_A,2Nr/');
define('SECURE_AUTH_SALT', ':bx8;3%7&Z]LXT]T9t7Bagj-SS,vD~mA@i:EQ?UR3xsZ6JF-] Xfox>?J0U=DISb');
define('LOGGED_IN_SALT',   ' |{<qe8DG]s@op;dm$/gO/61(B*0ApHE6o~5{<h{aqXzsN/Z?P=?#5<[}xNCdf(V');
define('NONCE_SALT',       '-}swAj0/wTo^mTTWtZ T|Q-SGa7z{8;3G7%P1rX<&?.1k|r%qOA9cosk#H5RZ?h6');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
