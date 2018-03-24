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
define('DB_NAME', 'TESOL_learning');

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
define('AUTH_KEY',         'bH^p{g7+diI.GUjpKcJ9]<&/6Ub{wqPw8tct#B5`_n=v1c0r[5ivu=^+nfZahA/s');
define('SECURE_AUTH_KEY',  '5j|V~VGg}C&;zyNos-DL}cci0n~*@@Xv;Hp{.K-0dM$R,zsU1oWI?>^&?PjH-@mS');
define('LOGGED_IN_KEY',    'Q._~cZo/6pNWWNXPwB^P._PLw01tNvMON{XR4`+zTwIQdJy!`[/fd@-QcG8V#Yr|');
define('NONCE_KEY',        'i,:d-aC~IpA4B}r&E~OHTJ+7?YrqOE>6}hE4O]Rl<my9_4ZImnCWtiGh+9j,}ql+');
define('AUTH_SALT',        'gT-6u; K%@~.C:t0{4/aD~$3?bd{=d(A||`GS)}/73xw=O.m5+Da/&18Qnh)9*}6');
define('SECURE_AUTH_SALT', '~_zV+[f$Z2@BVmnE[R ]0omvu9DBD^XL>AFnO&8u/Ho)EI%K2ZsdSWb4b:k>.zPF');
define('LOGGED_IN_SALT',   'Le;>9|n<|[fINxKh(b @fR-nB!x(8..MXgnYH,FDBVqedMABcwB,VpQaz{Tv#W5O');
define('NONCE_SALT',       'J;H134%a s)@>,CboO!_K@Bu(Ztl|qh@f}pUlJO21JACLL@!);(tn:ONx6b :Zar');

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
