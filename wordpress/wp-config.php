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
define('DB_NAME', 'wp');

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
define('AUTH_KEY',         'fA2Ah[bO92G<~-RJFFcJvZ5=0r%5?Nil<#:{y^)}+0Lfkxh(7Mt<OdT)x:)lze{J');
define('SECURE_AUTH_KEY',  ' &gg:#/(suvBC_mA:/fn.-F?G<|kKUh95OCU2*Tf/S(4{#(m&1)st^p7%8LfQ)kA');
define('LOGGED_IN_KEY',    'i8rW+(S}<*6T@C?+QLUI5SjU6]%]8Fvlx72%{KR,g~kGFniE9Fqx{E(pkP-$-~yc');
define('NONCE_KEY',        'vsr n/ `ofpIM~.G0#[nO#hs!:2[2SdNjH2)!zPAx5ij ~]7-[: mX:`dkly}x[f');
define('AUTH_SALT',        '9pD(B$heRW1AV]nrB1EZ!rDUUv*qPIrue3O9u7z~E_J&IozpCkYucj2zvJ=el5-W');
define('SECURE_AUTH_SALT', 'Cd0Qz{<Pp<FqCLW}~.4OcD&9VY=b|0vXU_C7ZuQ!wR^<dlCoHFY#Z})<-gL1==Jd');
define('LOGGED_IN_SALT',   'yAyWpC3%-ih[adc J@:M$o&5<%BSz>-C~7Q9G[[g9)^P%aewyK&m^[?&nP^21csJ');
define('NONCE_SALT',       'r_yVWf[?aTiA$j(D+^GjkE@!#a.i_0t78m-c<<S4[::;+I:Z(!rni?.Z/U;8~tE~');

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
