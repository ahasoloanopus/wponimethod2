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
define( 'DB_NAME', 'opur9326_wp55' );

/** MySQL database username */
define( 'DB_USER', 'opur9326_wp55' );

/** MySQL database password */
define( 'DB_PASSWORD', '0pu$2020' );

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
define( 'AUTH_KEY',         '##N{jT{w%NVDd6q z1& GkD.1OJ(SqS-yXc(0p_9ONOW$&FX} ;yZ>__8sETGBwK' );
define( 'SECURE_AUTH_KEY',  '#X.i]A|EZUc.c!)JV*28f`8o#;st<TQ90h%j1!IfnwtXN+1Jgmt|a`}ViOe]sIZ^' );
define( 'LOGGED_IN_KEY',    'av*,62-569uIzLg5m2}a@N6I&_D7lg;ePaxO8/oO<0B#yMYl6QRm%YtAItK/9uk>' );
define( 'NONCE_KEY',        'E#FaTZJaKIK/yXZf?fi* #_TQQ2b%+A:t_=wfK{[7+e`EXaUoZ02vPUH@Vj!yz+4' );
define( 'AUTH_SALT',        'fGoQ#oY(n*DngaG_pmZa<=xF}Tn;/?.8Plk8wC~)5+ci`tmpVUI=;^3H;_$ij[uH' );
define( 'SECURE_AUTH_SALT', 'j^&y$N~Yo1(B~6oco-*y o*u I7gv_kt~e0W)TmHC|KWsKYen5y0IkiD5?>?aF7l' );
define( 'LOGGED_IN_SALT',   'l*6Ep&@5;yB.0].[KPX&8.puG{7Ist5MSz`gxWr*0:u3[y@_%Z%Tgmvv,%{ 3<0Z' );
define( 'NONCE_SALT',       ':{q*~P>[|e|>d+fkWb:n^9/n4QA2uKB#9D$9iDj> AT2 *<HP#%:zD.McwnQ+J:J' );

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
