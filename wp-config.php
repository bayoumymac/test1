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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'test1' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'UG@S,nm_2F6D9(_M?{4Gd^:-tGr>~s[a3BJIrIr$5$%lNIf4{-}q{@40Bo5+1TnT' );
define( 'SECURE_AUTH_KEY',  ']#c&a8$THX#JA E|z;XqbR?}EE`E, iI)hw~zd(!|8l*zqobP2#J6X<,q4ICN%RC' );
define( 'LOGGED_IN_KEY',    'nxlL<vgyYIScntIQh[)a|-I^clM,$Qn0+h4_paV,zB(I_K S`u,h78zRV3z!]Ed;' );
define( 'NONCE_KEY',        'ewZ)#PDmqTPTS#Tu_#~Nwz!yk%)yS`Am!aO+KUlJLo<6p.=#rhF3TM$x!{(zz:^^' );
define( 'AUTH_SALT',        '% 96fvd Q_O`%?J7bB>IhY:a)qmOatQEFk?9y0rh2cb$Dpc!%ECa.fKTFfz}/OI_' );
define( 'SECURE_AUTH_SALT', ']r7DQ%4iCf]e#tZicPEP!^kxt!,%th8VGcpBIH@mqwM,|gYv3y@4ro&Ah>I*tb>-' );
define( 'LOGGED_IN_SALT',   'RhrRHf6e1s#kFWtdhEKnbBy=Yp|o*}!fprd+Lumb)Paa(oLzjwK*xT1Tnh!?kZb2' );
define( 'NONCE_SALT',       'zrzrMPHVxT|mb71WlT$|<oyB2!I.F)6V#EW1ApxDv=},u^UiH!2!XiTE([{HX+3W' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_MEMORY_LIMIT', '256M');


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
