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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpressuser' );

/** MySQL database password */
define( 'DB_PASSWORD', '$tory2Tell' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '}cwFN XJ>c6QPVyLfO{?(``D=|mlq)d$b9=Jgd0YSLg&f{ryI+Dk!3D%iW-&|l6#');
define('SECURE_AUTH_KEY',  'biOEGMY7 ]/ afu-:23-G-V-Y)]ZFn,,HC9%R*k3hD<)arz#z(pu^{QM2BPT(SAY');
define('LOGGED_IN_KEY',    'WZ$`L|]d2]fQ9XawmgVh*<-?@k9271)i6<aTSE>6tEH~-9M);E-|*+|[(LA&`Ad&');
define('NONCE_KEY',        '<-#9=s-oVwUPef%!(Z2+?[f>Y)MYu Oi9!XdF8h51xBwzlM&DdpjFmdzd#<TE*>F');
define('AUTH_SALT',        'xR$[zYy,Q+WWWc/ae;QA~RN/ j[MM?P;;(-SC1-wt./!NMl:89H>]m;zu,Z<vNEi');
define('SECURE_AUTH_SALT', '>)%eA8*mnj!&|?lWz}=!DLV+0X=zWl:78AC/3JVrUJ_gelJnJ~<1Oo ZM`b!)k49');
define('LOGGED_IN_SALT',   'uF?U,;hUvyZ`?6M466m>N^}kdTjge7`+HvJ;cS[Oa,`W,v/70,dpck/2z*-Q$n7-');
define('NONCE_SALT',       'XX1eDXx+R$,VOW^Mt}.=EO/gJo9Mw2 %sYq*qmbl*X-g8O-;YkiWTW7>0bh#,>7=');

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
