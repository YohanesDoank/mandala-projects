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
define('DB_NAME', 'wp');

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
define('AUTH_KEY',         's!=.xT3*5Xl_t^5<y9vko-xx`_IoHP3%ke$4ABmlO~fbkbU}7a4*6vbSy6M+)a]4');
define('SECURE_AUTH_KEY',  'DC/r[i-ckuZ5_n)V7I{7qtSVi0m4mtz$_jq)mktW!55@NqsR7VST)kk|HHw:;9Sd');
define('LOGGED_IN_KEY',    'Q(BPnzi0#**3JmGv~Mf_DVQ:P&cq~Oa22CK_3L9M]L%) g*I=M^E!j/V2Ieu8*WF');
define('NONCE_KEY',        'LV-}(amY$6$!M-201+^_Q5[_WLCP9Vbm1opv03}X]V[6V0y;9?J4P.<%Da(@6BL>');
define('AUTH_SALT',        'u]162L_}-s)c4 <ON?B_mjN7vL#1mkP</pc*dgr_j5kborhH?D?hvp~v,s/wOd4h');
define('SECURE_AUTH_SALT', ',C1>`XV8[whpaD$tvPcA$*49l5-m<jSb@+$/dJBWZ*lE8=*}kPmDy SQ}f-RrDmr');
define('LOGGED_IN_SALT',   'vl Z&B~E@=WeyGAJbL6.v[p^tMRlOicLC<k|*wH$Vg;4q2Ia+j=I%8@xnUR7isE4');
define('NONCE_SALT',       '^:^@D)GUXCeSmH}cvhW)He}E2_y%6Z~jlsAe9$Zs3Pa1;(|Vz7.GGJZ+6o3LU&Zv');

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
