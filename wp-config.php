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
define( 'WP_SITEURL', 'http://www4.boardmax.com.php56-3.dfw3-2.websitetestlink.com/' );
define( 'WP_HOME', WP_SITEURL );
define( 'DISALLOW_FILE_MODS', true );
define( 'DISALLOW_FILE_EDIT', true );

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', '1034648_bm_wordpress');

/** MySQL database username */
define('DB_USER', '1034648_bm_wp');

/** MySQL database password */
define('DB_PASSWORD', 'agr5sP5ve2L3yNnd');

/** MySQL hostname */
define('DB_HOST', 'mariadb-160.wc2.dfw3.stabletransit.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '@v$o[mV &A.G/.{tcwc/}n]lk:9{H/oyjGf6Y@wt`,=h?#.Oc;p5}nca(PeWXs<5');
define('SECURE_AUTH_KEY',  '%cc_I?(`R:r,@9(#1Lb&7VfSYmW6?,/eRHyBKmlRr{_.0V8gH[NCQ.UY*z3XF=j:');
define('LOGGED_IN_KEY',    '- Ca[{e%ozR=fK)sY/{Tm{Mi2,8|MAtLn5*o3*rV2d8nY`=l[qj>N^&N^SgFkWCI');
define('NONCE_KEY',        'mJ3TymB#oTsUTl*mClR;xUZ~R91Ybb,,y(;Gy5lv,//NO=5_v}6?a7y2A+rsjOlc');
define('AUTH_SALT',        'WsCHQfoGyie B2Z<Q{;h+Da;,qJaHOYF/HS4!9CXtRt~@i5];{y]3=u~A/I^eDcL');
define('SECURE_AUTH_SALT', 'LgH/QT74rtFS_NM*Q^AZsb$kk@><TS0=fD,Dj]a{b3n4NWB2/AK,:umXFxSp+ va');
define('LOGGED_IN_SALT',   '*N_]]N,%P$dv@fqGr`0HyW0~#85IE^/^.Vu%A;DMC8sJGam*Vu`+<~EU1=J/Jq%o');
define('NONCE_SALT',       '5+^^M;{)z9^QtvsOJGJe;^.pT*VTO_dm/9G.,MuQA~{]0]c-Vk:1m%NtuHSe[2*X');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
