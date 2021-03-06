<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'sadipin');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'CBRq=c|GC_I=5/lJ#}BzM7B8?a+VLzA}oX]O[*Kf8(z24G%YGpN6G7Bv/Y6e.iB9');
define('SECURE_AUTH_KEY',  'Q.=tC?[CH;pA2@OaC/u|d )j886PSZFsknezVb <Yoq_j%XF|Lbzd2(~E,&v <CC');
define('LOGGED_IN_KEY',    '>aKo!g[hOkttXeykeduEps3[%BF`a<$G>Bq5]BGz7L,l2wUT4[[>S$GbT}?X@[*[');
define('NONCE_KEY',        's#fNqF?%->wqau VECx7qY^t,G-Vk=jZ}2$~&l>tn,PM}iJ*m12Z8J_c(gIB)Ju?');
define('AUTH_SALT',        'Hn?mTv9|)wqK`I?0f=aF+dLgLF*Go%baykOk^4qG]=? O.XCHiI#xF-{B|:}dmCi');
define('SECURE_AUTH_SALT', '{*U;&S$&1F5nZhX%dvO:9C|rj+>kCcxB8_G7@o*cV,O7e;z1I[_-RDl4%fG>&yMR');
define('LOGGED_IN_SALT',   't70>.{#+99O3mGz&:~I/~X5*8B1v[K|Yw/SW6,XAj0KAiBL_a}nX+1MSj?:RgyC1');
define('NONCE_SALT',       'kKXBrUPGnK)g{@uC/Kg UZ)/v)Mcf<r uVvxVzn;Z3Dk@S8[TE+?=kl+pf3[X@vg');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 's_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');