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
define('DB_NAME', 'u292335398_suqyh');

/** MySQL database username */
define('DB_USER', 'u292335398_juvab');

/** MySQL database password */
define('DB_PASSWORD', 'NuzagyquMe');

/** MySQL hostname */
define('DB_HOST', 'mysql');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'wMjUUqZY0BL0V5CMHMlmsOKdKac40Fl9ZkU5PJS7QP3XJSMNeguGdKkIGpIhJdMs');
define('SECURE_AUTH_KEY',  'vIAGSVfTLsrNUnEpPmBCPNjKaTYtWgk5tv2mj33aAuS9riCJ48rWzBki56SxYpkB');
define('LOGGED_IN_KEY',    '84k8HrDFD0wz01a1ogwU1DDqtJC25qdm4dOMBGbEiVM6vFKmWVb11clH6VRomLNM');
define('NONCE_KEY',        'fnmEGPzAMiwKb7qk7AQ0fov6s0YmUH5O6geaB0oXctEDAaMQkSS6sHIfIp8rMIKB');
define('AUTH_SALT',        'BQtGDk8PkX39tUFuF16s2fho4P4RsvKIozCtzhZzuej3diTOVE7sRiFVuxNz1EIp');
define('SECURE_AUTH_SALT', 'P2d0x49F4KLWNqj6a64JOyC6MuMsd2yeMbo4x5idhHWTYfVnuRw4Y0J4ZhlRQRsg');
define('LOGGED_IN_SALT',   'KhULIOCPRkWFeXqesSPbmjrDFaVfWLYmVIiXjR24Jq7TrXZJYjAPcRuYm6NKVMFa');
define('NONCE_SALT',       'D5frQypQYnhSko1o3D7lxmYzY5DtzIlkSNK6TPfJ1ZUETE7N2A6bWKx2tGOf0XBX');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'm04x_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
