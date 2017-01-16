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
define('DB_NAME', 'DevTools2Verykovska');

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
define('AUTH_KEY',         '9vjis`h&wmZ+SO!^@!ptQzwrL,D=0jmR3^}V8|_Gvhj#8,fe3kHajAmoTum=[HCx');
define('SECURE_AUTH_KEY',  '.|.m=3yK@p*8`5?Mq)d8G{:Njr=mh>vd!*KG,YqDA&)T$R>]|pj!<#p|j|3!KUmc');
define('LOGGED_IN_KEY',    'qf@mD_2:V4RANByghr(%sSU&[;:~&W8ku}gUR=U)~+(+(C[h4IMkOtdZGZ4b3P w');
define('NONCE_KEY',        'o h?H&Oq]2,P9=J:909J_zwm%Jok;(!XVi6aJ7=o!x#;B4f/mFn%-e38@wP LBtG');
define('AUTH_SALT',        'D<zDn_Tke<HCntJ;J;vn.RmP[2~9MHdp3|)I)2fgAbrhzehA(B7|v@6E/<aTM.n3');
define('SECURE_AUTH_SALT', 'wTu<q7Ga*#(V)P:Q;Y[[/{nc;<ov!*K{7PX@uQqVpLpe*Euums|7R7H-TipHNmvr');
define('LOGGED_IN_SALT',   ')XuDhG=tF%I<nKFzb,Q.wz=xe89`pbSOlG^]9Ak`!X8BE-;0FO`*3w~ ~bRUr_9k');
define('NONCE_SALT',       '(,I$K48v&l]2XS+S>5{I/v%*@W?a*37^K*Z!Q7~-pKuf1,,oZW0pdr_A9i3G<O H');

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
