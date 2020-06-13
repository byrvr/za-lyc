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
define( 'DB_NAME', 'za-lyc' );

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
define( 'AUTH_KEY',         '{8[9Y 3fWFK %N2@Dve}H+eAHm,dk#iy8}(>H}3O#*^dA?vOiR e~&[K(?aG_t<c' );
define( 'SECURE_AUTH_KEY',  '_]0Vkjtc!en^ln[FfI.x8DSJyForom;Zzq%&:P 0V VAZk>5;Qv:gNMR|;g`Xv<z' );
define( 'LOGGED_IN_KEY',    '#H#v()zqg[&+)u&+{>uZI6M}y7fj}*?hzmc7@H!$(8^D9YLf6+F_lWab?xzq0;VQ' );
define( 'NONCE_KEY',        '>IF/B)!7][`;kk:T7P2ae.7=[6Ez6E@JtBdhiCP0q:vOwe8oENebrRot*.Kd@q)7' );
define( 'AUTH_SALT',        '8HfNf@2TO6ng;ubCNR_3b;7#SUih 6_b?jP[X8`B}([H?Tgo*XUI+goNY/ yL2PH' );
define( 'SECURE_AUTH_SALT', '!|=q4 puc6JDkdhI^F/}7E{T8.1I i-OplWH4p%1FJ~pyYaY]nsnG2kJ>B%qWaEf' );
define( 'LOGGED_IN_SALT',   'HCDIHCP<^{_o?)-:z#v0,$&w;3.`{!u-7l+U*D!;N|RUI`N_c=cl-!<IvH3z&PnN' );
define( 'NONCE_SALT',       '5g?pn61RwV`tsH:V#x~/ yUASIU;$vK{3dvkN](b}<<P*}alyKW;25;7Kc1H0yQi' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'za';

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
define( 'FS_METHOD', 'direct' );


