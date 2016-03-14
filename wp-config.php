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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         '/mxL+_GP$k0GP~n`[s%l.{vn4S]0@hc.}.>s5#&Jg+MOD2?Xy?:CfCru,Max=G1:');
define('SECURE_AUTH_KEY',  'g9~8598<M:v`p~~S&@dHirHXHE?pH&-j$}.z{g#*AN^,45N!Nza6==&1*=tCPX~K');
define('LOGGED_IN_KEY',    'KWqA[4MK[@!rT@m;!LbQ.x-`H?VnPbpqr+ ?J_5T:wM</!~G=Jt%_EHs^[+|RV@h');
define('NONCE_KEY',        '=ASc_>eJdEGLLh4Hf!?V)$RU!mWj/W`QS~,~G3Om!gpa]a{IJ70@K{@VVkVNFQ1D');
define('AUTH_SALT',        'd-aah7R+rPB_8.b[[1?yphDOeb#s3&x&U6]Vm%yK?I#ztg1VjgX{hOwqKV|UoCL7');
define('SECURE_AUTH_SALT', 'nx+J+.d_A^I<zlvlqGf_)~|#_*2^D4p56Y84!d`SRH0``;IL@-54TyUg;6rU1>|D');
define('LOGGED_IN_SALT',   '&SaU0@jT$ChJ@Q#Q6_Wyu#^3KKRN-%o~.a*eo,A[kfh}u1W*Sfw@maf| r]}m9?&');
define('NONCE_SALT',       '=o1,.0~TUFMRAw:h6j5u$3(8SFb`qoew<HSS)FE$t5r(x=kujGW&Yt>`LM_IF#7k');

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
