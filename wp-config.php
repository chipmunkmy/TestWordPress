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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'testwordpress_db' );

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
define( 'AUTH_KEY',         'qw*mhVWWOB2(^~AwA1~`(<Kw(S_vs/KZZ~Z$#/UO-0)H5;Oogx@C,:qsJAK (+We' );
define( 'SECURE_AUTH_KEY',  'J%-z==KDJ:C?iq0*[e3>xly[M5r+P}C1[$6 bVa?s5E)K)hNBA{W/:qk)G1tOIPS' );
define( 'LOGGED_IN_KEY',    'o.3).2z$XF.cyB1tcyV~/(mj9;v%DU}^|.QF/>sV=PNj+wM8bD@^mB=sBB-=R9UM' );
define( 'NONCE_KEY',        ']j;m}+K{c`atJ!f>!;5f%Q$^:J2e&>N[0$H+{BW2i}s|4U_6@qey/T*<}MQdr5J!' );
define( 'AUTH_SALT',        'n@Txh|w&l*NO^J!(p/Og1h_zVo7rXBo@_u>kVc3u<5`,35`;S@^h[Y[)XA%0Z|fP' );
define( 'SECURE_AUTH_SALT', 'y2:r8X]bsqkUrjoH_. 9cnu9V|i_ %ri/OaN(-DI+AdGcs.ytjtx5>0$|8r&Oj%W' );
define( 'LOGGED_IN_SALT',   'Cv3#$`#;%oJfZ-:FBhb `_PiK 5r9m2u(oT!)N1VwP-&e/S%7N^ z4D3C?j#0/h,' );
define( 'NONCE_SALT',       'v.c{_*o =;Si, f*(]/f%2iP7/BfVXmtw`~>yph9P5==/%q4uQf2Z`5&t<+`kSfO' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
