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
define( 'DB_NAME', 'perfektbud' );

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
define( 'AUTH_KEY',         'Jc.>BUa=-g{#9d-W{.JMZEA4=1?n7P.{FZkI:vwB>%{mJ%U{_A eR90)>h^$6t:u' );
define( 'SECURE_AUTH_KEY',  ';aqBv=GI3M-~?I~=.Cd;btrWxqYSn9B[vCK!EGZf$Xhk<CM+j:bzvrV^[}j,3hqe' );
define( 'LOGGED_IN_KEY',    'NDs+Z*_Zc,y!DRF_6ObyX*(f9GE:N1#j@|UF@:2l9^auxb=iLL3YkBYQp#rWGd2q' );
define( 'NONCE_KEY',        's@E/m9t>+#tx-y%l:e.M`hm5 D(1zkJ2V|[+*.yY|j us[Mt/cs!x>)[n:Ur;Bs8' );
define( 'AUTH_SALT',        '!+rne):3}A>A6`fWqTT|~n7|t<m/OE|0/yn1<<abH)+JXBzx+>jI3)=W$g2!Bj5f' );
define( 'SECURE_AUTH_SALT', '1F;wrappL?s98uB}wQg3X:Nr&u((hzgqxQ(06IFxZ<.^O[b)1T!qf9;Y ?}FX9&,' );
define( 'LOGGED_IN_SALT',   'q&(Tr/%=|+&ThEaOiz35d1NsG1gk9)B*d).4=Eg#^OFf^#$F]<1)JA&D]^9pVZg+' );
define( 'NONCE_SALT',       '**{[gvV_wXO4/]!i2csqg10]1oLP8c{i#Z^+o%)jmA{R<VfV7G?Rr%B3jn)(m9sP' );

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

