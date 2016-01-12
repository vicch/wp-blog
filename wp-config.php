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
define('DB_NAME', 'vicch7_blog2_wp');

/** MySQL database username */
define('DB_USER', 'vicch7_blog2_wp');

/** MySQL database password */
define('DB_PASSWORD', '3YFUZNk4');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY', 'LhITlufbAcpaLrRTGBTCwtm13nfSgFmi2cXr3sWhfPpZc4Dv0KGpCPAf7c5PjyKf');
define('SECURE_AUTH_KEY', 'GTBaUc6Gd0bcZMqwb7fW6EAHc7Ib6QiZCPIPkh1JC5QK1Z58tfwNlWssr2a05DjZ');
define('LOGGED_IN_KEY', 'OLcvq5TJv9ReEDgs4XpZh3WCkyeTDnyzbrWbjuklYhcjMdnWFbKADyRrIK6zxjOx');
define('NONCE_KEY', 'KgBTCTu69ze1gc7nDbMV2RJ2SUIKiJUxGh6VImvmrVD986WIiJcVBiJdQhjpwiJm');
define('AUTH_SALT', 'i1VghIIXj2FPeYTURluZT5DdpnkTriFktwCGosqATtWPv1rliAd0QTixI23a032j');
define('SECURE_AUTH_SALT', '2PQGjbQMpqXLaLVcGGfDw46U5YvOOTkJtWEzzqTcAYiJzBpdMn2Xjss4XflWlmNG');
define('LOGGED_IN_SALT', 'Zpqohwkv1FbKNL8niaQ4WnVtrA4Eaaka8rk844mfgckrFQVdgP9Tx5BLuGfn58iA');
define('NONCE_SALT', 'w18XzwoLRIBje7pPw4FxEynNyDfNqPG7BVV3Q3YxqLRPMnBRK7NcJcsSxUCnQs5U');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
