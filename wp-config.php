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
define( 'DB_NAME', 'fcplurebus_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '+6cJ2t78D.y)z0@fS3f!*SS~sg03*XAz|o+s<-V=/}#m%(zqhao&xKni8J]v8Bbj' );
define( 'SECURE_AUTH_KEY',  '+w<X]yXQt>9r$lBWNSfKQR.;OH!,T:~[K*=epxH<IcHg[N8Z.Y3{`a=cTt&>8bjO' );
define( 'LOGGED_IN_KEY',    '4@HsSalN2UP`N/SC@lmZ<*uF17<sngS 0ciMNYQS(y:nvG4=a`K}m=K{rDU2lS)d' );
define( 'NONCE_KEY',        'SC{g(.=K%B_oi%L!;__x+KkWK,#y0i[D5R?}cb{7TH,ru`.k,%*O@iY2!OMem-Ev' );
define( 'AUTH_SALT',        'DjC>-f(Yi#Mx;:2cVj_})gmu Abqs5T84}sN kVj>Jj0boO&m##|IIl6`pJHh6$m' );
define( 'SECURE_AUTH_SALT', 'q,$}Tl)UN6~=nkvEHQTC;Y6!r* 9.-SN 0URmWVYs,#Q$EDHw$>}=R4W*!4Ex4%j' );
define( 'LOGGED_IN_SALT',   'F6r9.7&lBd4J},7>(o| G,5{52xV/qea98?*6ee7~]bPg3T[yJ|w&R[FCq9nvVu|' );
define( 'NONCE_SALT',       'Xn6)wq8 M(Gst*_hyuocf%wkM)%oYM:d:J3u7_1zE:c%Uw2r<trsc#{&p0m!~Y(4' );

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
