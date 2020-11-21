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
define( 'DB_NAME', 'wp1' );

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
define( 'AUTH_KEY',         '*4F[^sL9VhMHr|NE`Z&-7s3UXhC_&1<101+~UMmZj7rylfS_/c7pt29bg4Z8PC!$' );
define( 'SECURE_AUTH_KEY',  'bo,(5aI%0Jd9OV.%L5#O|/l$cx]%kQIKUS+{j1Y?I*6!^:*mz*H7J3$Hc?l8g4.u' );
define( 'LOGGED_IN_KEY',    '1T[}21k9a+khQ:em9hKZQOeY|j8g*jz+o: ?LvBz84hiJiA{9ZVP)+L_.IO%YFQ5' );
define( 'NONCE_KEY',        'Zy.J8v2]&k2*5wBC?,>77D;JwWwJZ<xn ^aMT+2e],U*Z)z8c,1(m*?:MvatveKa' );
define( 'AUTH_SALT',        'Q1v,L(lt{/e>IhxeABUP?ahV.!eu;Nha-8.9Tk#/f+rNiS^aC0ZU+:=_h}[<&TN&' );
define( 'SECURE_AUTH_SALT', '0VyE?)_9(BVR@]<F6.M.kwF}^N {Djwbb2pL7rJpF}|7#pn.4*AJ#;M=;B{~D5rf' );
define( 'LOGGED_IN_SALT',   '?N<M-@;6EO3Co #|zSnky)mDbi*M/Uz2=JqYa8Qf*~~K-gkE 2$cQYKy[AWx$y4x' );
define( 'NONCE_SALT',       'hS!nNUz;|bu cGX{=GAn<k#$k[Vt(eE2]tiZSb)i/=(ZnxN5gm]|z4f;qkg2.T*^' );

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
