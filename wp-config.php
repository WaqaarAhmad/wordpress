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
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'mypassword' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'vz+2>V`;X&S|Fj^ph _>+vLSj)<a6iQH{uOI{,DjlNy/RY@Fve2MBG]S#5+cz$`^');
define('SECURE_AUTH_KEY',  'v1^!xhlovg?W}}kG2f-XNe8l!W|DU^a^K++,DiW,KJettDKMs9 }%$v(}zXQO2qw');
define('LOGGED_IN_KEY',    'gvjHqr*B =+BlN+dSyGeCUD-0^U>IY5}8ngRO$En8wk$}1R]smyUz+|(+MVd|} B');
define('NONCE_KEY',        'z::Dot+GCHpq,~vQ&tug#wnU+&a#t /#~&GO/4x-LE)>LH(X$I+L*J9sv~+ie}? ');
define('AUTH_SALT',        'H<}|2Qme{kM|@1j,1-BEwe83-5Z RB|-uj-;m&%u,^_1c:m_O>~9}N*B_hdW-@Bg');
define('SECURE_AUTH_SALT', '%u :*Y6CP-uED9|]17nfQXAo/s.]hkKVUvs#4wU#FV-E.H_J~,:[5^J fu2%3c?!');
define('LOGGED_IN_SALT',   '/+?KU0FJpuOEhpO;38hKWFQ|%BPV1i.?#91}u:7:n=E:,{1M%#koI(>`,S1KfzT%');
define('NONCE_SALT',       'g}]y}-[K%87_2d(vJvQ]TCiNn:K(NfjU6M dZ$DiG+Xb-q%Q-u:Ggexijb)_Lx^_');
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
