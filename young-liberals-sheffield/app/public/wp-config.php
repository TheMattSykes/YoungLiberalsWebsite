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

// ** MySQL settings ** //
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
define('AUTH_KEY',         'fPUdNtKc8QUlbtPZyIC1ccoa5QzHV00JwG7G5NinioyzPkrNOdrhPIq5blltWHo3UfHXK/FZv+Ru6l/ruqOLpA==');
define('SECURE_AUTH_KEY',  'ac7Mn92sSvpW+X3hzHl3oq30aLNTdT5M5Gse/39zd4Hxh0YDz4VzFmegSQj3BARlIipbPbtZFreTl0ApboUBpg==');
define('LOGGED_IN_KEY',    '8dNNRHrRS652y+TTvCkw+XNuSwKtUjhz+QPjeI/yIPRCdLP0Dv+n5QsGcP4g+P9sBDYss8QljmqEw/09PwsHtA==');
define('NONCE_KEY',        'LMMADOH42Kd0VuV1o8NctvZGFibVG1inCgtDMYWM1Lz2qU5+eBlmdhC3rJhU6iUJsAH3rgJNjoGUAIruaMbCKQ==');
define('AUTH_SALT',        '+BN51Y7VufI2liU2GiaVEDs3a8lkd0ReTP7TOW8fRYnZHgnlcaOUI5C4H+axuC5O5tB39JgCpcLCp/ct5aT6PA==');
define('SECURE_AUTH_SALT', 'Z7+j5wlIV08dz5C+fswrnSaTnP+I86gMpzK9yF0bR1oxVX8cGWIbHHVSMxDW9kN0JM2C+TIEt5mEYcQq8+uK4g==');
define('LOGGED_IN_SALT',   'TJOBYzAfylQKoY0ynMzBtK64CKEE63c9p8yrFkDb4zyRZbvvd05JkJQsnWTxP8Sc+26qy7igkN+C8kL3bDODkQ==');
define('NONCE_SALT',       'WRtbYX7Dqu2XcQvEIMwY8S3Y5YwcGtg52OGu28lNV466bHoyAYitzEo2285f3mw1rgt7Evv6riCqnz11mOUTvw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if ( isset( $_SERVER['HTTP_X_FORWARDED_PROTO'] ) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https' ) {
	$_SERVER['HTTPS'] = 'on';
}

/* Inserted by Local by Flywheel. Fixes $is_nginx global for rewrites. */
if ( ! empty( $_SERVER['SERVER_SOFTWARE'] ) && strpos( $_SERVER['SERVER_SOFTWARE'], 'Flywheel/' ) !== false ) {
	$_SERVER['SERVER_SOFTWARE'] = 'nginx/1.10.1';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
