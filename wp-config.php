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
define('DB_NAME', 'timisham');

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
define('AUTH_KEY',         '5mi)(c(.21K8lDU~Do]{_FMGF]sCF3G00`#W{>qQ12@muN/!-J0?D)Rk*Z[br<d7');
define('SECURE_AUTH_KEY',  '7BmO|T[flM-I60s/HZm+gUfgA2a$bo]FjCx+QztIL7.(dZO;hDs00RDD{#hZ:z}B');
define('LOGGED_IN_KEY',    'JaV7hnWak`_haI9v+b0rhDCUVeGzZ73)]_M:9tP9=WeXqYI3Fgn]Hvsc$J{OD1A_');
define('NONCE_KEY',        '.~}D9/-tG`j4PD1ye(,[BEO8[pkr:xL:rgW58vB<m)Pln vNN?T$Kd 2L*/ObW4e');
define('AUTH_SALT',        'd&q(j?1HWdDZEK-)r7$tFls.W1S3a/~IWF[d02MN SN-(5[Ycx^ Qfe.r`hqo)-D');
define('SECURE_AUTH_SALT', '|=ZM{Qb,nLg8-`|UY|jh)nlA](^9p:Wx7`6e}_ixAS,U%b9McC9_Cp|nl]NY%-(j');
define('LOGGED_IN_SALT',   'SjO`Ergjm-<|K}C_Q@^`J!je8LnR4K}1s>m#:h VoNGB`imKwrYd%heAx74)Pby?');
define('NONCE_SALT',       'n;wzM4*!qbI=D+v8$?$LwCN@|I/i -KL&?$4 |ngJ/6XN>/Y_?eJxzb5~eSj+3}U');

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
