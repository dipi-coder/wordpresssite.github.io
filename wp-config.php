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
define( 'DB_NAME', 'wordpresstemplate' );

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
define( 'AUTH_KEY',         '`lhw|*?jq fnMHl!`#y;(.xi?eI/,Hc8]t8IQr@sG(H+5dK$br]`x.B=yh%upVq|' );
define( 'SECURE_AUTH_KEY',  ')K]aM[g-uu#!Y/,~_Xe|qeUb:-BA1@f&OeJsvwACi@Y):g`N{_P3Im~(gQIA.sj=' );
define( 'LOGGED_IN_KEY',    '8e@6zU~xOjx}c.`xS(kE&~L[]/(<]+hH0wT#C-;Znd+w*#pI4Y1TTo/=vzRR$*{I' );
define( 'NONCE_KEY',        'L]Fp~$O`(F!<GV.Ngw^GcWuvUvuM( _@~w)X ?1uz1ATZ}2Hk})MFB0ijQd<{|&O' );
define( 'AUTH_SALT',        '03#GG}.X88Y*t1QQ=`rvkpA[p10wgzfWTFy%GD,&&hV~Kn?GcX<nKQf&ajBCU8K@' );
define( 'SECURE_AUTH_SALT', '$K5,NyVv_yMe6U}glb#l^c#iTVTH%}^p&xH_:qbwvj+aP-Mr!Vf{di)w|lit0f$V' );
define( 'LOGGED_IN_SALT',   '{o66g^$zmnmu.i}tlk#XK@v-[h#kQ/lb70fv?m-?<SjQ$tw)8dtD67T)YO85C=Ab' );
define( 'NONCE_SALT',       '3?Ew%)Z[5/k``+afCsJaJ|b9`kc7FH^$i%J-&Di=V]G7%vy/X,N$XaSfbB*l.d(H' );

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
