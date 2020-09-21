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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define('AUTH_KEY',         'bLnwC1fJuqfNRhI8H7krrSPUemiEC9DyXXqVFOo4MtMMhIDbY5SWCR1NtksuRctY21VVDGrOrl48VbXqbkA1FQ==');
define('SECURE_AUTH_KEY',  'W1/rmDdE4qQhxq2V2QW+6Nfi7uL9yw/rF+eKgCQvo9cYYOwnRXdnjby0B1BzC7O1XaV/QmfUN/KciF30X3LJMA==');
define('LOGGED_IN_KEY',    'Dm3W1pUFW6I335PRpj1uNDvU1Jdzf6Nl5OnlmvZtfAovhx+xPu6ixPEfeTBFCLbvUQpKMs9zBD6Nyf+jnxixNw==');
define('NONCE_KEY',        'qTBdytSH9jXkYrhLhrFSvJkWtvk/4dPgQ7sPZqbcafVbjwWVySUgEcFtZclZV56hgNxLiJZmI6bFQAncgrRODA==');
define('AUTH_SALT',        'YL6fITi3yRzLw/NinAvm6uymXz0Cl1eKv9wqtlkHKAxZLsG84nUyMvsRB94CHZOulpUvkFg+tgPohZoAxD3xuQ==');
define('SECURE_AUTH_SALT', 'IIzv2MdB8Gq+0XAB1zZVY8pblgqfNOuExclPESK1fYbObY2WdnEiBXm/GH9tDRdEUJZaYT5vI/qgw7r5uKf9Gg==');
define('LOGGED_IN_SALT',   'RY7T+h36ql9BcxNJMC/SUMrg2ERJKj6UYXNqhCDqWmHa2/8pYgOd5vv0kRkxfNJsoff+PgLZQQ20DeJTnSoIOQ==');
define('NONCE_SALT',       'rbMjn2DMJuhWuVkefVNxXBRt1Hb7pp+wV5XVJDBBP5D6v1z7oXh96Fl7MVsbSJkoPYKehDEiiyeV2zsuHax6xg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
