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
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', 'D:\localhost\gettimee\wp-content\plugins\wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'gettimee');

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
define('AUTH_KEY',         'm/HlTV.LpUSefIYzW.JZQ9oq_<%kh%Cui44S?j*uw?6Nn|<;EG_!++o@MXPZ*^?0');
define('SECURE_AUTH_KEY',  'R]W#.fz[&W]-?B2a+Lyg?$h-R,cT5yZO9b5eW}F20)37i?lv+CnA2-l%;u~X#9]&');
define('LOGGED_IN_KEY',    ')lJXDgATyoC]#$HnBGz+G>xn.b=i*Z|Jmj_3LKq9GnT}:F^o-4ZcP-]^:.;+Dqux');
define('NONCE_KEY',        '(sk->a<i[=q{dn9[kvl|X$po[ok-AL}*P}2Lh_k*1S@4O|Y6{GWGCPS,+2v3}0.1');
define('AUTH_SALT',        'Yc$a?+3E]_AgW@^oV!qTaw|]pNqo0+o)p -`2]ULoCjv(jW}0rE -[7-/Rq-U_7y');
define('SECURE_AUTH_SALT', 'qVd>[=n)>1bR0O-j[nNd(i r?g(-5O4[h$%ky`cWj|h2f34 -WS{G+o~ufila_/K');
define('LOGGED_IN_SALT',   ',/~ki_+.AFh*W`J/Yd.GvKruU$l}o~;&+y`GokmBg(y:X-mgk_D_-ExKe^.2$afr');
define('NONCE_SALT',       'h||Xe]{5FT9h(nd^BA@k_TqTQ2-9tB)P$qzqm`3Wu}x6)U6Pb)V,-5N*%4k*R?k>');

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

define( 'WP_AUTO_UPDATE_CORE', true );

define('FS_METHOD', 'direct');
