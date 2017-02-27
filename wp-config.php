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
define('DB_NAME', 'wp47');

/** MySQL database username */
define('DB_USER', 'apptisandb');

/** MySQL database password */
define('DB_PASSWORD', 'Apptisan123');

/** MySQL hostname */
define('DB_HOST', '192.168.42.254');

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
define('AUTH_KEY',         '{21N</wRxBoo bv?|{(T3K7kQY+B<EBzOQm(NYv[)mB4N?tP+yLw`niFmA$vrV(`');
define('SECURE_AUTH_KEY',  '<}TT;ug(8lbIfQG,|7}*poDdPd7u/DqrmGiELO Ds[}}bXx=A7j-4w*-tt%%E&]9');
define('LOGGED_IN_KEY',    'hF~?FrR;yCmn#4_lR4ksJ+V$OvnMh&l7.dfL*$Jj_p5@kP`c;pn6-%Cm}jCj<f.f');
define('NONCE_KEY',        'v3,l@$pI{ <+<9cx.o>L@oaUUy&<U}+4T5BBmSs6` {5+h<G=q[fsF;Gb;}J~ lt');
define('AUTH_SALT',        '] juo/kU@X)WG=)kNIWDJ^_=}bspiG<E5J!EOULz^VWAV~92EsaD[imDj,U12z>w');
define('SECURE_AUTH_SALT', 'c N*f}>ZkgAW-o,b7f7a|VbeWzR<|7GzJ,LN *V+EH_a>OPA>kmfivb4)?Oigqei');
define('LOGGED_IN_SALT',   '`wA%gAw]ocQ1JW6thss5,t4T%=[#!0.3cQj0KUK*@:8L]cO9=}/Dg~G0jUlfShH7');
define('NONCE_SALT',       'A{2XKDy_:Y`Si:[+Sgy#0l9RB$S&.j?bU<VqgW}!/)*ne@V*:s/F2ze*p9i(nhD2');

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
