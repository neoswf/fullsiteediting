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
define( 'DB_NAME', 'fullsiteediting' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'u{8=L2?M6U0kT*EqcMc[?jle)f~#OoS#~BzOXF:-+B|JA!-A~vo3}g?oBG]Q+Gp=' );
define( 'SECURE_AUTH_KEY',  '|yI>)1)E,mg((n,&)@b4q+p2!|L?:h;~rbSzL#nTlAXNatqy27QtB.r0*b,jvQw.' );
define( 'LOGGED_IN_KEY',    'bu,A!`{*n>mxSg?)dHq-:Nc&Er>0<v#&~?9ff#v/8bXw>xZo>FhjD`E>8YnlloBJ' );
define( 'NONCE_KEY',        's;[2HLVi[LdG+Bn-I_#q[AT/s*#lhl>$d|G2}^j{m9cAT@gF*?iS(SZ ]OKc$rIv' );
define( 'AUTH_SALT',        '/B[YJonz[#|fYWR%QB`.@X*Z8m<os5pu<aQDwO|?)(Yk~+Nl*58q3XD|h=;/.:Ed' );
define( 'SECURE_AUTH_SALT', '/~;KU6q3{4un>npdE4j[:&ZfaV{A,v~SCmE,->/.Lka8H#~RS/&RD=,VXL*7wG4>' );
define( 'LOGGED_IN_SALT',   'v<H6.R^5#,}zi|;b(J~JdvivKB>0 A4,m91z1+MYwhKTHAgN}-z+WqGy;WiYEgD~' );
define( 'NONCE_SALT',       'ko59aN1QDAd6Uo+N[[@]X:#jD`MPTShb<E2K%Ou+.l)BRuCth.u[Hnb:u/%0dbCc' );

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
