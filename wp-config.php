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

 define('WP_CACHE', true); //Added by WP-Cache Manager
 define( 'WPCACHEHOME', dirname( __FILE__ ). '/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager

// // ** MySQL settings - You can get this info from your web host ** //
//define('DB_NAME', getenv('DB_NAME'));
if (strlen(getenv('DB_NAME')) !== 0 ){
  define('DB_NAME', getenv('DB_NAME'));
}

// // /** MySQL database username */
// // define('DB_USER', getenv('DB_USER'));
if (strlen(getenv('DB_USER')) !== 0 ){
  define('DB_USER', getenv('DB_USER'));
}

// // /** MySQL database password */
// // define('DB_PASSWORD', getenv('DB_PASSWORD'));
if (strlen(getenv('DB_PASSWORD')) !== 0 ){
  define('DB_PASSWORD', getenv('DB_PASSWORD'));
}

// // /** MySQL hostname */
// // define('DB_HOST', getenv('DB_HOST'));
if (strlen(getenv('DB_HOST')) !== 0 ){
  define('DB_HOST', getenv('DB_HOST'));
}

/** Database Charset to use in creating database tables. */
//define( 'WPCACHEHOME', '/Users/ace/Documents/projects/menagerie/wp-elasticbeanstalk/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

// // define('WP_HOME', getenv('WP_HOME'));
if (strlen(getenv('WP_HOME')) !== 0 ){
  define('WP_HOME', getenv('WP_HOME'));
}

// // define('WP_SITEURL', getenv('WP_SITEURL'));
if (strlen(getenv('WP_SITEURL')) !== 0 ){
  define('WP_SITEURL', getenv('WP_SITEURL'));
}

// // define('DBI_AWS_ACCESS_KEY_ID', getenv('DBI_AWS_ACCESS_KEY_ID'));
if (strlen(getenv('DBI_AWS_ACCESS_KEY_ID')) !== 0 ){
  define('DBI_AWS_ACCESS_KEY_ID', getenv('DBI_AWS_ACCESS_KEY_ID'));
}

// // define('DBI_AWS_SECRET_ACCESS_KEY', getenv('DBI_AWS_SECRET_ACCESS_KEY'));
if (strlen(getenv('DBI_AWS_SECRET_ACCESS_KEY')) !== 0 ){
  define('DBI_AWS_SECRET_ACCESS_KEY', getenv('DBI_AWS_SECRET_ACCESS_KEY'));
}

//Overrides - configuration with local version
if ( file_exists( dirname( __FILE__ ) . '/wp-config-local.php' ) ) {
    include( dirname( __FILE__ ) . '/wp-config-local.php' );
}

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
