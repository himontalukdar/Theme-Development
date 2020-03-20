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
define( 'DB_NAME', 'wp_theme_development' );

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
define( 'AUTH_KEY',         ' 7XaP{h~:VO` ;Tmig3w9)VrHi.P~.GJ+n9n~F5/uMr{`|Zl$)V^d,oYDk]jW/B5' );
define( 'SECURE_AUTH_KEY',  ';f{Ey`~iTR9=],B*/$ JE`lX0qDU%0M/V]H~1Z:-:<$Z;}/+olU|z7vYMGPU~joc' );
define( 'LOGGED_IN_KEY',    ';t&rDS:I_%x5#7=PIH++`b)l*B(&q31k2ZbfzG=wa3wA+)@yOzEGl>SPmtZ`X1{2' );
define( 'NONCE_KEY',        ']}{$1-KS~/xa(</X54$bD4 $<P:>.K.&#+G@`?w>p|FXt^QN_#G7=UsfOW)?[ZKD' );
define( 'AUTH_SALT',        'kq1*GEu*znSB&j:S(O^H%91Bbh[foX`A9>7~?;b}%_f4;AaE@a*5<^d9U-Bpiz),' );
define( 'SECURE_AUTH_SALT', '$k_tYbv{bH=G6ZgJ%/@$}jD75s^ QsjZGkklj%Eh.4.HTd|>OtoGqS]L0.:dpUbL' );
define( 'LOGGED_IN_SALT',   '+1vA-pGwjfVa&&~,zm|tNOx}lU%b4Od[1Ef*B jBT[q;+GA,KL:nMe?m*O%8zcD6' );
define( 'NONCE_SALT',       'jDc3u4#Mctt$V_mdLbJBL&U/)+9`{,nH2P-3sz`{v`jkEhm^0:bH.;fXA^ycYP7q' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
