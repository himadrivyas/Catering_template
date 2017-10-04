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
define('DB_NAME', 'db_cathy');

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
define('AUTH_KEY',         'X2pjR:X+,&]z}B_ii;z*8nq%#lw@Yr(WT|ejKk>=uWcF4_n[{=Nc:-Q^qZ3HZN?_');
define('SECURE_AUTH_KEY',  'e}t<(%)x4CXk+KJIwosz)65_2221ruL6Bn ?HIr43Db*#5SVkhNNIQ~H9[Xu|JU1');
define('LOGGED_IN_KEY',    'pJhaOk1uTm-~zxdJ{acf%05)1R,(cb4KP|W^[!E4ppYXl;Rk`bQ0!PNimupCQn||');
define('NONCE_KEY',        'i|I$^Jh|Qr;OiZYw2h`h+{NvFdTy]yOqR-j=!V;eMwZ$mR.gwx02!W@YWzbq3qLD');
define('AUTH_SALT',        'xF,s:`n_u@lX_ub 9*?{lWo|k=!0SRav$1UJ~DJ.t&%0/$*%_wjK ,[&@>PiB#Bm');
define('SECURE_AUTH_SALT', 'xI.vN#MOI%COWr*&s?TvmH+&3)fI&FEkaj5YZ50;v%DEZy<]r$cfSrBNYMad0_)3');
define('LOGGED_IN_SALT',   '*w?.3%0^O~M-2JqRRO@zwqZ@!!~Shlr>/io Uv8ksuuG*n0N-=(|YB4kmjZ3yy#L');
define('NONCE_SALT',       '@8c80{zvmDxIZwf%GG hkqkSFK@@]4^4}QxGJQh1*[20<eh_UAE <EfKzyAHCy h');

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
