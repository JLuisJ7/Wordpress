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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'Cx{B3|OzOM0^9]^FlcFaXlO^PhN!jOFdb<g$;}C!bqY&[o/=mU?F+{n3~X,gD|^r');
define('SECURE_AUTH_KEY',  '_GKlpi.b8&nCZ}c2{qnjgEF8i-I<(M)m3imC|aTpPysrdAmdPhEcj2rH8.v~LqB;');
define('LOGGED_IN_KEY',    '(Kr>=zT_^Wxzi~+X|m<R7dBmU$YJ`;-<*c6U5Vb_T?0L;R]M@%*YTg7z;jr;i]n-');
define('NONCE_KEY',        'lB@g.%lX-Hf7G4hDA<11-r@5oSj}X[u<9ng:D9p1lLJ3nx(JZN|w,L-10oGy2P x');
define('AUTH_SALT',        '=mb0Ec?Krhan+TF+WPbA>l3 j]L<*F17EM_s1N&B3U2 WD)>SS3YpbUC-(_2N9J*');
define('SECURE_AUTH_SALT', 'b:5Q$P{?Se+,-2K1KZhCy@{wz,GTc#AtL_ps`)A*0:^x,ho,%y=N5x]ZDXn@uo=h');
define('LOGGED_IN_SALT',   '|GK[~+V{37[^3_0ftR6a9!0#LULA>pjoON5}9ob-CW:I|2D9;Ft1m`-UC~q`YVyQ');
define('NONCE_SALT',       '}nM0uvF:J^a0i|LnXcrh5K1eKt KK)a_^b]7S|nk$+*zr0fC/r?)[X4MU]_#W+oS');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mz_';

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
