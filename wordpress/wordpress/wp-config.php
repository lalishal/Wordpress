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
define('DB_NAME', 'lisaBlog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'G1JzX9Sm0~5+2%x?~#t=%i0{<Vy^1;/u=#Y%QXmKDUNrS3Y%$BOS)u$Qeh>vLp?*');
define('SECURE_AUTH_KEY',  ')#UdtHt9LQSI):$+3k.qgNA4.g0yz>C;yQoz`.Sy&ItMg%5y>RvyTzfaU2 Ive| ');
define('LOGGED_IN_KEY',    'Rfe:o`<NT.Qr&#u!x/rA7=Av0h|]N5kHVm$z &jkY$.? jI^kpsGvsHo)ww]d}Ml');
define('NONCE_KEY',        'bLGX.)|wR.nAm?V$Yw;]]CHA[{@V6,ls;OMkJU$wzMG;d9A4(ruJrdG(qE4-1sg7');
define('AUTH_SALT',        'qLJ7/ Udb__3|)</z}1sFB5L~7kSWWMY~rS;c6]nIqEB>|x4grS0bQiA!(::M)qZ');
define('SECURE_AUTH_SALT', 'le*n8Hc{yj_pbz8]4O}{3SHC3P>i12f%vn_0qhg>[aX[cYDot@1{8/$ifL% >q9T');
define('LOGGED_IN_SALT',   'R#~DKF`a+/9!,n1~M>Ud#_+bnG<d)Y@IIFhAoS*O(jB:C5e4::m%<^oJX,&LI+JH');
define('NONCE_SALT',       ')E?<nal{70xlnMdi!<C}A)Gj)0V-|af:&uQz3yj@8^uEL~$%M!ah<xOFwPe13y/P');

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
