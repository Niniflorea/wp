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
define('DB_NAME', 'nnwp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'asdasd');

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
define('AUTH_KEY',         '4*F7){?O9~mfx uB%]o yh6]gx0AIw?F {CNjY7>11Z{xzQ3#CeFoG+Ur=+ty!9A');
define('SECURE_AUTH_KEY',  'OVqOI_RjJwbbbszJIs oy#pnr4t;dW6>paN:t@tf2-$CF/EHm+1><|gOq0gc~B/+');
define('LOGGED_IN_KEY',    ')T~#].0k^uwLQ* wK@~DQd6(|9!!R{BJ/ZlJ]ZYdw~slGy9XkR,uoq,?ZXn!7* *');
define('NONCE_KEY',        'Q{jeW$;]}F,(.6yJ=CKC:^yvy:a[Hb?5%u:Vm;J8;HV~z},r![nWU1}45i1?(.j|');
define('AUTH_SALT',        'kN`&A)l#$D`.y)W<cybf_,,.Y,<_Kv^l:GGALa(AD%,hv<Fkd12&Uv])W0Kl*[w^');
define('SECURE_AUTH_SALT', 'Q!.2aJiXnC(Q=8rP  Ir<aS=`Vcgdao[)Qh$70OyO]SvTm,Ol-!$Ua(UHRP%2iPx');
define('LOGGED_IN_SALT',   'EV7J?qM4e1A^tW9*bMPWe+,WZ)Ebz2TSm/DQq:85R!oaW)bcL{A>^b_WF#<a?G6k');
define('NONCE_SALT',       'K)HArMda(0/xEii, %TV!3?j,cU5yQV]_[wY^in_APMiT_61Q.*f3veVe{g*g);S');
define('FS_METHOD', 'direct');
define('WP_HTTP_BLOCK_EXTERNAL', true);

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
