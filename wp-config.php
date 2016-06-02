<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */
 
// Include local configuration
if (file_exists(dirname(__FILE__) . '/local-config.php')) {
	include(dirname(__FILE__) . '/local-config.php');
}

// Global DB config
if (!defined('DB_NAME')) {
	define('DB_NAME', 'stivesnew');
}
if (!defined('DB_USER')) {
	define('DB_USER', 'root');
}
if (!defined('DB_PASSWORD')) {
	define('DB_PASSWORD', 'root');
}
if (!defined('DB_HOST')) {
	define('DB_HOST', 'localhost');
}

/** Database Charset to use in creating database tables. */
if (!defined('DB_CHARSET')) {
	define('DB_CHARSET', 'utf8');
}

/** The Database Collate type. Don't change this if in doubt. */
if (!defined('DB_COLLATE')) {
	define('DB_COLLATE', '');
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '>y{<7Io 4.eUog`>6o$~y~fE-*TD8S,qy!tJhcw,KH|(zBeO@.zD-Zt;F)SqkQ2P');
define('SECURE_AUTH_KEY',  '?2fhmD6;Qbl?^Nm+q~oCCc#/`C%K=~FBu(Mnz)-Phv+!Qy/;R{GL pg+0#B}m:5=');
define('LOGGED_IN_KEY',    'JKMx(/2&(!lwH_>-Js>LQ3-FRuD;c+eMw>)JzgX<`y_vxxlCe;XvmnNT}E=$-7{.');
define('NONCE_KEY',        'P^r>boG8)-|?tX .YG}wkg9W|/Bn<kg2GUpbZ.,8Ji%f;XRfbF9ego_B]K)F*?<|');
define('AUTH_SALT',        '5*r#Kb.Z+n!/M|gYjM1_wcp=#Eh=+^UBkQ&+3$y_r-OQvbNoqxMFz4Z+#ABIM%~)');
define('SECURE_AUTH_SALT', 'W?drFZ6]Kl1j>>O|A-ph+8,47;z]mf}?w_tr8-& n+7YpKe]|H0s2aM4e38>~nhI');
define('LOGGED_IN_SALT',   'X-Q8i8R-aGflR&9yzFpg.e9mGjJLl{uCFRR6c4ipxa]QcXd3@yP=gyrNs*%d~t.u');
define('NONCE_SALT',       'oGVR{diY8 3CgMLW6{8QCyO^+mcu5#7-}1&r[W%+`+`{^-$|=HT)&x_q; 8imTy0');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
if (!defined('WP_DEBUG')) {
	define('WP_DEBUG', false);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
