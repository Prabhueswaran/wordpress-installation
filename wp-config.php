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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'database_name_here' );

/** MySQL database username */
define( 'DB_USER', 'username_here' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password_here' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '+6]rah[{N`m.+3*[B0kh:%8k7?hLMy-TR0@vo7@P0#A%qh[tGU;jb*9iaSf9lgs=');
define('SECURE_AUTH_KEY', 'e-r}g{! 7O2D`_XKznl-ed]=,o-9C--^Srj+W>PE~/--9CsuScU&e-x>6Skg|BV~');
define('LOGGED_IN_KEY', 'm 8`MThoD6mkItH)^+Q]sJY:Pucs-lQ<PcwUf%VTyA~@k/[P~gk9]v/}#g/b2p=&');
define('NONCE_KEY', '(9jo1-9)8kBALC:0ZW8s6Lc+ErM<4twk_R+*+VU(meCOo+6Xk6&A2T_FjeKGV2N6');
define('AUTH_SALT', '{m3x?K)p5^]@+kd+Y|EL6@A5kOoTr4[801>^5PSXTA0EOYKKSxIuxT]f1+^Vk0');
define('SECURE_AUTH_SALT', 'YEl@Q;<R;[Q#TR0?|!q^#(CI|<hBb}E,jENXs/Vf.^GAdAnKL$b?uvroGC+LXk%L');
define('LOGGED_IN_SALT', 'pCN{r,^B`V})62iYhDP[{mg+$/Lye3k 2}}DvYkUoVmZoj[<<$(Av&o08G0|Y6*H');
define('NONCE_SALT', ';uuOO+5{c1!&YYQ]-Qq$I3+m[#jF+?dE|S*_$s^CH,8o,817E){Bo6u13r/n|w');

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
        define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
