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

@ini_set( 'display_errors', 'On' );
define( 'WP_DISABLE_FATAL_ERROR_HANDLER', true ); // 5.2 and later
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_DISPLAY', true );

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_custom_theme' );

/** MySQL database username */
define( 'DB_USER', 'wp_custom_theme' );

/** MySQL database password */
define( 'DB_PASSWORD', '123' );

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
define( 'AUTH_KEY',          '(R)RG,>L7!UQ*_O`0)!R]5o{QISv89o_jb;*rD.,RhdbpcM12XBz$iVdo2Cqt06*' );
define( 'SECURE_AUTH_KEY',   'RQ6%7/MVN2O#+i|NrmZpB%Rg{>Bq#rO4 iG)^mg?[+V,#rPryT|[SB/86*W{n*R}' );
define( 'LOGGED_IN_KEY',     'O;fFT||sL<,UeB4LU7|C<mdZ`Me0;IImhR^BoB[U|f&R;}P!?GB1wR!V %+~#}^s' );
define( 'NONCE_KEY',         '5pAXX/0Z?[x/t_%kDl{5*BcRvDQSqma`l#3eY&6o7Qx?j#it8T48;h|j*>[FJ<IZ' );
define( 'AUTH_SALT',         '-MRXyU)0vR0C]6q*mP#[w|4 @ttK*m?n#Qha9Tr@N>q[}8$9Y@lBDMqNDS&q}5D:' );
define( 'SECURE_AUTH_SALT',  '; <(ye?Jg`]]8CM+m_?.*5lw)9 &9#$>$|ad<Jm~8^QxPH5+R*PN>fFlZI![uB-k' );
define( 'LOGGED_IN_SALT',    '$$GVlL6L6CI%Ga3ygJnyA-bv^re5e9drLLAP$,.3fN/m)3>6Ew^#z8sh]O|Ewn)d' );
define( 'NONCE_SALT',        'w)-CK!Hl4[E]XU~]Wr$gM9y-<  kXW1l(N-i=hHPN&7k)o8j;Koy0/iZ!w>+qwcn' );
define( 'WP_CACHE_KEY_SALT', 'o^K)aQ{W1pYIaSZHO(hB^O*^^:I<[A!GU/@][;>& A7P+LC|rodhsDilev(p;J*Y' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
