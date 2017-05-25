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
define('DB_NAME', 'test_db');

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
define('AUTH_KEY',         'AE~+C`mj.*nTZxWZe0mY%^r2~+aY&i{T0WTU^X%fnR~MpY&B((Z}IQ0!FYS)e_h7');
define('SECURE_AUTH_KEY',  '^U5B)N?wm0.1ldbMU@,;9E}j--x-gpmB3{.Bc-eR+Q>tV{io]/H`+Ihi$p^^V@+-');
define('LOGGED_IN_KEY',    'Q7r0>:tHUe|X~edzWNqsV8V~I.:do:lIAnldWKtd2=|Eni+C,N+i rF)0|q0RZf,');
define('NONCE_KEY',        'QU|50n-5rH/g<f2mQ%UT2U2 b,dnW7OL|WP p$-3an,QaQOMs!oNM7+]252oPexv');
define('AUTH_SALT',        'qvr*i+g;$c2EYI.6WQH;=(HM+)2dA5). YcBL!D)lI^XM/$Kq6b*M<qq+q<WT-hU');
define('SECURE_AUTH_SALT', 'Iz+@d5k}n!D<L#+_1K+SZ-stvv)~xd.Funi>@!TQ~U1kiczqv&g&PG$mc#sznb(n');
define('LOGGED_IN_SALT',   'y_M$tF@#-f2%@JE_1!QFl6e9Xj|[0@qjBlZ|nLXO@|r[894M4y@l-Y53bZwk&w}8');
define('NONCE_SALT',       '{ ,*38)$.!8)?KeyR564zC}J?M@IoMEd,R$7q60Pzb-ve]wm#1d#$Y!:Ri+{7l.j');

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
