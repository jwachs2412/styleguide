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
define('DB_NAME', 'styleguidedb');

/** MySQL database username */
define('DB_USER', 'agencyUser1');

/** MySQL database password */
define('DB_PASSWORD', 'agencyPass1');

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
define('AUTH_KEY',         'rHSK@yj^u@@gmJkvOxFES{y40H:_R2T5jhf6<.g(:LX$av`Yfu`RK6**f}%gn$d(');
define('SECURE_AUTH_KEY',  'V!.,>`apiCN&.*[:aVjuQ|M6`.Z`:@YVtZp2gr3|r+x/}yxcl<[+]-OLV/z+5qp|');
define('LOGGED_IN_KEY',    'x9!rB}<@dkPdg^]:|W;I<1;_&g3z:hd;a]dt#+B d750FQiP9}ji|q.@n3Y?($%S');
define('NONCE_KEY',        'r;#aVt=wc^29G%6rY,n>=H|:~ M.7tmO!t903-FH1C8NfwZI[@4(7(8t+w{M]<fQ');
define('AUTH_SALT',        '~JYM|S1+/jVtv%4lx4]$gP:KfhA+8O=U|#Y0**6Ng@-M|4Kw6n7Q.1`qd(l^r&hI');
define('SECURE_AUTH_SALT', '+Q129_1dHTT!:V=Q9X(_b<duj3wUBY,T;MLtio<R~-IxG[=A4_[uQ=i|M&VjE[FD');
define('LOGGED_IN_SALT',   '=#Tp/Be?cNK7VYEcKV(P|i/_9-lUX*]z$f:`E}`:8I>HH<Q-6 Sl!eecW6`-%v,+');
define('NONCE_SALT',       'mR2&|)gtN#fea$(Y^gN .cfht:e-1,,rz,:K&a;*mN&:[@I(irgkj0,WW1x3A-FJ');

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
