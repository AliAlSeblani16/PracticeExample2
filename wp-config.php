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
define( 'DB_NAME', 'wp_database' );

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
define( 'AUTH_KEY',         '$LlyS`|TF#o$3:KKBPtjwjOY5gkD?}9P$%}Mx#~SF,S5z -Q>UT!RSqj$S==c4-(' );
define( 'SECURE_AUTH_KEY',  'e(IeP$Fcw@+`-`m22;Ul%`CBWGYen(<fxTR.S;WI-=-;9E=:hyK5P?$(L=L:Z~d<' );
define( 'LOGGED_IN_KEY',    'T+epxuKWcV(<2`>|Acm`)aLHWQ+hAy6~U`4|=09DOnoCTN^D/x,d!#U-PjS;(<%T' );
define( 'NONCE_KEY',        'zJ9{([ZM3ytv(Z{x?,3Na7DgA<*v]#h1dMx?xKZa5n H_2sAD]aL]C>3,E;p]P e' );
define( 'AUTH_SALT',        'u?i>`m:=Mcgznu0>*f%-iiWNspPxpd-SA#4rbqz/)i)|.&J-43Gv/BfU++  XDke' );
define( 'SECURE_AUTH_SALT', 'k(-;Y8?b;/?d3[:5p#_6UXs!M_`JMOi(THko6EgLk;O}4:ai{.1sMExT2P1prEhJ' );
define( 'LOGGED_IN_SALT',   '(h`NEUq)#@?NSzThC--zZfM.h8`>m]=oI-I}oSBF+53eRf=~Z/KyQP{[_aW4S0qQ' );
define( 'NONCE_SALT',       'RL6FpSO7`UGK8TPhDFcx$Rsok417>kHh/krVsc~$.=l$rP?2,Z@$c)~uXzvuN)v_' );

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
