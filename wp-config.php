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
define( 'DB_NAME', 'yadel' );

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
define( 'AUTH_KEY',         'B!l>$08+}$@813gh@_`!nqDm,H<+W5:cPGq&6JJk-o`+Y1A8wOa>V<+qvwpCA]gO' );
define( 'SECURE_AUTH_KEY',  '{d34!rfq:/~u3<^<SIrT,<Dy=`5ZOH!|P&8N?48|l74aq.:UAb_{RZyx[O/t_W:U' );
define( 'LOGGED_IN_KEY',    '{jJ)uX@=u/? jPN;g4C,+@aP5$ue_=|8e8-i(4grN6+yJW$?(jpic9,,[vx9P~C&' );
define( 'NONCE_KEY',        '9Km{K;BY(2ZskX0y3Mp8@]d #%Tf~?$X#RzUQ{3c9`:q=<:5X<:AEakB!^XVUM]$' );
define( 'AUTH_SALT',        'a|4s`]CGba@k?b(z_gv(,7@.qv(~N<lgp}zTSz9oR#1_f2m[O{{:nHQaat5j[{@d' );
define( 'SECURE_AUTH_SALT', '0Pb+F;n1X@>t0kQN7Kx!}r.M.-~Vq#4?8YB])ke)#Y++ne.}w1zG2LJ*P*,lW~>p' );
define( 'LOGGED_IN_SALT',   'k} G6lR5rS7RL!g;2)%gJtygbl|a]P]=$Q1;mI{^oI=+0II)JUo_*6@=#95xphR<' );
define( 'NONCE_SALT',       '3hlOaC:=sTr_E%%#hPI<yTM[*^/UA.e%+`X5mX@0JiFk*q:(%QkA+v><H*2`U]Y9' );

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
