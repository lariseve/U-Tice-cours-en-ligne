<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'cours_en_ligne' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'KdQ%b^|tHoL,q=^:|+rLe.cfY-O0y,sO;FZJV?cJNd>NKJMr|yZFU1Qt;WgZRfNq' );
define( 'SECURE_AUTH_KEY',  ' VxLsL8bs*<dY>2XOj$nv <2p7b]w>Bkex5WCByZ#8XctTCWK:bVQeI72g&&hso0' );
define( 'LOGGED_IN_KEY',    'G#2xGw.Q2Q1+X_| :fdLP9_YSn/v:X*pIB),f SeeAp%(p2>K/c`weL#^y6{xc9U' );
define( 'NONCE_KEY',        'R/}4|!4UAyt)C{S5LV|iI1De5H8[bkorJGrB9{Xvi@)azp?=.>VUx]N]^*<z%c0[' );
define( 'AUTH_SALT',        '341(^y|&c>;S||GZ7e{0k@NRL/qG1%hI~c jKV8%k.v<(pI&aZ0yjPrp{GwrR}%v' );
define( 'SECURE_AUTH_SALT', 'Fz$TMKIVI,9u#|Q.TKuN-Z4TynPQI o5fquh${y5h%|jUM^BWRsH*#Q:-Ylx4{~n' );
define( 'LOGGED_IN_SALT',   '!x4>/KtcI-l ^J) MWDgpNP/);HdXHw[k(xdRv^_}c,>V.w!y(v,_O{bQk-X&>u ' );
define( 'NONCE_SALT',       '+QD4,06.i:u!]kj>e4*Hs/rh@5eoLHvsT99p8zm4lkrBkTA[)(FZo}L0DD7.`xnh' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
