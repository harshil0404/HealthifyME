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
define( 'DB_NAME', 'general' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'abc123...' );

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
define( 'AUTH_KEY',         '0rpw$H2LglRz7ZD$<E!h5-:RK<:Y+;dh]<]d?0^Hzn@A5Q#p;Z{p:=Voio.m+jNz' );
define( 'SECURE_AUTH_KEY',  'G52}?&:gW8R!htYQuupd62Jo:or05-CT,nZ78u[]=#;uyw7v@nt&r~=JaCoG>~AH' );
define( 'LOGGED_IN_KEY',    'hC>}16K-7e/FlpSU9Dx$y`V4Qg#6co,K&mCww1Gl7+*dR9;B$:3@4]~B[c1)H&-.' );
define( 'NONCE_KEY',        'i87f?SZhDGrX6|~#u{Kl`@P~~OTbjK(=iIhX*xi9~`9!X ?FO&D0ql-++c)]G1*-' );
define( 'AUTH_SALT',        '20KjjxkAfPm-o4s#ief~p+[b8H(~h;[m<<!TCPYM0k}c6JG%Q ;%5|7$!u3Nx7eh' );
define( 'SECURE_AUTH_SALT', '/)ltiphj<0fAK,pMS3I}i?aCk|5VyMc v0d4qpa#VLGD6pOqjYYsHWw1}!c|~]UO' );
define( 'LOGGED_IN_SALT',   '_B1Jq-2c,zXP)3P3.)91Zo5!]bzahilOD*7;*|.F<^qWr:YJ6Kx=2oLc[S_H&Pv;' );
define( 'NONCE_SALT',       '{l]Un{Fc5+`nFm;gj#5A^PT?@z9W|]tlMPQqshVg)Ah!DR|HK=XQD9g,ik+^/8:w' );

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
