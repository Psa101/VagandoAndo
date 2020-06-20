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
define( 'DB_NAME', 'vagandoando_db' );

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
define( 'AUTH_KEY',         '}L1HH6gMh=GJqL ,va^fD~?JWEvgTR`+d0JCr-}0z$$A[yWuR@g(B3uDY}9uzxQc' );
define( 'SECURE_AUTH_KEY',  '7~Xgg4>@(Ux<896OOM4Dd54:1[R~F[)]f`^Z`cUK*qB?YWMK4c&oS_>-guH!5SfZ' );
define( 'LOGGED_IN_KEY',    '<%Il}LbAjHe{V3I,_sh:-j%gEuaxnZRMI$3ahHdTyC MS^o<F,f;``}x?`{izAn#' );
define( 'NONCE_KEY',        'o/Jh.+PpL#uP92n[ @o_STL#4;Xdw~;^g:~3]Pp~df,~35|Dj_`<st<BLIEd_Wcg' );
define( 'AUTH_SALT',        ':mkTo* RjKOa-h~bs/2qepO?M<2:Lp&s^qBRF$^3tu`in/foLXMvz!lU|xYWTZ];' );
define( 'SECURE_AUTH_SALT', 'C0>a_|D4XsLFfi><XKe29//=LP(t$TDp&ydU;:|SI*5uQ)}<}#*I|8$?=@bn|.e&' );
define( 'LOGGED_IN_SALT',   '5Dwy}5Fm?nZ`XFW.Px+7[UMDdQUo~f>(y|nP=z&nL1/7_CYrYT#bID,Xp2Od+0sB' );
define( 'NONCE_SALT',       'I@B6`^U7heK36>aM7}d<z17#!rWqN}:+ig&T<3+jZo&S7O:EyQ2cv<pSwn;y}[D*' );

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
