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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress_user' );

/** MySQL database password */
define( 'DB_PASSWORD', '29kris88tel' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '^0aO5->,9&eUwi1H3X|$-T<ct%q}d%oFS-^z7?M+MmRai)*jSV]-_VAi4Cz@*&^`');
define('SECURE_AUTH_KEY',  'Ea5-9XO7nJ[r )2l$%>.Kd0;4|WP-&dlXJ^t3g-j 4(woz%q}P?&e4}*D|z7TY*l');
define('LOGGED_IN_KEY',    'Q064=l FAcs8Ze?z*d>8I5hoh5G}xUz(nwqUp|)yrV1]^s17|s(tF2aw@Ns|Zc94');
define('NONCE_KEY',        'O4:5BQMqBi5two_0SPK&0xS&Z~@4*gHN=#QxI|Gl#w([$$=rp9dl0h#E-!NBh_Rr');
define('AUTH_SALT',        '?NScE8s:QxLbt``qvPJ+&a[JnHR^m]Pj6+!I&Z:/A~gYdd49P/KTBb*|y6k974Zg');
define('SECURE_AUTH_SALT', 'lwkblQ@^||N1ikFR2[q+b|0pPNDg2X0&iiL* qfDn:QE-q<c<Fgs)kGs&#tz4Ko=');
define('LOGGED_IN_SALT',   '2vu(|EP[|%eY@iR+2GWcz35fwp.YM b2Lufzi=]f1^/|p0*aFT-lWyweXk,CLkWK');
define('NONCE_SALT',       ':e|8/x74WM-`US|?M~wpY^ec3m)$MOe+.&JOy(gF<VB{$Hl2stAmIh~MbUq!yKiQ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
