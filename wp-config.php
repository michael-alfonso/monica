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
define('DB_NAME', 'monica');

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
define('AUTH_KEY',         'W.L1[}glQa[B~rMy*Hm@g+D(B*BP;Zu?nzg`jg*M<N(C]>aacL@u&=~.Xu6dl`yK');
define('SECURE_AUTH_KEY',  '}nD^5358=r3[f7Qv@g7%d(hmXyH<}Q*m5S/f@@.@#N;hZjy|Za:Ko&)R{u[{J8lk');
define('LOGGED_IN_KEY',    '/*C/PewNZ<By:Xwyd~@eYgO!:Af9xJQ8SN~T@J2mG=acTsF-#NnMsnNA|rL=nRP1');
define('NONCE_KEY',        '&o450k4&@&Efv)<<=#ZNLx]Ot>e`$x)B,*FXmZW.9QLS<tSb_uGh]>MLP3uEY8UI');
define('AUTH_SALT',        'E>U|d%DGdar&FB##}N{Uv8kT P^bgDqI>HUe1H3(1*Ed)S{(*rrk.vL@T4^TQqo2');
define('SECURE_AUTH_SALT', ')3vxaSJD/RBM fkAR-AVa^6m%#!:<)[6![.R_#WLo8}~$f]>k{bTBc)]*b^k;yT(');
define('LOGGED_IN_SALT',   'n&z(.kdA-P4r7n4(BoH0B7C9CvIZw_)p03K~9TzAwmBST~;H(;$4Z^)Pm5](VTAT');
define('NONCE_SALT',       'c.eL$Ln}{4rH?2hPV=WK7|V<,Kig:GTytAIHkf=}PULthnTdF,I~w7*w(OCZaO}r');

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
