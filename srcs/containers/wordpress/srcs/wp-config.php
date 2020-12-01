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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'admin' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql-service' );

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
define( 'AUTH_KEY',         '8l^B&W)AO}R+9A#`@SyKbiu3T`d]bqxc)scEll;pB7 ^8rqY$8WGWR$GAz).?Zfa' );
define( 'SECURE_AUTH_KEY',  'Vo6/j-&ywgf&1OYPfoOwj.>:H)ETqkr8#==rSnz=m<)Jw&mC.<E2R9Jy;o$(M]O}' );
define( 'LOGGED_IN_KEY',    'S5_,I2fB,#GuE}-Y![h%LrJ-p3Mo!l0qiQ#>PxaGEY+umeqZ>1L(ceuS5vX}yP2]' );
define( 'NONCE_KEY',        'E4#JxghdzRAVb3mtCqBQmZ$D1Q:QTO;6QaNbTv!{zo<2K 6TS!=s@!{rD-_e6xOI' );
define( 'AUTH_SALT',        'UY3YTXbDe5|7d>}camedt$e`{*i~#}-0Wj?=sZ[}`(Xs&&9083:E`NZziDdmJYP ' );
define( 'SECURE_AUTH_SALT', 'zcI3W2ZG=HqE&_5=ezE2O+t~P`I9UWg^]X<a1jci%OUztt<pcmM>^/[@?IrI2$Jb' );
define( 'LOGGED_IN_SALT',   'NC*HZ^wq&P3rZfjK`)dYjzBkS>?1O8L:A8z819v]@dNeqBL@P}tFM<pXd$6K?O{z' );
define( 'NONCE_SALT',       'oUv#`xE`H8y}Qdk6*j[F`ZOul!PiL0cwERf U`R/_AnZ,,>2;VWd8#:%A]7leH`u' );

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
