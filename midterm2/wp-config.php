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
define( 'DB_NAME', 'midterm2' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '_A/|Lm8[X#nogxn5un;r/t:i-*1HZD{{qY?UI_@+P&0gr<o>JbrR<Hg8Gfw<Oq<3' );
define( 'SECURE_AUTH_KEY',  'maN$-o;AT4ba(aR(&DQG]%KNREG3Ut4Kr)+bqxukc9048hFX)~qi~qjHnq|:=,@<' );
define( 'LOGGED_IN_KEY',    'G{VZ=`8U@I_iRqL%O+yi>hMjP;I.Va}*{7}h9[%$p^LE$*`U`u 1jyO9W,:m4wZ$' );
define( 'NONCE_KEY',        'gKiw*.y-OXmzu9EfQ6+F6[QStkM:&~l/niK8}4+/$;k7a1Yij/,#Q8<KTG{Z?:=`' );
define( 'AUTH_SALT',        '14mC@Jy8pyam_1fu,)Zzm>fs>^M-GcTgiOLdv4z|3KEZ+% .bh8=/#Z^Bx;9tZ+D' );
define( 'SECURE_AUTH_SALT', '>/Y.!wx;!_H==!94rb6^OuK@5L`YXANV#R:/a_[9eGbgql3DjNI$J[I}X^|<A9Z<' );
define( 'LOGGED_IN_SALT',   '?!?QxqOd_hJuJZUt6B/oVO%Re~NjHQWu~k|B(ZJ?lh|,K_k48po.xdfB!A-l/:kV' );
define( 'NONCE_SALT',       'dMmB32Wch^vdZL0%xN{FP8La@j}Y6TXW*mj[VU+QzHGN][6MqsF^)2{xv k~ZFF*' );

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
