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

define('DB_NAME', 'wp_revistacaminhoneiro');


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

define('AUTH_KEY',         'lS)CWw%WqSUh*=#y]*Ky#/1pvJz!n%J4lLsJ%K>KA(Ld&DP-QG0!8BwL]Lc*^bRE');
define('SECURE_AUTH_KEY',  'xZ7zEl8oPB!SELxC7&k^hD:]dxborloO~H!tsr7gR;XP403^F*/Mp2BYw?NRL}?7');
define('LOGGED_IN_KEY',    '~%QT%MQh88b8ATWKxBcYu(|h&tNid{B)2,<r<5m4Q4iv9W;ptOXlm)SLd|[w,Sov');
define('NONCE_KEY',        '5F+_EmIJJWVpZ4/LY41]RbFakSbexgwJ5O&<5(YX-|bin@;K!qW70v>XO3_c+?[v');
define('AUTH_SALT',        'tD80N]Y[5Pd20.I`?^e67Hz9mI.98}4EHhRD-#Dpr)9IX+Q8~}A`aw-oT^uK#SPA');
define('SECURE_AUTH_SALT', 'a0Z9a3)6t!GicRc_3EwWCgtw!o&7/P<+b|tTyh&=<l/V@[X_ tpKm,-i %N=Auj/');
define('LOGGED_IN_SALT',   '-r=w,D^VYq}9Y8Jf}1e$Yilmv%xa!xk%#**k4KHr%b1g=o9cy^4icAL*7!U~ZhUZ');
define('NONCE_SALT',       '8krM-d-D0DR&<Kq1rt76$F[Xh+rQg:Q_u[/aG;!/f!n_m72pZ.kc[]A/#wfIb:4i');


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

define('WP_DEBUG', true);



/* That's all, stop editing! Happy blogging. */



/** Absolute path to the WordPress directory. */

if ( !defined('ABSPATH') )

	define('ABSPATH', dirname(__FILE__) . '/');



/** Sets up WordPress vars and included files. */

require_once(ABSPATH . 'wp-settings.php');

