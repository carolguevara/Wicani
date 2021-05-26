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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'F#M!-]1d$=uq%kC4Vb7,lx*UJmA4}bJ6s6s8VT(Ts|[EVAw2/C%@&.a>2%R7Om?$' );
define( 'SECURE_AUTH_KEY',  'j8o909n/~z`]]YTJ0mXV#([&aCey;sX(@qe,!!HGr,|x:n,nuzE2M[bU$9NX]A]1' );
define( 'LOGGED_IN_KEY',    'BqLJ$GG{G;a%T@3MCr7;v)!B(=:zC(:|Ujm`X9Oe[#we IsukN^SA*FMH9z.)|8l' );
define( 'NONCE_KEY',        'j^X?RzDFDw8Ts72:`r*ye!RE2@Il .A.rmoPG22^#P368T1{H%K)4+l$k$s47Ak%' );
define( 'AUTH_SALT',        '?,}#G~DPhc8Xpu}s(!2ooL`kk8[MEqtdI>mT2p$:!kyhU/yh#B2p _ ,7uX0.DKu' );
define( 'SECURE_AUTH_SALT', 'AH&`D]aVqL*T$Lq12M}rY;[@=/eon=GTo[sHN?$AaQ49zKK7 kR=3b&dA*m)yqW2' );
define( 'LOGGED_IN_SALT',   'p$-HhmEWq1!*%<$KE 3Jzb(HqvkudHzf -M!q)_k4%9H?jQ2~1dfBPsLO*pLCr~v' );
define( 'NONCE_SALT',       'K~GZE8*V32,&uq,Q.7[Gx0,jrKy::x~-ruM>`&HT&v%n6Z:#u2^n_+CC@JNH{3+s' );

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
