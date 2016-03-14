<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_HOME', 'http://newenvironment.us-west-2.elasticbeanstalk.com/');

define('WP_SITEURL', 'http://newenvironment.us-west-2.elasticbeanstalk.com/');

define('DB_NAME', 'elephant_wp');

/** MySQL database username */
define('DB_USER', 'eadmin');

/** MySQL database password */
define('DB_PASSWORD', '2g5xNR9APn0s8vkeGwsH');

/** MySQL hostname */
define('DB_HOST', 'wp-ebs-poc-01.cajxef5dsndk.us-west-2.rds.amazonaws.com');

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
define('AUTH_KEY',         '-a{/gIey2=a~,4*4GTrptt<?kdo+jl;RWm,{x||WZRwk?`>;;@TgU)-Us}A1-V(8');
define('SECURE_AUTH_KEY',  'S0C&[Q^o%]!BI#-4O]&#{48Xj|n0B+>(H.+^FS:V^N(XoV`h+K65xj$T++>JD_oo');
define('LOGGED_IN_KEY',    '|`K49qBi)dXO3|AikN*.Qpl:cu4;);p)c@)q3fyFbylfz7ee!e0akh|uFL$@]f%A');
define('NONCE_KEY',        '0?Lp7V+_SGJ@]Ey0;:j($t$+YKaj-FfKfcO{pN&dPT[}jBbD_myIMl-59U$s*an1');
define('AUTH_SALT',        '{|[XyGZ|u#Vx&s<&r{uC^~~JgdO2oR*:)hO7KKFh0{+^ze)DP(iRtQ:+bSw(nIt3');
define('SECURE_AUTH_SALT', 'zGmwky9=/CTmsNhh]Uig:O34v/s|JcPUSYF$<WCP1>:6qo0-_nS8Ms/rz-)aQB?A');
define('LOGGED_IN_SALT',   'U(l:/u9nKje;So: dRiw[.>[p);fb 4M@ &YfYab|4D$e-[4T)3tJ!$y_h]5wW}j');
define('NONCE_SALT',       'ra7Za6b4.|a;Z,AvvI9#xJts~4d3ts#o6]0IkP8lh76=AL;8{D.Qd6v^cEq{{)qT');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
