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
define('DB_NAME', 'learning_wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '=tK9O>2EJLJ7C >qPvq(K[K[b4jVEEy91Y~Zt@#@ ^M(O52@V=cN&1LrQ? 8%!bO');
define('SECURE_AUTH_KEY',  '*:h+wk(1|,YO}#<o^:>}lEv.@zvDu7?sO|>-]7|!4?QEN,tG}mmk&|a^q]K|KN-[');
define('LOGGED_IN_KEY',    '$]VXP:,K:YBsRA[hn9G{..y?c[=$Bo|4$)uhwu*howD@>>4h2~(Pk-rJg)|S.rnd');
define('NONCE_KEY',        '+o.CElo2B@P@s/Rf|okWR-u1$!&1ca}LST|{Sw6%%n@FdM6?NOTD|~P$Cd9u^M`q');
define('AUTH_SALT',        'Ctidua-`J%C>r}nI@A}m+ RGZW-3PND/je|1c2+x1$3b$9/w(K6BkOA+I2^+dB|o');
define('SECURE_AUTH_SALT', 's>-I9c e)5,s$VZTqf_4G3qn=~oTY!Yh++7etXdQKfqa*;`TTW?mG__|f+0.OX!]');
define('LOGGED_IN_SALT',   'V|h*y!kDP_OX+-|Xs/nab3szvONO{EXyd5jVssw&3#86%YhP^2FM3)J^EvJFRlb|');
define('NONCE_SALT',       ' 65uvI_.x4Bc,RcF;KZCB%]8w 72PiD5*Vv*e}22b}^;GGV@pB_OKZvpKR3#c71[');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
