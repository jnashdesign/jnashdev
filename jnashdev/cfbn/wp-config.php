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
define('DB_NAME', 'nupenetw_ss_dbname6c9');

/** MySQL database username */
define('DB_USER', 'nupenetw_ss_d6c9');

/** MySQL database password */
define('DB_PASSWORD', 'h6nvOzQ8u6LY');

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
define('AUTH_KEY', 'JLXjVcsYscpexZ+Q^;(?hZOL}sk|Myc=&S>_*KGFX@_UrBTIfA@Y]E@Nx?VL/rUSCI>z;;Hb=Nomy]Nqb^<WrRfB-sc-sm_s/YDY<UlUWQ@N&Ena&vp!h+dD-eU=?daQ');
define('SECURE_AUTH_KEY', '/-Md&A]L{|X^{GTOaZkXUlNMx_Ob]Mk{EaPhIru?re^k)fgkBYLO]_-OPl!QR[|%_nS{J[pF=-O^qzXj)mXzvfoTRS[OqTCw!dcA|y;zIKiv&%RN-|^s|Pu<SG&BddaD');
define('LOGGED_IN_KEY', 'Tgu+M>f|/Ihm}ZHy%Cl-+Gu=$@](nAjmzpXCf{nI$MdvTL?]pP]Mi]E|+zgY!o$_q$VOcBq(=s/JvMkl+|[lwa/)<TgLw*qu>*EKNgp&W%&g[YstAP)M-!;xM!K_uW()');
define('NONCE_KEY', 'iqv!iQ/xE?/HhS=%OHMpQyV+dr+|iB<GI^vgE!wXl)SFJmI]-TR_%EURkNRL)a/Q&HseS]Va>ra%&ODlvR@*>x-osc}T)P|ea$I?@G^&jKl=Jot%(>+to%T&h$drJt]f');
define('AUTH_SALT', 'IcXvo>OgHbbpRmrTl!dnZ//(sKwvu]sY^a{nBC[^Hsgas-]U}o>WvCUAf?[dg[OIlgEUPeVNjz]i}j{YjpVb^RkxgVgX<HqaI&++pv}Qa@$wi|K!%%I}P/|-cHr=WA?q');
define('SECURE_AUTH_SALT', 'UK=QisS+]WE{AP*e@HOw&kr[nLS]mqA$dqgVDb(E!zukhc;wZq/z>ln-voaFDQK-i&XWusN<f=zq*GpzNDg=Gc]j^^>*orxk)XTaXM-KgMvB}Q=tyC)hXVqb$/P%gTca');
define('LOGGED_IN_SALT', 'wb[Wkdkke^)s/gfogJLfT>jzKCGXeyZ&xEUlNUj;xU$QpCpa$q_?+_kV_-lAzFG)<Oqp*FJ@]g+j%-Ul|JIbeSEk=p?EOWoL?s{Zww^&!Dd<=!Mrlbs]]BNT}|}{b@t_');
define('NONCE_SALT', '+LfdSO>wey+GEJx([y{/rQ>EfqG)}^>zgUldRr=J)jLWVi{vE_-VMSLatK@n@jx_SBz[_(AbnK}}K]KXEoT]={%|KqJcWEEmh}a=VpiBkFidinERpsgo$MqkSxcoL-n]');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_pykc_';

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
