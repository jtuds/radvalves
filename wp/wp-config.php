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
define('DB_NAME', 'db474240383');

/** MySQL database username */
define('DB_USER', 'dbo474240383');

/** MySQL database password */
define('DB_PASSWORD', 'r0b0tp4ss');

/** MySQL hostname */
define('DB_HOST', 'db474240383.db.1and1.com');

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
define('AUTH_KEY',         'uyR6YRy*:aj<-1v|pFl+>TPSRn8(f}FasRIw*b@b*c1&KNGQ}z%,H=BnVp4A$^s|');
define('SECURE_AUTH_KEY',  'ZeT2T`--Lo,p!{%Qv,X3oXk[VY5/E/lpQM&}D*y.h-uZk8VQ/-$ry&#UT`FQ)&;h');
define('LOGGED_IN_KEY',    '-loTSV&0$=-<To%]-n{N`#%eCLphR*SsMuy#:BK1ybJ3)LT<R+.-8sJADEE3G<AR');
define('NONCE_KEY',        'CTr~my(hJ aQ3j2O*}!11D*kz9MDOZ(AXa ]p<F.|O!@Ue0~d8K`$DY-1-|Tce% ');
define('AUTH_SALT',        'h=oOI@E08vKy6~PBwL8g$7{-eKO@3I<il=|9e PvsEkueKAUEbg@yF>?qA)JD-|q');
define('SECURE_AUTH_SALT', ')@GrJ278&2k]m-7l:7-w2(RAjA[StdQ@d?*UN =KBj,([c(VErG#s_&&t#%udc0{');
define('LOGGED_IN_SALT',   '[z4}*`AA<_q-nZLws/6OC&!vot^7YU,#X2!=Q>D{,?Qx%.?d63u?Fe~ll{EPB> +');
define('NONCE_SALT',       'e~@Ky^jQxe;TGeL:?AJpH+gIhy5?:j?:Vf2/Tzm&?1?iH.p%4CxQy=[GQRsei[pQ');

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
