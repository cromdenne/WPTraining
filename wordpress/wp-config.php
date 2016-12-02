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
define('DB_NAME', 'janus');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '-E8OEo)Wd1U@^pr./K$|-r]S+AhG2SgW&iq{SjBQ~AM`%LV,S(&+bEnGK8[|{nyH');
define('SECURE_AUTH_KEY',  'WxCvwR8_ub8@0]QE#g[8+%F@:9}L@>e|_E%|:V)XhTq@2q(q+v$D#0~%wac@+|}?');
define('LOGGED_IN_KEY',    '1rXdinSeL`-yAJ7}Z+f@N;2yTS+YSaE[7J5Y~0ba@1svy_]:8z3VV|mq&pAwapj5');
define('NONCE_KEY',        '5Z28n]%+6g]lve[?b7)(D|ScI`<0u:u;P!=sLq+09oU>}_~IW-lM7DgG(V:MuHGp');
define('AUTH_SALT',        'fBZ{ZoH38]-UW{G$HRY{#|+J/9|sI>%:=c>4T6Ykc[Zr+lI*vyt[*O6:hSzHPSyY');
define('SECURE_AUTH_SALT', '|2-,iOrC|Z0<yGVN$#>fGb00_DK?>*)Xr5</z9+4)ErH7h6f!*$F[UsqWp<C98gu');
define('LOGGED_IN_SALT',   '71/g)rfW!C*D%4=~247f}t;apo*CamVDaOsll?u>)6pe#kth#<J-(1xcSs%{rAC}');
define('NONCE_SALT',       'v>4uTi=`6{yxO:;5f_R?Ts &elUY{ON+=N>{>uy{bIxXyNE*vYHxi|]=xd~BM$X:');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = '9a0sdf88_';

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
