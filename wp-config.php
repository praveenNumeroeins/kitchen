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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'numeroeins_kitchen' );

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
define( 'AUTH_KEY',         ']hS+%sHgsql&{DIH@@k;5&_VAVc){It2sVf0<TOEkT]eH:o/lRqVX]#9v!Hl2XR,' );
define( 'SECURE_AUTH_KEY',  'z*M# Az|^J/5LN:E>&Nu=?R/SJe>(ABPgCP(8$Huw/6:Yv{8N~]uz6a2j}mcn8:e' );
define( 'LOGGED_IN_KEY',    '!, V;(2vY?!8E mfyEtJ)jX}oYA= N+w^TP0FGh7]`}^`2Q1U^G51zuWwBa){FKW' );
define( 'NONCE_KEY',        'ER?e~zxCBY<#ozk19aZSrxyxmAJCu<7ia[EG^+**:VgW~=5!y6vcIV`7wdeoL:Rt' );
define( 'AUTH_SALT',        '!e)%K$HUuG5Fnt;@0+vt-s=[UERL0^GtW jeZD1Fs2G|cA_J@F>u.ml%t9y]3f{T' );
define( 'SECURE_AUTH_SALT', ',k8]H1q8,E?sI2?o^7iB]@]rjKc7_u[R=g/ BTy>z~Ix@l1pbpH7PC~dMab1/@<|' );
define( 'LOGGED_IN_SALT',   'Tqj=bZkg!QZ>c7!UT]$X*b&C:LEqjNw]^7kBffG,rP>ZY@d:pr)Qyc.mFKgcbxO{' );
define( 'NONCE_SALT',       '.sRQSD!JTl(&wgZFNc6k=*E{dO%?5{ga%Wxw2QL:3cUjh;R8,R1ALiE~hcM8~*uW' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
