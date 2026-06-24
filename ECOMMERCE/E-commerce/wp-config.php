<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'E_COMMERCE' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         ',PI<CjA,09^6?Py5amcF[L>/^J~^qZ^Sbi8_/=O6Uu*ozBnHT}=:/0io?zY+f)R0' );
define( 'SECURE_AUTH_KEY',  '2qmx)i@jO:ReZW(8+:jw;3,w!Z}T8 tIp$^!E~/$kgR8xRd]Bk:ONx7tH+i5b9.z' );
define( 'LOGGED_IN_KEY',    'f@;H!*H]=oJDP.7+jV)#[$jD-ftj`LS:Zp<Hg+F8-L*U*hDFH6` IFL32<4r,G)^' );
define( 'NONCE_KEY',        'SKXI,?)1C (2?{nIQ1tI{Z]O~N#~C]MPu-w*8jf70YQV[N3dY=9t?@F_6~?t%c&!' );
define( 'AUTH_SALT',        'kzppzG>t!gJ)U!~S/hJP-4Cty+&E?Z6(,`@o&LR4EX6e*7kM-QXpcT~1K+E7 NXe' );
define( 'SECURE_AUTH_SALT', '1HjXG_jT$8rA!saWp[/}^N<8H/<3@1J7WYssBVwkW4QKzbr4D:8-_P0-`{Bf1it_' );
define( 'LOGGED_IN_SALT',   'MgXJxW,`0)]8Q`vK:SgL.k;|#sOd_Z-Ey=PsO_y --3Wn:Dnq>2%OTfIk|%vSO-}' );
define( 'NONCE_SALT',       'MwvRAeF+[:TU`DAEdt-FlaUBJV~cs#?vp=dThl-2>^(Z.&>(V#MsGj,Mm?j;P?Z<' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
