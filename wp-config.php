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
define( 'DB_NAME', 'tyje8430_wp_ocp1' );

/** Database username */
define( 'DB_USER', 'tyje8430_wp_ocp1' );

/** Database password */
define( 'DB_PASSWORD', '.f38AS5(p2' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'ywgzofixwrcksymcifxvxcznivfzd9ablarubehpc6vmgxh4rfo9oyeeypeoxkpt' );
define( 'SECURE_AUTH_KEY',  '4dwgcwz8fwcwclioov6en7bmsthkldvoshtmnbfeabgts3y4gdty4z9gxop5dqvv' );
define( 'LOGGED_IN_KEY',    'jwhpsposchuvbznbs0x2dzwmx5d1joqidfwbudeamrfztpe6qakimmqeuqlfpapz' );
define( 'NONCE_KEY',        'wiahdwnqofno8rl8zzgmriyaohmj8clguymycnnzakxtpqkzbnwskb6lrbfmgftc' );
define( 'AUTH_SALT',        'zerih0varnir9ehanuoc7ytuhcat9sg3jzskc8scddkueu4ouia9zz6od1ewky7e' );
define( 'SECURE_AUTH_SALT', 'jrpdbirqgpn6gdtxtzhflhsbhtbcqcsdbsuraukbvdg5pwdto5gjxpoezlpmo5wn' );
define( 'LOGGED_IN_SALT',   'tjrymdjdcbirp949iay0xbxgtmra74z5uza3ngjzv5x6ewain3q70tnwdim22w42' );
define( 'NONCE_SALT',       'k6hfalofnr8oyaldzasvpskc62ycfagj9qo6qmz24er2lybdrnzh6aqnvhin66ll' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpko_';

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
