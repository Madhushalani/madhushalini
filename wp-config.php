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
define( 'DB_NAME', 'madhushalini_db' );

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
define( 'AUTH_KEY',         '1wo^G<$HT(w:(Fv<gpmf4}RY@#AwCke=~wH72%:$=w*anlN6aqt(:J[tbKBD0C#y' );
define( 'SECURE_AUTH_KEY',  'LQ>R]`8$Z:h~s=eB:#}zt|3n[)KH3>4DG*%SP/WB`4B:=+m$<iM!Qgs_7zo}M$+u' );
define( 'LOGGED_IN_KEY',    '#9C8/(E1LDxJ- D6vdIZjx ,/*~q5LmAB7C,%E3#Ni,zEjE>DO#rauKV:}U4EAWu' );
define( 'NONCE_KEY',        'f}a^g@RP#~S,Eqys q4S/Ja:AK GehZByu!08Ok<k8UR`|A a7^oDBinc]Yo0^PW' );
define( 'AUTH_SALT',        'S/XRu}F;fyvV#GmbG)2B%`xHqOoL~Mdvl> Z.4`9w!Xe!Jpz24%3Ykn_HZ;WN.II' );
define( 'SECURE_AUTH_SALT', 'l$kv`bj!ti~MA*EW-c]A**w+c|}NbL3(k3raU&6%8qDV35*@-HmWWg+#94=9(n%L' );
define( 'LOGGED_IN_SALT',   'sXo/};POZjC-bjQeXNoaHifJ?gNhXSUiR2Mys9T+e^Q`hG){geh%c}nz7|0kGKR=' );
define( 'NONCE_SALT',       '/AwE2!/!jZRY|Eh+y|sB5Im4|,hQ%@id ~oI2Dy($;eAOjj&D2DwSk]bG%}jYn$3' );

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
