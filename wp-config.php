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
define('DB_PASSWORD', '1axsjTskxkL6YrEw');

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
define('AUTH_KEY',         '/n-jrj+t]/f1/W4)KR3lDTZ@$X=GGo~?2pq65r5U8?X8daK>O1-/cRLE= D.SyAU');
define('SECURE_AUTH_KEY',  ']-(R}p_1c?U-|x6X|&JLG&HuXE5pC-+wOD;0&T/m|U`dF;et.=T-9]^#W!v(+}+N');
define('LOGGED_IN_KEY',    '+y|d<L;8Fcb&O&h-6e|T-egiQj$|Mvt{{j/3#r@+>j[ptOgGWEw<ImJ T8T}uGzE');
define('NONCE_KEY',        '/-fD&n W2wrff=U6[SSM`uwcvbMn@-djzIGIL^1N:4QC*Z<Cg&1m]]aI~yefO+#e');
define('AUTH_SALT',        '~`SJvjBt^KboVHn=Lt+e8Z*0 LF|-]4ig*(G+][o|;pp&vFNTZAb}5+vX^b6c`.i');
define('SECURE_AUTH_SALT', '|Il ml&Sc7lu>9[Jkv2/H](>dx:?I6Q0RSlyq7,VPGFw5|VkXZ.&*GX*2Xu&Hu#!');
define('LOGGED_IN_SALT',   'xXaqh1^LIs }>XXaV|k4+qAb-EgumxYp3w(%!g?ZIuTWIN_|6|lo49#`#1j+;FLv');
define('NONCE_SALT',       '1{}1SBh)SLiv<TID(PSXwQ:r%Y(%D$T^lbwD`w{d-x}@#t&-c?9Vq5J3P?@VE|@l');

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
