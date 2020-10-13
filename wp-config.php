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
define( 'DB_NAME', 'wpemme' );

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
define( 'AUTH_KEY',         'L`>]Fgh1^UQhq*n56$9LI%[]JZ7Rf;)3vT?%|F}tAFf$QKT#}@B^h-w;nzb8lp*Z' );
define( 'SECURE_AUTH_KEY',  'YEE)@WP}0v;=LuhS*i6O+iGH)c]y=z09!>0;g#,UN#LjEop`v]Ix;FbqQYNl1;S6' );
define( 'LOGGED_IN_KEY',    'xb[i6mzP.Zy!Yc>$8hs@QSr+^Z,JOooJ8@TG-Lpc6-*4p4Y&O4On$)wI^^yBeNhT' );
define( 'NONCE_KEY',        '>q4P}6{v3)`3qg_w?^PljBtZ]P+:hWy }r;8r($iHhilUDOCv]l Xe/@WxqmZu}u' );
define( 'AUTH_SALT',        'kT7#rmd:(:BZqpVu[QYN,o9(zaGJ;lr#%sAVlq!l;%E?~vrX#n^2E1zg|(MhWL{i' );
define( 'SECURE_AUTH_SALT', 'E*<Igw&S~xB`*BWK4e,DqsaONT6vp@!~ 4QcSJWDcMzpWbkZyI>`w4!AZoh?h?7(' );
define( 'LOGGED_IN_SALT',   '`79*6FrUhF!dj?c0A*i*kUUa|fxeq:kpv&q+gLuXEMQj2B}V)J_x^[:9=anuqQI`' );
define( 'NONCE_SALT',       '1WC[,ji|>5EaW>FhF9&zT1|9mnJLRu=Xa5xBd:-0orW?{/we8ZEq`,wdB@W]p&#f' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * define a constant to recognize a staging environment
 * remember to turn this to false in the real website
 */
define( 'WPE_IS_STAGING', true );

/**
 * define useful paths based on a staging or production environment
 */
define( 'WPE_URL', ( WPE_IS_STAGING ? 'http://localhost/wpemme/' : 'https://wpemme.com/' ) );
define( 'WPE_INCLUDES', WPE_URL.'wp-content/themes/fashiontheme/inc/' );

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
define( 'WP_DEBUG', WPE_IS_STAGING );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
