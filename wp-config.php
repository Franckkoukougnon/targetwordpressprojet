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
define('AUTH_KEY',         'AKaMjGyveyFSt1IurexvrNc7p6e2heRJl3legsqgUXjVHuj0/MYTC3ntM3WogOQtF5dizMJW8a+nxk1GqnStBA==');
define('SECURE_AUTH_KEY',  'ewrYEx3mRhuWV+yUJg/McNw/jq3pQlU9R6QOE0dJEHWffd2+6lvQhXRjRBhBudnU4tCqpbGapf0FYguHvgzacA==');
define('LOGGED_IN_KEY',    'SfBkHz9kd7xYXYnWQwVCjyYnMNFubo2IEia2g2DiGIzd54dUVdGGu19wd+OvgNu5rAMqspIHAyQQrhP9Tuc1Kg==');
define('NONCE_KEY',        'lM5cG58U/PwPb1P3O60Socq4kAG8pUR+hvaOCr1WfjkIHRbIUgDtbgmGp8iItHCsw3FcZSLblZqsq+/5slwxjg==');
define('AUTH_SALT',        'Tk4i0/1LnZIfWmWRZ0qVTVTK7FkBaxcD2wE95GwaxDES+JIxmPrWrQavlSUP5oAS1/Ad5wXHmtjnJCIPN68b+A==');
define('SECURE_AUTH_SALT', 'q3o1VVN7ALokLI0bI52Jcx169lBlShREtbNiGnXrhH8ef01LBMvWDmhezDt88AWNhy+v0TcZNBlEg/EWSNJpKA==');
define('LOGGED_IN_SALT',   'EG3FGktVtIP5c6rxFn/LT4foA4CT+TkTFJC/aoUrUQJJlzkXxVizAX5EuctKcxnN0n7I/COINTL5CdIf9ATxNg==');
define('NONCE_SALT',       'QvYYPRQxVgMFHN4oB1MFGtM92ukCf72DRd5l6vYxzeTaW2SusJhfFsPOsaRSpwdPlIM1JKzwzMtlMmSsJKFNBQ==');

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
