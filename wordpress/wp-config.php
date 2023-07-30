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
define( 'DB_NAME', 'changethis' );

/** Database username */
define( 'DB_USER', 'changethis' );

/** Database password */
define( 'DB_PASSWORD', 'changethis' );

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
define( 'AUTH_KEY',         '*cUtJE``_%A@IYQ{2)H8TGY3vU@{=u^WE6/&2I]q}we2Yl;Wh<$4VsL5kiM?*MrG' );
define( 'SECURE_AUTH_KEY',  '>^Lu]Iw*i/J@+e];uFJ^@#iokED*h-^U&<uhaP[xkL:XO1L(z4r!,&ci (Si*>kD' );
define( 'LOGGED_IN_KEY',    '~w^j+<14G]lg/Qv/8<.s!MDpB5P>qquY>.[#/PZAky(;Yz6YYV}/`q&nH8{?/4Lv' );
define( 'NONCE_KEY',        'k-BH)KXcMxhUS;Az(VbJeoGR/`+qA5I`q^kV$;+Jf^B}=HxJ_3rHz>a9[`Yk%NJ}' );
define( 'AUTH_SALT',        'k| +qu`l3$$IZt;0q{s32-_<+&z[a9KH:)4XKC0JTmj=qt}H p,([T agIjPA;;7' );
define( 'SECURE_AUTH_SALT', '}ZYtXg+x2rP84Kg$A>N}X:o626s*9cT=yWFpE@Zrl},oR_[35NmbLD#yeE~[9p5*' );
define( 'LOGGED_IN_SALT',   ']W_g7B6o?uuR^JiivD0XUj7r#rqgtCQnL|@:{BC4z=nYKzAf10N/,-=]-FpA YIp' );
define( 'NONCE_SALT',       '}Tm6MudONOg>lqw;e,YGIF`+>68`Ti0gb6=S4?CG+1}MQ7Ct:.5Pmf;Nq^gy9(Sg' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'Tables_in_mysql';

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
