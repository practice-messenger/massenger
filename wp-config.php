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
define( 'DB_NAME', 'meggenger' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'eBD ;tP+gY4|I:8 +.B@29K`NLkcYg <IPDx8+#uN5!7G@m+:8u;%)sfQk]IN{1|' );
define( 'SECURE_AUTH_KEY',  '|[:Dyu{V[Pe3M5)Z&o.$Az!_b5UUN3nW=GfY5DUg9c[X+u:nSB[!}vCH;^4w3)>7' );
define( 'LOGGED_IN_KEY',    'P3@_JLb|X8P}(nN2-,5kVxWhwVv+|enu@pIEac}QMaKHxmUX?c;ZQhrI9n(58[0{' );
define( 'NONCE_KEY',        ')#L7.xLGy/@ Yji5Yu[W piIzS;cFBuCR`Vk FJLnE=C2nMFMFk)= a%}?StKw$b' );
define( 'AUTH_SALT',        'dm~+h$l=etE=pm#7C3b/rdF#v@kC+<!X;K5L$bwam8@Ka/^9_aXsCKW;U?H I,Sf' );
define( 'SECURE_AUTH_SALT', 'l.HoY;_G0DMTR`+so-1}=s0-oP.!j1]%^*4HFwi5o*a`9LA4uG-ZtsX(-4Frf4A-' );
define( 'LOGGED_IN_SALT',   'H[-+/.gl1/Ch*%;_zTDLy36)J&IF%Kkc~=s3hB2JjRPwnmRo$DQa-V65WI8E(qWC' );
define( 'NONCE_SALT',       '|U/@O[(mqRiz3HhE2Ub7;Sf7h-=OaUF0B|Q)Knp2H}yG:B^UXR/5R3COsfck,qvf' );

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
