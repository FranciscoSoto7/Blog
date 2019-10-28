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
define( 'DB_NAME', 'prueba' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '0ed00f43f572bc2ab26791a356e1830bc7710f8d456d0950' );

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
define( 'AUTH_KEY',         'kWBYkSLRwdYS8dvf^Wol%`{`t4$@gTk#03.Sr+PD}-Bt4bs7{KN[iZ?F}2<La|&%' );
define( 'SECURE_AUTH_KEY',  'V@$E}lu+K9E`s:R;wF]!tS(j`T{Y+Vs,dJ$>R>o5S)cYdBQ:.qnI1B7X^-9PweK`' );
define( 'LOGGED_IN_KEY',    '^SRbgB,@lQFe3TNvDm=Rm/d2QIySvE<9]7Su~<CigeEUAg4,;E*K|,xP!W.zH;TB' );
define( 'NONCE_KEY',        'K!1_H8jG4V%<<*#>_![yffM}3y$~,!ILgl|Z!@F{5]w-MY!p^VkQ3| }}+Xsw.F;' );
define( 'AUTH_SALT',        'a.B6q1S,ce0=^:p8?GtKUR-Vn,lq9:1y;:vE}s{c;vk!Y1t3OV,[_@cy73Zd~l X' );
define( 'SECURE_AUTH_SALT', '9_aI9p(bWkJ%RM$e2^yalzZk16Ie~a.O=eR<c}*y58-Js()}3p(wE_.hr`(f`ib7' );
define( 'LOGGED_IN_SALT',   'c`=hk Kh)eMR6BZhi%PWboaKh[g/AJ/^2#Q+:|d{Tcwp@=Mr0rZ}YA)^LdqpwUmJ' );
define( 'NONCE_SALT',       'rfT1a}9c!$4:FHC!d<}%CQrY.we|+SaRAHCTX$F%WsZleTPvSRrhLc_GF_D4$p<O' );

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
