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
define( 'DB_NAME', 'puphub' );

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
define( 'AUTH_KEY',         '~uu~~:r5k`[IYxVi|er;,.jQ>!yuh&`6xbls<3a^tqU]mD9t[]{W%Q*U.fgS40S_' );
define( 'SECURE_AUTH_KEY',  'mwy**b@`l9N[^DXhwZ#c]59CY>onHDD_URAN.W/-Mx&KSy1~X},pN_=`kw@Wm:?c' );
define( 'LOGGED_IN_KEY',    'Ybw8w[m2of-Q~=tSF|ONgdva+#EIA V5wCnFSMN-4%0<.=G8k/div?h&Iyv2cT58' );
define( 'NONCE_KEY',        'GG5 r)=r{1t</Riw;|q*5Kr5RW5KP~-NY!frFYLr|Q?z7umOy(eaQUDG.N+tP-`5' );
define( 'AUTH_SALT',        'Ec6yN{tCp>?7$?*fSX(}XV&eHS{xlt@UNZ0|$F(qP^*Tf8*D*a+W|jDRF=G?)8Rf' );
define( 'SECURE_AUTH_SALT', 'D$iY=hct$vgZd[x-qk,m{E7ti)3@#h_qzM>*~~<hT@2mtx Li_#PQ1$^^y8WM?Ua' );
define( 'LOGGED_IN_SALT',   '4 vSs3SCX_S4bd&IthT]wx?xq%D,lrmN)t8n0Gz0r,i48{urw3mWatTaN]OL3}Ym' );
define( 'NONCE_SALT',       '4nn.kWqD-g]@v<#`W[&bk40;>HZaKNlgiKTqIQ]^)D&ulQD:XIyBNoD<?cYQXzrR' );

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
