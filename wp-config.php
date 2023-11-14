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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '~O HN:v%;V=$s^3@fIssr^}H fz5Za>uk4s9KysL<w:lvXQzZSolu[sXBn`$S5mU' );
define( 'SECURE_AUTH_KEY',  'p[F-c0U5cK4}]oK>1coXPw:0yE[2i&5g`GUItXF7P(RIWZT$9kKzEg?i;H4IxLH+' );
define( 'LOGGED_IN_KEY',    'rTK;lw%8s1dbb[6i&u:Jq*S4pM-37U{+OEk3SOePaRlir$.P~cFm6^VhA/8(x$b}' );
define( 'NONCE_KEY',        '[qRt%iIq3-A* 3~>z,?N+iz895SP MIKk,,r<p)l+Ne5X:4BKOc^_.Ez(jXRzk]S' );
define( 'AUTH_SALT',        'tyxEc+eC>i_}K4AXm9dxQr{XGO_cBGNg)m?YyTPOg>?gOP<=3v|d:p#Gn|:p(l+>' );
define( 'SECURE_AUTH_SALT', 'UN-v[]xS.ziH<~*WAK$^{W61[@U>x15HdOX8xvby/S>B=GEg04jxG:BV*h.?.Wj`' );
define( 'LOGGED_IN_SALT',   'y>#uHaR1Q$J9[Oc182;M4rf*nKw.65),|/[8~k[oCuvJuV@R7L2}wOQu{@@?0[2F' );
define( 'NONCE_SALT',       '7-qe-XUv .`{KstJ3tJS02=_.,k~jcC*yt=4vU|;HdaPT.@+=bnIiAuE[e)1;!Jm' );

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
