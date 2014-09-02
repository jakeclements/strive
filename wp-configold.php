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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'stwwordpressstri');

/** MySQL database username */
define('DB_USER', 'stwwordpressstri');

/** MySQL database password */
define('DB_PASSWORD', 'kilfoylE10');

/** MySQL hostname */
define('DB_HOST', 'stwwordpressstri.db.4745518.hostedresource.com');

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
define('AUTH_KEY',         '4{Kf jD-{Dv-.Ic/OJ5bu&if`<B;,|_yC@Ubr7Y$/lOFto>4%m(y|bQeBtE!z<Cf');
define('SECURE_AUTH_KEY',  'F.XyBBQz}S3RAE !O8qNbwKF5<)kn{3Oas.lvJ#C(|sKZA2Sx3vdE1IYEtIlZLI{');
define('LOGGED_IN_KEY',    'O{uW||#}m6[mQBWy|[ru+<+bcm^!dqjO+&v!&I$kc(o/oNuWqy5wU_0yG|l+VDQ@');
define('NONCE_KEY',        'iH-#~#[;KG{ey+S`xjVy&*J<9>sKd.&tUIs9{g/=WK3Uv}ulh!p7wxvid>%Yk~x~');
define('AUTH_SALT',        'oy:}G)B{0uCwVf6|R*_w:9jxl|&-1Z_@m_m5&{o&h<^D]+5.razr~%j54X{CP]7F');
define('SECURE_AUTH_SALT', 'wuj;fId t)Dp$vWfT>F9PDLtmxH:q^Bj}f{Yu3,70[X|81(p/&9SWjp]|scltXw+');
define('LOGGED_IN_SALT',   '%?E-9EpE)&P<vP-RcwPfjz%B9-h7ZjDk/Z0 h(O[+W&j O-KZ@%4:vKYOG[fRQ+=');
define('NONCE_SALT',       'rBD.r+iw&]/@h)V]eyYX 9D*B!@(B(*WO4hNds|M2uXaCl~%Q1sZVdTdrZw}Gs|S');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
