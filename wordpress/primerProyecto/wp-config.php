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
define( 'DB_NAME', 'primerProyecto' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'RIzph(#8^RQ2Ci:s.K#P5VUXn.C|#UBMhG^Vhwb/, zXL^<%w22?q$rQ]34OC%Sy' );
define( 'SECURE_AUTH_KEY',  'Gn7`]xSZ:g=3rjTw-N@?G[4rU5#(*tq(<(`xr4Qe ;nbHi[1Ku;xHtMW)vL4qy>6' );
define( 'LOGGED_IN_KEY',    'H/x}0QmMk<n@_OH#I3G!gKHjHPp0IuEjk&=Z=5dNRYxEcS|wsU]4Lr{S~L!N,%Z3' );
define( 'NONCE_KEY',        ',y+Y@N$>38ow)v}!NV*,t228fp:VF<#v,TwN;g:D*u-{<jO1+ghk!{lYuCk-r&Pg' );
define( 'AUTH_SALT',        '`bO9@J@:8a!Ra:6%NA4ds-^p>E:&/?INXzK#[txN>@IcBz YpgFe~qrkl6(_lic(' );
define( 'SECURE_AUTH_SALT', 'F`M/xRx-80xQ_Y1SuaV6:k,$6DZ6j7><f~OX-`HG=zu~fO_iI1meg!8Ddfd$~7Zy' );
define( 'LOGGED_IN_SALT',   'd(yfH8INcAyv*u@9n8HN7076u2m0vo4vlBh=I[Q*!,7Mif8aW%NrJse-{qBm8oU5' );
define( 'NONCE_SALT',       '0[].<,9pA3&3W^]a&GG{#%YPn(6C=M<3=Vp$ec~OD&k =L!!yxq1M&cGLWuM)D!%' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ddprp_';

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
