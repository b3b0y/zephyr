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
define('DB_NAME', 'zephyr');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '2I/1blyH1T-pJhn3 I1)IrS?6:%OrtX~GH~!LmHF)M]ltyH!^Jp6C2n_gN$;Sa8@');
define('SECURE_AUTH_KEY',  '(|t@VMI[<df60Au2zV~k8drpFj+L}m9cxGA4CM)zjbnwo<f{<E)v:M*F[wS/xJ%l');
define('LOGGED_IN_KEY',    '<%XvW8S.nOu ,)+8C6F2UqF<C;+>5MoM.C<z)Yl68@@1:~^c1w?TMac60A}twk*K');
define('NONCE_KEY',        'qQMz:KL{7aGP,F74,KUQ=;7z-.5Tr];hY=lspLM7dpRg;n|TcaSb8GFlYE.W!1Cw');
define('AUTH_SALT',        '&V#VdQyP6-KW3~z*cf}fUE],G!t7j!OdSA~C d:-h_(zD/~s%jOja73;`g0u#&_!');
define('SECURE_AUTH_SALT', 'qXrgBe0SL=#-&Fh}NEcz0Wa@>pFR apmA{56tBNwJ c1fG])X_]J,m])lhLqzjG-');
define('LOGGED_IN_SALT',   '.dN.RbXx=Xvb2PGz`BI{UW1~[BY,q~fKii%1Rpdv4}kYv#a%];jw$3`qY@p]U=C&');
define('NONCE_SALT',       '!GNUa,Mq)*{U*8BG[lbO02;t<NA[o$K:0W{0nK29hx,rUoHLXEAa:B^;(*2+~3ry');

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
