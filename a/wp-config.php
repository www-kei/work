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
define('DB_NAME', 'wkaend');

/** MySQL database username */
define('DB_USER', 'wkaend');

/** MySQL database password */
define('DB_PASSWORD', 'vwkaendfly12');

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
define('AUTH_KEY',         'w8z!jD}*+}+=j6ZO+}]gDg}H^(]j_`(Af,D+U}yjr],@.pc}A9E9UY<jgP->Q|z ');
define('SECURE_AUTH_KEY',  '6y0Ecy2R2thMbsTRT}5gc?thxC?`x^K? =S] Sq=u,kSMr;@xeI*2;nrN9OgE45.');
define('LOGGED_IN_KEY',    '>r2,1ax)B+DOY`_0WRiL=19w,&JZhV%hw&:S$A:dpcd&c#o6}Q<?k&2;x]AgV{-E');
define('NONCE_KEY',        ':gP&[b-/fAs,<=:]Tu(2<3cqLN7yhxzg#Q|HL{g[_jtdv<gCjDq)C=H,&N^PtagX');
define('AUTH_SALT',        ':-4MY-en*l1vc#l:YRUPaOypEt=eA+w^xtYH#5[Ba}3Or3Ii}E?M,,/<@fEA`I.~');
define('SECURE_AUTH_SALT', 'TpZ^x3$F <Arr%=~H%Y&Uv^x9~7(.$j`ScE&o5jP1Yrq^9GKN;6DdQVV{wI4c8qQ');
define('LOGGED_IN_SALT',   'mb[zdE6XbZb n2|$*mARU4O-m5>7|>Y*ckV!PT^-cs7M^{isr;A!Yx.Q-!;h!/6d');
define('NONCE_SALT',       ';rt_5$%sEN6 Qf{NRRvFW*L#f~sfZNdDu/W@<EAH<}?To@{e:]b;T1_qNsAeBGdQ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_a_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
