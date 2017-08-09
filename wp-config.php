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
define('DB_NAME', 'bike_shop');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', 'admin');

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
define('AUTH_KEY',         '5Ya/ySydjU{*})wSc7/&`xY9~2[fL|oxUZmcwpBw>rm#0Uwd Hu`jZnQg ,G`+&&');
define('SECURE_AUTH_KEY',  '.s{Lt_VPd-u4tjypI;1-19o@<o#Z|+Ti1pq{>`nsT^F]6p/E0$Gp6%`I9yn%#{My');
define('LOGGED_IN_KEY',    'P;D_h!+!kbuLesZa=v2FXU=;EH/[jeg1-Wc43x-/Hh5Hz4T>=>/87WtDT,{N5&8D');
define('NONCE_KEY',        'ut|Q$UF[IR)*rsnq)4LHk@B{ea/9q%I|{?-7k+HpZ2m8gv;AGgL6SMUU2-V[-T%G');
define('AUTH_SALT',        'X2VE=6n2cqTVLl^pK,bTS%r^=Kj 7?K8.PDh&]=<bGL|.,$t+]v?7X9nijnf{i.y');
define('SECURE_AUTH_SALT', '?sY-G_%^Jof;*BvGBYr [mNxPDmD]w%D|)1`+0PdmZ~(O &P7>%G:nw}To/tT&7F');
define('LOGGED_IN_SALT',   '3/._+h~{Z>Z8bYW=P}PNWbS/z:p,sm9D}W2m we9WI-4hdiT_]M)@lZj$;f!}yLL');
define('NONCE_SALT',       'XragCRedxRdI=&~639[onw}RiJj@#6t,NpN0IUW|Y.o <*bYMY|%_eRP|4d&6_Lp');


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
