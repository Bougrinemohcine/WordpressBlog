<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpressBlog' );

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
define( 'AUTH_KEY',         'n~iN*@#Jkf#W@64|LM6+s$?|#`;`)pUCL$`Aop3*Z;SO=J2i`PVX7wkj@6Eeg[_b' );
define( 'SECURE_AUTH_KEY',  '-sHG6ggF/9r%lmT HG+5*}o}{Ms-Lp$|A*t4ou,{:@8xMdx+/Np%$V:WuFJ$>lp6' );
define( 'LOGGED_IN_KEY',    '=ZD?YuE2HO<M//#cC#5|=*asv%tEq27o_q!9R/o,:OGUXyb0obc9@7#):2A{DP#`' );
define( 'NONCE_KEY',        '#2cZFJL;g)F`@Q.SsN%%)P9G(QUvD?5`%E]`|dfyZI%aLonM]TO06 8#0]CGFKMq' );
define( 'AUTH_SALT',        'O/%rL]-d.!_8QrQbNtygY$ho9s9]xU%jArb<QBH[f+p+q=!.>jNc~@D`:~m?T?;n' );
define( 'SECURE_AUTH_SALT', '_*.+xfEWKCVYC8E3qBVV-aR-TS]mlFsEF{|=9-6N@rjYw2{8B1Gc!nK6`]N,ROhj' );
define( 'LOGGED_IN_SALT',   'Z)_;Gz`@Ki~T.h%/A.(^=`ssVoGg#)Oku#]LO6`dceH@g~$hgL,Io*i>Tq~`n2R`' );
define( 'NONCE_SALT',       '^4hs)xM>OIB{zip;i[K$qS<>G-UAR7%+vztWf3?^[+rKUKupy#$y?@Xw oM.aKV`' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
