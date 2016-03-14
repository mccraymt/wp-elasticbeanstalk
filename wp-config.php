<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'elephant_wp');

/** MySQL database username */
define('DB_USER', 'eadmin');

/** MySQL database password */
define('DB_PASSWORD', '3l3phant');

/** MySQL hostname */
define('DB_HOST', 'elephantpoc.cajxef5dsndk.us-west-2.rds.amazonaws.com:3306');

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
define('AUTH_KEY',         '`-v&pn-{h7`Lx/TKA!BZCifYqogSFyL;i_I]e=}U`G/LE7tQ/]+7N[Hcz`YHc>f-');
define('SECURE_AUTH_KEY',  '04N_,|5$|E@,{XSo=@:FW~$}R8PBX^KT$gt|ROGjS7v$<FwHpxj0*IVV(UJz!zEN');
define('LOGGED_IN_KEY',    '-X/L-m7a>fc#DeBWNN`sB5Nt+$XzD5N-bew4O]ZE`mCClQ0mK9,S/O]j=B`RA~,9');
define('NONCE_KEY',        '%on8N<k-0fuD|=?ck>_Rx-iPn$Yo*e1vPU/1>>7V<jqfS&E=[W%(x %W_EVNE7g+');
define('AUTH_SALT',        '<)U>6Bl3T:-f1CN{4b_fOUkq%6^(ERjeR^BiLC^?[c.!PCb!H._6> aZ2oauQqH0');
define('SECURE_AUTH_SALT', ',=rbP*##wXXV@)wOT#W*R<l?B YqM++$sf~;]*Qam=d7xx@M5$g/: Igo^)A7c2F');
define('LOGGED_IN_SALT',   'kRY[s&!=ZkNMiF@SSo4.hht2 ~iVLSRK]3X+l[F $GPI!t*P=@x+Ur>t+r ,}_Pi');
define('NONCE_SALT',       'F|LzhUDDxb$&pkn,X#^v866Ci4D[~{9`bDTHPbnr-1Jvk+zACV8^Y`hTUCoHM{lW');

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
