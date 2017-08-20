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
define('DB_NAME', 'bootstrap2wordpress');

/** MySQL database username */
define('DB_USER', 'neil1114');

/** MySQL database password */
define('DB_PASSWORD', 'W5AibnWZ124uaCnq');

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
define('AUTH_KEY',         '&2xMS^&Sn{~Vb5q`9B|U-WR`GBatF9L6,_sy)|,Hz9*k*jaE&:jdehxDeI:N<O{i');
define('SECURE_AUTH_KEY',  'dqB,pnUcr&Io5ap]z_X%dy:aKmatsYV9Rs0U#>}j^0SX$u(tKnV^X`<-9|aW*(8*');
define('LOGGED_IN_KEY',    'QDX__hxH/8Yv)pM5?S7qs/q*6B@4KJ|&>]c9Z4h8_aT.&eJr-w/J;uOA#{y /$6~');
define('NONCE_KEY',        '%1._R+kOBuEDn?toa$F2Po->p}|WVYjpRIOu,LUMbi!*HZ)AtMeH:C_x6]XYck_G');
define('AUTH_SALT',        '}+&6cDKJbYhBL2WPCVh]C80({E3RISwc+ {z7s1sDo&T[;A1$=++Y`N-jy#c[]M_');
define('SECURE_AUTH_SALT', 'y^:J,6$sOf!HnJ0&~6j$UC88PNZfs6L?Rs#j6rqJ-6`vy1I35pcU2L RU&.wqO8@');
define('LOGGED_IN_SALT',   '$iyBrWy_Au2-$r36y5o?fd=|=>:Z ;]Ho#&V+|vW+2F<8F[Z#B0(58,XN?EJsNGG');
define('NONCE_SALT',       'b%sw&ba=I1YCE,~|^Fw|J2(+9-b` 2n1yWf,]5|]`OiYFUy)DB5XbwccR0D/Nrp@');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dbbs_';

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
