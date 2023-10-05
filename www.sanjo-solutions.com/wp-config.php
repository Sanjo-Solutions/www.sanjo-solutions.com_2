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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

/** Database hostname */
define( 'DB_HOST', 'db' );

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
define( 'AUTH_KEY', 'P{qj?IP~^!Oid1Q@B,K^xuT7:BkC}ku#h^5Sw_0@H,^3t+giON~E#W;;$>1YNcBq' );
define( 'SECURE_AUTH_KEY', 'h+XINC<)])Fa>jbV[+M$`h:_Uu: 6^hRVX}.dw@:[Wm/sgQ>d8B+>g@8y`.GAP>I' );
define( 'LOGGED_IN_KEY', 'tENMxFd}|MbJ:, vR<}q-z|fdBp6+1B1QHGM!0lU,7Kc:yC!LjJ@({tt2*RHW@1*' );
define( 'NONCE_KEY', ',Vz-t_bf]jdZy:/`cqh0J#ETlX,5?!gFJ V7nE!#:M(=eGZ2* `D5jDP9=HF`l9i' );
define( 'AUTH_SALT', 'M}XR5;;:SiQ;IsZ?*oT-Bv!3M6xf4uH(#/kh[2#8GK7;<^pMo,a3p0{c~jw)FFmQ' );
define( 'SECURE_AUTH_SALT', 'c]>%9.@ g>_:8=x;~%P0{K9&ccZ^L,IWSV[:,plW.tvrz6BWpcW?z_vi;?Lc<0Ht' );
define( 'LOGGED_IN_SALT', 'rwez8Kb[o8_2&;^/qQ=V0a( >]}K}R=8lt5D5lME/zIut,@YeTX~m)HWE;M!?wg_' );
define( 'NONCE_SALT', '#5ay=Rd!W8boMB4MqbmUz4$m;oJLJ:D^tZNRlL#e<?{xr @viH,<)p-Ne6$3iF)>' );

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
define( 'WP_HOME', 'http://localhost' );
define( 'WP_SITEURL', 'http://localhost' );


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

// $_SERVER['HTTPS'] = 'on';

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
