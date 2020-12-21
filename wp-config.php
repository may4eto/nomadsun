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
define( 'DB_NAME', getenv('MYSQL_DATABASE')?: 'nomadsun' );

/** MySQL database username */
define( 'DB_USER', getenv('MYSQL_USER')?: 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', getenv('MYSQL_PASSWORD')?: 'root' );

/** MySQL hostname */
define( 'DB_HOST', getenv('MYSQL_HOST')?: 'localhost' );

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
define( 'AUTH_KEY', getenv('AUTH_KEY')?: '7s4b;n.{ZI%+qf+GzPQW%)I+p!e~ugH[6fGIFNW09UaQpjeX/8bwRi>mmijW$2zF' );
define( 'SECURE_AUTH_KEY', getenv('SECURE_AUTH_KEY')?: '-kcpOK8%gGutXJdEbmgd<wgd>QXRW!!oK[%EH*-e=Ua/-<n;<5$=y,8%h%T 9&!Y' );
define( 'LOGGED_IN_KEY', getenv('LOGGED_IN_KEY')?: ',Gs^H.],KXk={,6cBxoj:GuDU2U]kQ_7Da`>=S7b0||~~7%]J S;gsj`%CfI;:&p' );
define( 'NONCE_KEY', getenv('NONCE_KEY')?: 'wORe_)AAk`mP.mwO0R8wpcejw[?:L-@L[-h3gJ3+QQ{5RAvq,F{4E`G1d,8DoqgK' );
define( 'AUTH_SALT', getenv('AUTH_SALT')?: 'JZ271r6=VVYL:*2=RBoRB9vmH{~15c{_tr(4*xSL8,bNjqxa*%&HW8gyT$nzR].=' );
define( 'SECURE_AUTH_SALT', getenv('SECURE_AUTH_SALT')?: 'XF6[=:fd|Jvs5ZEYeW[kk/D}!q_<X/mz<Mlj#Otv-6+|ZV[3hDYv#ZN[pA:_skE9' );
define( 'LOGGED_IN_SALT', getenv('LOGGED_IN_SALT')?: 'JfD7@u+(3?wfjmB&/l(vvqmYD_Lin^&+bTG`^5_k pi}Lme@=f6)zz@(N 5|R92n' );
define( 'NONCE_SALT', getenv('NONCE_SALT')?: '1(Q09Yagpar^=v_rxL$:KUjD*w:N6JZrYPiWx:xw~o4scEpg!wc%MgRjmu<tJJ{0' );

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
