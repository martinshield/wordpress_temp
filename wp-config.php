<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress_temp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'k0kk@ff3');

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
define('AUTH_KEY',         'N.]>/lB=^Ev3wRT7RWhfzXh{3%|b<wIBfuV,v=G,xRk iD{88jsZIv)J;&_1q7ZT');
define('SECURE_AUTH_KEY',  '*O:5qev&vlFdh|^>Z6bF}+&cw5m,7|d6MKVkiy~wyz>mN(i=EEN9.]sG394slKcP');
define('LOGGED_IN_KEY',    'v^yL~98K xpDf!5x)W4H9Tw2lKfW0:@-Q:P.v;iXtHusl~|jJiVW}iH5y-eECc &');
define('NONCE_KEY',        'oTXdXofK#z^K4/Kf~o6YoTj}c%8AprUIQn@]pjPa@oUTFC-7K_Y$L*L?+F8!0SLv');
define('AUTH_SALT',        'TX*^4L{h?14JGc?!mM6+|ZpcXUCt(ncZr):GJoq[TuN2i``2o|2J=k4!FNt^.3Lc');
define('SECURE_AUTH_SALT', 'rz[^{/H0[o.b1QafBQi-Pe&9TPJ(MSm|g;)G5kxJ>-];Et+8};&wH@2eF>S|I1OE');
define('LOGGED_IN_SALT',   '+32],qL* sXIuSwVl+$K6|?@7cZlru=(BYb6-$qR+`]-.j-$WODN[ieMN*<vIQ:W');
define('NONCE_SALT',       'jBox-SIN_m<>{0pe1/FQtQK|/HZoy o$>w7+@l#B`]BKiSWLw{Czkx4IE:dwQ#c(');

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
