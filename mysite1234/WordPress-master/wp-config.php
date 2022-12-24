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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'shop5' );

/** Database username */
define( 'DB_USER', 'Admin' );

/** Database password */
define( 'DB_PASSWORD', 'giveme5' );

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
define( 'AUTH_KEY',         'lj3)$wl&}*{5ELI?+g,N*ok7Uv|P70<~s&OE<|hPM6KJgZ@rprA-DH#@W_&K4Ju`' );
define( 'SECURE_AUTH_KEY',  'PO),o/KM6*PLeW%J9ZCb4w%8pyp^R-+P|jX/N&8v2O_? ^K`{<w![c6p1^uu=gyV' );
define( 'LOGGED_IN_KEY',    '<^OB1u;bdM2H_eWJagS.Yk3rm({Pf0CximoR8>q*]xec?axD@BEscayL*6F mI*w' );
define( 'NONCE_KEY',        ']!tHFe=nr]1<]];_fe1y*%Eah#dfP|XG`mW(-c.fn t%iMYd,4,L.4XeHUnqBKbf' );
define( 'AUTH_SALT',        'L-SG1Z?OaV[:gxCRAB}+`zA-m#W.JJe%O}(2I^HB&VTv[]cN ?1oX3}v/4Al&-B-' );
define( 'SECURE_AUTH_SALT', '[;:*n6pZa;4d7R{^BY@)A=rly`A*M-_)TuU&bp{j}OCyk:AR~qpNbI}w$a/nk5=9' );
define( 'LOGGED_IN_SALT',   ',^U-jm9u!1)zaWNJ(h*<f[+|+JpE +G%{ pSKA49mgR})z^t]{&DiPMce5DTm%HG' );
define( 'NONCE_SALT',       '2}]Ep4krp*AoF~j|J3cvZ6)fuuA#ngsvt<f|:~k!jMi5Tjb{eEPoXHLRSaBh7!;+' );

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
