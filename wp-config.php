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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'development' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'SkQ0:E}VkU<^|48ljao-8EC8mZ0l{tkpr!:5_dw0q4t3K 6v3H@&-y@zmh},pY!$' );
define( 'SECURE_AUTH_KEY',  'Nl?>*kX!)-m9mExP~PnbDs4tTNpoKOXLK^i2x`B`Ai|E+Y[;5Rrb<j/>3~#,`*-_' );
define( 'LOGGED_IN_KEY',    '%65:05ygZP;4@V@,6]UP%w;n1l}S-qtFNXB(P:vHxpMGSFV#V78Wnm9`HGMB6N O' );
define( 'NONCE_KEY',        'UMCH#2]G(v+$Khf^L}vJXT`o8LTN.->|[.MAQDQ smL5h~-?~@}^4q!W|_A#5~C>' );
define( 'AUTH_SALT',        'S,Rj@`p+IxD,<dhIDcFFDJTAH9t{:LQ7vhRyDyF{%3Fpzz8#w~BDOc ovGnc+J0S' );
define( 'SECURE_AUTH_SALT', '5 J#~$CF6+F-Dubl,-)29>]8#+}CO1d01vECer`MBi27gjK5RyF!S~z7g3}OVF:/' );
define( 'LOGGED_IN_SALT',   '3*:+hay`-(fes~PRji+_9lV<Cy$[|c;ol3%^$FDxj_+yjs$_fasX.gg3BDN^6g6u' );
define( 'NONCE_SALT',       '_+h20Mn60N<D`Kc:W5.XzW}Q#LGejd|OakYU($C|GU9-G5cGXV0=K#f@+O9w.N9O' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
