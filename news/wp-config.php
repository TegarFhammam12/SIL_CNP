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
define('DB_NAME', 'database');

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
define('AUTH_KEY',         '++I=cC1;R1kF&1%sC8Q!3T8A6DQ<Y-6W6L=pt_[Ab#nuPGhy_N`e3H?9l[y)j&{1');
define('SECURE_AUTH_KEY',  'ysQq6Sm;j|V>x6.S1sx>O$#jaX/ Yq`|{>)hR84ME0.4v).tSEOdaAI-D+[hSy<;');
define('LOGGED_IN_KEY',    'sAZHL91]D$+`ZsGenUI^+*{6S%V)htdqCz7&|=+.[{<0fTw.autikEQ1.WM[(|}3');
define('NONCE_KEY',        'gZH^4l9@f!&j@x0Ku{c;nT8sb~[ZWoGghgdM<H{@D1H=0z0J!3V37%d/eiybj=-f');
define('AUTH_SALT',        'Ax-6B#8|ar$l@t=#m=Ei}:(|DOzQxg?EHIniU:3A9!pj).COMLM/3k(!MPi9 9CD');
define('SECURE_AUTH_SALT', 'E;GEuLwt3T5Cccs72GZvBT@gaD<2b,8o<DrSo)-b5<X&u?!km%u*wPPjKR8IBMk|');
define('LOGGED_IN_SALT',   'MGPY54<FzB+5?lJHe7j+Xy2Qoc1_jU2?3K-5m),&HW>-w~Q`cM/%dfAfxf0M^,H;');
define('NONCE_SALT',       'mbBpWx D`@c(ZP=-Pw{I)wV>(}*bRkoU?-NPU:q~1T#uQO6YVw-$)-J)A8}vJsuo');

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
