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
define('DB_NAME', 'sante_db');

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
define('AUTH_KEY',         '.pW$q>(E]chC91U7CreL<!{F.a^bpUzAgw|qKTQKm/+c>m|S,_ycRy&Qk`e~t5mY');
define('SECURE_AUTH_KEY',  '4jA25w]WyY}@NfA8`@l<^PL4Di|y,f!)+`7i}jHDlgpDjo,%8A4>E`quPO*P}ga0');
define('LOGGED_IN_KEY',    'o}U5US$lX |>OzM3j(TM;Dn8l^y!>i~OM )H::C*/U~>H+Wiu j:+B8pJ$yzxb.q');
define('NONCE_KEY',        'jN}qr@1$K<;9WXl,X7+FtWK[4XBVGF A@j^qWVMLF9[5R)+(8{}0..*|ySB/P{@h');
define('AUTH_SALT',        'WR-:>bI75x*b3RTkm{jP?PsBU#$Te/g)]lmcJ>CNgZ:s}c`g<>sBuRk399(R)Nrc');
define('SECURE_AUTH_SALT', 'rRx|7>`Aj@,,pcv81[>mbSyv|2rN+^ll81r.EjF^8CD]@6oF-6p0z|Zcj`W4Z^:i');
define('LOGGED_IN_SALT',   'rUK>[g8lhRh{idbI[ Y,(`W7<~rv#7LJI)#526(OiMR,(bP}keqzNmwLo:E}=d^b');
define('NONCE_SALT',       ',1_|I38>nnS?4x/mR]Nf+m rv~AfUqMoKa&@e=@ULG!^-cm-G&a<X{iE[!G+KeZ/');

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
