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
define( 'AUTH_KEY',         '(ft*_I2{, pjl*$EOfx`EhqN)*t_`|@4g|}HCR,bgG^HVXay6nE_:nGqxY5Mdx$b' );
define( 'SECURE_AUTH_KEY',  'xv~sKi1lRR(oU%(h4:<,?{o099b.l!O:Je*7v=4>KA|47p/ftBzxf?ekBcPeSRtw' );
define( 'LOGGED_IN_KEY',    'II&4wPH;Hrw<>Pb>ApPgqr3zl&q7HC_MjJftw)BhlWus|o^NFksbYUAMn(tBtEP*' );
define( 'NONCE_KEY',        'Vt&Y>` L)(7D40-22lb18t#x/9=zGM$NaF5,5^ts|c8YS+#J.@EhaBPj&9Y!`7)_' );
define( 'AUTH_SALT',        'WB+&+ug}tq;dAxRTdgX?Xal3,^%T)orU NJ}F-y7{l%L=:dp@^E/$JtZ*/<534+M' );
define( 'SECURE_AUTH_SALT', 'G[Yrb@hD<s|_zEW54`@> }U: jS~80]&M*E3mYP_I<>p?4-.y?JpD)-SI`LB-m,Q' );
define( 'LOGGED_IN_SALT',   ':^Kb9bm_N=mt7#-KC_{!D15C}Ouc(i=NOmP[H:RgL<Ak[xWW9Y7^w4Iw 9oQOb+l' );
define( 'NONCE_SALT',       'l~v4lXiJWh<:2`L0Qq36TO{Wm4g;dw:KK+Qx&ik+YXIWDbs[+E!nPqPN21PjltK>' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'newwp_';

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
