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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'aydRmbgDH5WtKMXmTvorJGKQbYuiUZB/uDKBuzvrwnmngRz5G1ZKUdmpDObPHjwedpR527vaoA7rqsM7kZP+jQ==');
define('SECURE_AUTH_KEY',  '7VnSLuIDBh4WdP+tEnbTLnb/O2GXrNuWaiaxELqsmIMimaaS5jnNsxHBwqaIsWz3K1Ug4G5bPB6NlID+hWk21Q==');
define('LOGGED_IN_KEY',    'OxkXJ81Y+TLa/Yjt4WGQzZgd9nqHIj1N6OpAd6iPitZOlAxbtDD0F6Wg/PynsxL9Q28ryvOkQx3EVEkz9rx5qg==');
define('NONCE_KEY',        'fU2rMSgfT1Ym6Tpa8BhqrR1maqeHj8XVGmHMDqv1xIS0OqyX3yx1bRunItyzncSS+1E8ZMeb7WpexC8aa/QnhA==');
define('AUTH_SALT',        'FI9dABHMb8OwG/77IDOfbR8NzAI97YHbspIZxT3O/Cwac6nlPwydWp0NkV+UbNpGe1FNxXpvBihkRRO5pIehUQ==');
define('SECURE_AUTH_SALT', 'Svv2jsXl4WiRaeQrO13Dy9hKt45p47GCjJbV5vvLUO1aUSW1htqio0M9EgAW59EahSJQzeHDVTKyrl8fH+zO6g==');
define('LOGGED_IN_SALT',   'hUsj0aq9OEp89mOjjfUMbpgQ3+0VNnbZjwgLuUSoG2rmM1+DNCY9rGH0pNtkTgsnyeHvoYGHNKG82aVauXI2cg==');
define('NONCE_SALT',       'F2QInHZXmxG3RsyhFaxJQ9x9nxXor8w3w9lIYPIGTfFXP2+psA0N7Q6/EowrQieq16WONytiRwHxWg4VOyIm9Q==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
