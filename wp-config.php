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
define('DB_NAME', 'startwordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         ':<7Y+{~J([lWH_+rf`&Y$y,+>~[NVI.j|S+bFH[|uge+fR-T8U|{E?;&#s1!x+Xq');
define('SECURE_AUTH_KEY',  'o$-M5v-IGp) yEopY9-SnPOR.8r$q|t1mLFN{IX+]9+|wIU5Ey45.KW=zIg|a.Ye');
define('LOGGED_IN_KEY',    '5TK8r4s*SF)(`+u{w|/ykwu[C` F!stWg[DP-NQV*r!])})eg&&<(%JNqX)MDqsD');
define('NONCE_KEY',        'k+5R|?C=tFxp6_`e!wo$_o5rmfy1fb3&C6.;75w7It57_#TL;EGGxcwdbm+g|0V-');
define('AUTH_SALT',        'j9Iq5<_dZlhfS|/wM-0>0N;4msFVD,Bq1oG+L%Ck6g`!kzO{d5$*LB0}V~2oug.Y');
define('SECURE_AUTH_SALT', ':H|m%mi%6|n+G*eNP;V1c3i{.TF#kANDHzM-/tluKa*^xQ|/kQJI~JxV:<+7#Y7|');
define('LOGGED_IN_SALT',   'KE,`Zb]#sfl?q<Qfb^#GG=z|&Vefx#jO! MkP$w@m_Px.5D;=.[?b1HS=919ePH~');
define('NONCE_SALT',       'PF-{tCuCt:kAj8V;$)B~w+ i<]=[|*#l~/_fuj~%Ez_s;/}Kth,Yca~s?wk]N7?r');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp1_';

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
