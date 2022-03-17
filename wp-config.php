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
define( 'DB_NAME', 'db_assembleia' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'L!s!W0<5O/M+!}}{qAfzKeW`OzN<B*s+qPp28Q`]^PF=t>otTOXh+ISy}T|:oX6-' );
define( 'SECURE_AUTH_KEY',  '`>L8Ba,F5J3)L``+-H><:_SHro~)T*bY:jU@Gww)#ba#cd+vPHwo5D`BoGi=O.Ur' );
define( 'LOGGED_IN_KEY',    '.MwAI.~HwJ;6)0q%uq>B# W6v>3|Z?yhD)v_YtO[:PTIr.HN6$d3FeuVEak &H^(' );
define( 'NONCE_KEY',        'I3#h-C!&B/[#XJ=`_x0+M-`-#1[&dy:c+JPqe6Kxb*`>:9YX[e)+P8m7H$Gb E1+' );
define( 'AUTH_SALT',        'dLlnmN~$Sf7V_ZE;Zk$8WwKGeT@xUF7*J/yf6Z%j6Y%U7*Wecwo.HoDvb0AEdPFB' );
define( 'SECURE_AUTH_SALT', '#kr}+S=kNPOZOC.pa8yQNiyb^&.!TYmLK`b-;W>YgE{Tx,fs!# t?x*u7i-d%CU/' );
define( 'LOGGED_IN_SALT',   'SY.ZtpfaVXJ$L$UxJ0QsGZ9[mtk6Y6&[*TLLR;T$9t[Cz=Dh+~&5)}&~3j4y{b}]' );
define( 'NONCE_SALT',       '3kac<bY+AG(A{1=fxq+4c7H~3Ooe%*LCc}?^+-(i%lqBQ(YvMk]a1,,<k  9R{qx' );

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
