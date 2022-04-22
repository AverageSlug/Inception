
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
define( 'DB_NAME', 'WordPress' );

/** Database username */
define( 'DB_USER', 'pleb' );

/** Database password */
define( 'DB_PASSWORD', 'bestpw69' );

/** Database hostname */
define( 'DB_HOST', 'wp-db' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', 'utf8mb4_general_ci' );

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
define('AUTH_KEY',         '+2V[[M{A2vjz5f0Us<6ahg`Pd?3Fj99j&%^IMz4+o</;]Nttd2s1+)A=Cesevz%Q');
define('SECURE_AUTH_KEY',  'T=ktv%# <4aeDZwUi0-.0]!F5AMJ4{aZiY}W_ /]]|:qUzQ~;yX{=G||mvnW_+M|');
define('LOGGED_IN_KEY',    '4L#111Kw@M5+UX8@O-w#D#`Sks~:W+Gg;23o~;_7$9*}>mLN*T8xWr(QI!^X3D_5');
define('NONCE_KEY',        'B$2Tk4b|begk{GkGxGATamP)/ ;SeSndJ$i?0HD,{;2B9iYn.U8M#oA_aR/ Q-F/');
define('AUTH_SALT',        'RV.e!-lujw?bT8A.]p9VacckSun|vE0*PmIW=?@o0:6vJ-(Qk&-N[O[[|o.(oAWo');
define('SECURE_AUTH_SALT', 'ue ekjV},mBjA5fM9[xAJ CyIbB<.cdmu/ptJF%K@+#1YON<DBh!X68]0q>1-BDZ');
define('LOGGED_IN_SALT',   ';-C0KO 3Vt&XfKL,lMH~V!yd:fL1NGaBd1%e$GI@ANkH-}>Y#Gs-cV(+,-nHRE$*');
define('NONCE_SALT',       ')#5%6lCm{RV!-TkN2C8q&1PB*b5<u_LwLF@!w{;l`F}Ds=ma.)`^^W3vYjt99/r(');

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