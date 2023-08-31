<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'scheduling_xp' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '<Uv,z#)9t8tc6.Sjh*(R:S10d6 U:;};9NP*@F3[r^oqU]G6;/Ue{Xev, +Nwy>m' );
define( 'SECURE_AUTH_KEY',  '#xZ63DcKmf{p(dMfVb%OvLyEO!Y}Vp;IqC;{*u)fsuJ26UH8s/MD(|X_f3JjBa6@' );
define( 'LOGGED_IN_KEY',    '&&EFN3}3:jZ|/]e1_4c86%&;1;A6bJ;,qgEG%E-%-^b&2k_H,=|1upXNo4_HL!>1' );
define( 'NONCE_KEY',        '9{sM)3c!u+6D4{17zKgxKRH8xZBMl4S,([LjThl8|&%5*) Nfk:ZB>0i] )%_H 9' );
define( 'AUTH_SALT',        'M@*SGk=tp14/q2$ZOp+K{e]qXGT(M%WzhEL9F95tj Syg|F&z9x(9FtmCds0nmuQ' );
define( 'SECURE_AUTH_SALT', 'B5yjq2NDnFz?* tOTX#q5-McxF&ybpy^z#4b(cS?P#JZ;@V_/q{r[`t&[0+;Pk{j' );
define( 'LOGGED_IN_SALT',   'byn:wG-#t8d}(yrH<w9D~Oc4=ETe6B::w>W%}KgwjE>P7giM|#p<eWXSGR<>$d k' );
define( 'NONCE_SALT',       ',#_gzV7[$fUTsU6S>b.!+~IuvXg~h4vhCbT`;}g!e?sz=nSw|HwANb2kKLa0x*By' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
