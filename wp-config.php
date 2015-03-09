<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', '12345678901');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'OkJ`ujG>,F#{ <zV-,<X&V.4R*#bw7irkp<pbB-^Kb$EJP_lN#F;bX1qc](4;(_>');
define('SECURE_AUTH_KEY',  'ra2]W)9!ID`~t|v-$NaqwPgQw|pbH*$VY7:hy*E:w8X6{Br-P-mh6*rw~S[xy=t{');
define('LOGGED_IN_KEY',    'eeAyd[3L5>k,_%HzFdy;Yz7x8Ib)Mohlr}JN;?3Be+{Y/K&>K|W:7Meig+Cb_&+|');
define('NONCE_KEY',        '>W|8owV|@dn|q|+|8qZ*/3^7[T#Iwfc/ 0gv*EiU7(t-lzR+|u$pRFW<jK@U{RK]');
define('AUTH_SALT',        '4li[c`kG5-UN>B!D@nVEr|v(fE2} e8:|-HT1k K4:@8jM=S9KJ}5dgd]$|m/=>f');
define('SECURE_AUTH_SALT', 'D!fWAWFL$Rl|Q9_=yGF>[3gt4aR-_vD^%t AAqV/rZ4yL|Xc]X9cJp45b]+~VlC!');
define('LOGGED_IN_SALT',   '8<pgei#fnc$|<!dU3i%l=/fX.G@b*AR_ptZZ9} O[/B?q6oG3%*ziFhwPM55cp~C');
define('NONCE_SALT',       'Ls7A@~tWqW%-wA5tn,u0z}hb6Q OOE@ciNwzsa=F*ye+MeFG Ss^o=4vHTqb1Wd$');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_test_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
