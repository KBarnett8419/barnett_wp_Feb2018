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
define('DB_NAME', 'barnettmarketing');

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
define('AUTH_KEY',         'I;qPN+DxxtG-M-WG^~DqyjGT|,Q%X4@UP>DAw?_,>zgL.<*6tQ,lI>@TU)Dj6e&.');
define('SECURE_AUTH_KEY',  '1q}D !}00Fs60_j{f>B<B9-*N1y/k=?j)c)qT++$&8/Em_j2 Z4^HGctr&9|zS9P');
define('LOGGED_IN_KEY',    '3XIzVG$kfE6B,@`8%2<QERn7aB>nSke(~]oz}*>i:J`*XXa?D<};M6^^tAJ!~^k<');
define('NONCE_KEY',        '& ^[f9 :BG:]J0>^cSMG1!(@VuEY8W(BIts>(5fS +8)M0Ke9;>;e6fjUY6I$@z*');
define('AUTH_SALT',        '[` OmTkFR+wdVUeBa3*0RP|E+M@Ux~`35 CUFi~C4WJi[%FG_)(<F>dR It#1,UI');
define('SECURE_AUTH_SALT', 'Q0-D0BrkKm1-UL4};)vqUWqy#p=zU MYzQZCPT|&zt46Tmm+I4&I[6O?[usqZkoB');
define('LOGGED_IN_SALT',   '_<&P]Dq6-xXeO;~1EB:8l0NguQ%s%L^_v u;3X)Pbb ^h6~Qi&lt=Q4v^7_N!yUE');
define('NONCE_SALT',       '[ouU3rXNl82}1QEaA4Z#b>RPeF>.z?,<EcL+<YRVgT%0./D*;niys{&Z}4Bl&QC#');

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
