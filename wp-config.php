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
define('DB_NAME', 'yourdii7_ydm');

/** MySQL database username */
define('DB_USER', 'yourdii7_kamboj');

/** MySQL database password */
define('DB_PASSWORD', '$oli05Dec');

/** MySQL hostname */
define('DB_HOST', 'yourdigitalmate.com:3306');

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
define('AUTH_KEY',         'Y#|US#rUhi08p=9<k7s|l9}~J X1Ku]W/fjemIfcwUSZ-S7Lf=~7%5lbXNw9/5e?');
define('SECURE_AUTH_KEY',  'p,m(+5;InO|Hz#ELtcQ|K6l[>)5Unj3Rve~jj1>p>/~}CCcJpza0Q?y4ein ^BO?');
define('LOGGED_IN_KEY',    'SJ)aUHvf)x7p%pb/ cGwf]pX_9 1R=p3:4}I0ivLq<Q-p2e&{6k[m_K_8zKA?fkf');
define('NONCE_KEY',        '|bY8<GdMvUP})<`o0U{b}r}f?=& chV,xr8y<opZA**O}PXpa^tfoZW~h;5$I_Mz');
define('AUTH_SALT',        'F<~>6 URJkSwZx*`+MG<RshQj/K|zkI6At_*)-paD8{(*V,Q&ufO0b^58ekC6ByL');
define('SECURE_AUTH_SALT', '!_9h3$jf+*N9-6Jxt( [JAV!Xj6pl%G3.0UG/RJbCT 7al[qQe>9i/`;+<=J(9WN');
define('LOGGED_IN_SALT',   'IU{POEG,d{wlH:9mR4t]TV?~.2BylIvv<c1pC-8pE9{5,?L9wXs3b6@p7oMo17}y');
define('NONCE_SALT',       'LUdTkoCrL9K?QNdp/tXt_+ $m*JP7B#z^}|(7F86pSH,B)z1T2~rCqe;B%.DZ}z.');

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
