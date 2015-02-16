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
define('DB_NAME', 'c1tdmu');

/** MySQL database username */
define('DB_USER', 'c1tdmu');

/** MySQL database password */
define('DB_PASSWORD', '3a@CVU1GJhfep');

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
define('AUTH_KEY',         'MC+L3V`P&H[^|IVefmW^xB~%~l<M+awS=HhwI+^FQ=niw/+l881c$ +>rj<(%Xw{');
define('SECURE_AUTH_KEY',  'RI-vQayNO*3!m86dG[(~qE)Q%1&+yau<71ErxN(Oj@]cgf;hi ( d-?rqFV&X[rf');
define('LOGGED_IN_KEY',    'xHx`W?*P+[|OnlUIgqpIB:2r5EF-.@~@d=^an6+S]x$wHpZ$eG!cR~wl]EBw ,py');
define('NONCE_KEY',        'j4z-U.4GE=2@?qIgw`%x-Ji4Nd+):$I&`k)R4=-o`vx|fYO=;KvaNdE -R-c+Y+4');
define('AUTH_SALT',        'I>^~(o-ofc.4eX:~uSGLb2I kBe3X2+-!<!0,vh;pn[3T=X&BMEi0-&J|218J~Bc');
define('SECURE_AUTH_SALT', 'b+`$A2<;ctDs>Zz[X!XjRP6IN}~2Bk@{K+A5Va~+z}F#~yt7+4rzHi1}1*}42L6w');
define('LOGGED_IN_SALT',   '%Cu&]Zler)_o=.1Lu(Mq,|hJ!WGU6saBumR3Uy#0Fz+KqfMhL:;+]cWwCCKkg-$q');
define('NONCE_SALT',       '[aE08|D:[T{4O){[M|EauStK4;a?NV4uhG|l,z:)|^ Q+,l-PRT459ojju}]_vO9');

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
