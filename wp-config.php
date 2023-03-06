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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Petalon' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         ')(4de483Vf&7ck&~3^bSE6~<-7Lr]XmII<bK~=Vx2dks0.txePf&#o[!w/T: URx' );
define( 'SECURE_AUTH_KEY',  '(yU?F_$fz9/aE:y]e:8=C,q=9X<[&s,;UjpTO0m*4xVAR(]+V5,Bb[A,/]qefPWf' );
define( 'LOGGED_IN_KEY',    'Vn?i>#x4C+oh%-!imv!poSm{Y RacX-~GMo&]%wF`+YEG.>sRg28pe7_JMGojh$d' );
define( 'NONCE_KEY',        '>=YJC&]Jz[g[c{uS1s?dZy+C v4rq3fY3VvZ]VJZ&Z/WC1KXY`h{AaC~|[kNhoq=' );
define( 'AUTH_SALT',        '8CqP!.K9Z+s:>Bzbwgo 9GE`@gV+!?DQq.jNpG84K)V`kp~=i|Et@:MSDwT;d[$B' );
define( 'SECURE_AUTH_SALT', 'mZGL`qZX5_&0xr]n3[vWrc#wp$s]SJ /=i=Y-q-%MqM`~58$raAUKeBU01W&Fkvt' );
define( 'LOGGED_IN_SALT',   'r:hic6i|dr2MH5W?n0Oj>}b/.C(dX})PZ*v/(C*|w`aClcj}#ib8S-N{sa <Eu?C' );
define( 'NONCE_SALT',       'Qt2A1NZu7j}i9B+-nh=rmdHc(C0Fj7hX1&]6yo/R5aHq}5i*&nV*ei=W/[?:6bxa' );

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
