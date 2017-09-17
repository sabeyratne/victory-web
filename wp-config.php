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
define('DB_NAME', 'victoryi_newwp');

/** MySQL database username */
define('DB_USER', 'victoryi_newwp');

/** MySQL database password */
define('DB_PASSWORD', 'Bbgm3Wlf^F7;');

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
define('AUTH_KEY',         'H|@3*wk;kU`/svd6MSz~Z2>wH gJ*v6zr|lG[:>yJ-|fx1LlOR/&N%PE6FI8YBZ|');
define('SECURE_AUTH_KEY',  'JuEDKVnxDQ.|Q4Ff]gwCMlJ.i|wa070/teC#;_M8MD/w|8GJ!p>Kx$O<Vt_D<,ES');
define('LOGGED_IN_KEY',    'T>b$B1)K~:lwWY-8MsaI15U6p*8L:?K]&X=2`rP /Dy1Y/pxR(TdFWOBuA,a13J=');
define('NONCE_KEY',        '*/1U*F@{7V|L`c#KY<.A5[27Z_A N84p14Q %-mJLL//P[4~HMjb5&s.3dp3,7B8');
define('AUTH_SALT',        'dRU*>q T3Ro7!w8Ay2KeDw<Mu=Za`=r1$>tU}%6{`)TVHhx_0i?0c;++z?SSC2&t');
define('SECURE_AUTH_SALT', '<e(Y_{jSp@%UbDV_EAKnI=tLqmYx/y+|@}<yV$E+kc@BivTo]#x:Y~o!&K6AmEO[');
define('LOGGED_IN_SALT',   '~Xr>`HMQd0YSFc*!I&o$if{qt~A*$)Ntn%tH<*4N(T-<MY|7H|QN-{DF9su1DW>W');
define('NONCE_SALT',       '&*NgQFgikM<:jy;U!3/hOSdG?#ohVqkCU8`#W;p-):F*$)1jG6&[CRiiQ?rbpa<m');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpblog_';

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
