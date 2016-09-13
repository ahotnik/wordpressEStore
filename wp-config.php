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
define('DB_NAME', 'wp');

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
define('AUTH_KEY',         '.PqPRUEUUSx+(w9 .*-{aui?yKxQfVeB2of^Sf}O^s/Y~|(}t!iaGZFtW SZc7Xz');
define('SECURE_AUTH_KEY',  '2gb)}-^@c_;9CxF:>~R1]dfW*pC2gZwHn!-T?o{]r{|^my[PM)R$ISy~?Vo(;/7%');
define('LOGGED_IN_KEY',    '4UZ8l:>aVEiZk-}@#|<gtx2W)4E9g[J.h1J: #kop<B||&O,7+jaF@Y|$E|9-fC`');
define('NONCE_KEY',        'ZgCg*yqv+1_H1!Q&;Ib/V!.FOCxFJwFnV|Wor%Fib.  -7NNZd)HQ6Y}K[HZEP>D');
define('AUTH_SALT',        'AU(Z0vHC(aBd49P=99/j+r+z?,6>Q^}p>w{t#;jofE`]Ne{><x-|CxVLuHwv3KSw');
define('SECURE_AUTH_SALT', 'Sim=[d.2<+(kXXy|>mw_UvjgufAY -MF4{(~8?iB`_G_jP5G=V-P,m{(zUfGfp{C');
define('LOGGED_IN_SALT',   'BB 2>{CCj7H5>j5QQrR-X{sS+Ix/p:ydW_`Kdu9Q``2W~gO#u^4Z?<&j}dU_utHG');
define('NONCE_SALT',       'nMm_9Yp7ff0tRm|g;9+Y3]}T~rjT+DF6of[A+>>nS@fC7|0UoiR_|X_jwgx$]pvq');

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
