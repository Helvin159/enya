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
if(strstr($_SERVER['SERVER_NAME'], 'enya.local')){
	define( 'DB_NAME', 'local' );
	define( 'DB_USER', 'root' );
	define( 'DB_PASSWORD', 'root' );
	define( 'DB_HOST', 'localhost' );
}else{
    define( 'DB_NAME', 'kmmkcamy_enya' );
	define( 'DB_USER', 'kmmkcamy_helvin' );
	define( 'DB_PASSWORD', 'Dora0411!?!' );
	define( 'DB_HOST', 'localhost' );
} 

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
define('AUTH_KEY',         'qs6h4xil+wrk/pNishX6GlZ+9vWO14nN1JstPFC+j6GfhlyzUHZbHs9p+umwlaqn0G8SfR9SxSYFWsg70Y+a3g==');
define('SECURE_AUTH_KEY',  'mVqdkHhCL/O/Uv9TtrRdvESp8Lomn+oUfL1hINspgWu+qnS2vS+w+8UDJZA1X1xzTYjFOrqM6t7z1/aCDdnWmw==');
define('LOGGED_IN_KEY',    'j54BvIZ4MHKUE25T3gU59g3uQAWo9fqtzLaKv3TxXew+nvenhWeHzn7GAl4CwLuTApaoVRODMNAfpQ2CwJ3NgQ==');
define('NONCE_KEY',        'PZ0lJx+RGHAtlNzs4v7YmNUS1UjkhTX2UXtYLCkzY8xYyPRF90JGxXqewUvwbRk72gQL8MFnIhaaTTTTNbZYtw==');
define('AUTH_SALT',        'hH9eXhg2+Ml6H77z5tKUW11eewqSeZJqFPL4V1TprQTYSfZyJpmXJIjBoceDXwkfNjFSZySaTnLfeQWRHcYODg==');
define('SECURE_AUTH_SALT', 'sdydG7I3sEmL5mRjP2S8BcXiEay8gfQa1Og9K1ZzmHyya7PHGtC3xNkf1PZfmyF2piwgHGum9ETaKzloJTQv3Q==');
define('LOGGED_IN_SALT',   'HOy+AuVUjI2ojtSA3zzxSENQHg+kirn1ct+Aa7kh9GyP78927L7Uq8Yit4qGT/sPXlANygJ860qZ9nWjdDj1eA==');
define('NONCE_SALT',       'TgbfJP2Y9ALwPkUe28SI4KFddYoaS9dZGmXUGJmSIoSvoYvnMydMqHtXzO59H+aLrUFa+ldulTrIzYC8bBmy8w==');

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
