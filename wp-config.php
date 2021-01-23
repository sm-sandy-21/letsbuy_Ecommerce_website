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
define( 'DB_NAME', 'ubuy' );

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
define( 'AUTH_KEY',         'McN9vphuw4wErab7U7gtk8!]wO2SL7j&`]@,%T&ob/.7nD|?QNiE>>Pa+~(^$d1*' );
define( 'SECURE_AUTH_KEY',  '@vnA_vhXv5>[mc<q9q99Vyf$cFe1DF%Q%(],)^]^da,y~ M-Q$ov[3H=:}G8t?KO' );
define( 'LOGGED_IN_KEY',    '~A$YdqR6<?ZD57(h<4,D:!Z+A,5kBOrpD17E_}Wed%tui=ZJ&z}f~R`d]).%BSf/' );
define( 'NONCE_KEY',        '&@</w/g@xeC$NyBh2TVj`1>)qA=+W!UUx%gW{hQtqK/u,Z-v@W/RgGdvW7p5%]R0' );
define( 'AUTH_SALT',        'Gg=&zyL%Y9gVpgh-+g-Ve$OQ*,r%{kM]wi_z0HM8A2E>>a8Y=*U=7Dtr T8k;@Ri' );
define( 'SECURE_AUTH_SALT', 'CFV8hMmJqox#LuUzXvyJh>=l9aXpd;<ttqq=g(~1l`VlAr2l,iK:u@.DQF=wwhBx' );
define( 'LOGGED_IN_SALT',   '.y:-O6!Ac7{8S2>YX{Y3L2<ZT3Fyp>KWInfR QsL3Cu^uyf$<ZPl}Q8zWJFnswct' );
define( 'NONCE_SALT',       'wQz2T@{~Q0dDAbrNOz61Lrtq7mQ=2Q>aoFC[Wj[KlnCPyK&DF|!jDGiqp*&oB9-L' );

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
