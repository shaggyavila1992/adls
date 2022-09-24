<?php

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'atundolores' );

/** Database username */
define( 'DB_USER', 'atundolores');

/** Database password */
define( 'DB_PASSWORD', '4tunD010r35' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '~hL66R-X,VvzZL!Yu;|lWB}u$Jd1}EU(^H^.!$7K6G+Dp6$quVPyNob/ze&Q`] l' );
define( 'SECURE_AUTH_KEY',   '#gy,F&x/U<Us6R}.PC+))ywUN:Q&Ul4cCytfzt:{3hhHS$NE-&u)13WQt# s=!@R' );
define( 'LOGGED_IN_KEY',     '0{c=UKd3WsDd*edU:LZs2$9kA,QHci9E fGZ%C>}cy9WWZ1Q<lQld8eA3ZOwy`w8' );
define( 'NONCE_KEY',         'w:i<=+bB_D ^}DP&[@b{N]3w}LTeTuJQPfk [l|[Ii~PNe>2L;mp,~d%R8L<*y!S' );
define( 'AUTH_SALT',         '#J6#.D99jy?E@h^3baR/ayeJ||% ~#DJ@>oNEBr>_H&^:,nDO5&|5%}d%=XLAId%' );
define( 'SECURE_AUTH_SALT',  'WFIO:!#Nv+`[dM=;+1j*Ll1Pdu0rqDfT/^.AiDk?Y&|uM_n5zm:zAXxO9]XDo?Gb' );
define( 'LOGGED_IN_SALT',    '&z0FMw%{Hz3u9&emqZLK8JQc5~id)aDkw2{mkzmVa_Qn}b95bva%%4{Y5pLc*v<9' );
define( 'NONCE_SALT',        'Ein_.O_U[8rGp~ONsJ:hn9_{rg&4VkQNi_B,5IU-H._zyapa`z$[z:hEAJ;yY:]6' );
define( 'WP_CACHE_KEY_SALT', ',1IT2Q[5UW+@;^Y;CJ<)([psS,P5e0$%ckCl5~;N_SI<e:WhF qbpIeq^jW=mZQz' );


/**#@-*/

/**
 * WordPress database table prefix.
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


/* Add any custom values between this line and the "stop editing" line. */



define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
