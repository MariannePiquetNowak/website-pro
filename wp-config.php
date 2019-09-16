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
// define( 'DB_NAME', 'mariannetimarian' );
define( 'DB_NAME', 'marianne' );

// Local : marianne

/** Utilisateur de la base de données MySQL. */
// define( 'DB_USER', 'mariannetimarian' );
define( 'DB_USER', 'marianne' );

// Local : idem

/** Mot de passe de la base de données MySQL. */
// define( 'DB_PASSWORD', 'Cityhunter77170' );
define( 'DB_PASSWORD', 'marianne' );

// Local : idem

/** Adresse de l’hébergement MySQL. */
// define( 'DB_HOST', 'mariannetimarian.mysql.db' );
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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ' lSO4|x`A:Bt8<5DkwbjUR.j*+K<?.C8i6+gU/gm`IqeR[W(e&}|v>6~bVuxPjw6');
define('SECURE_AUTH_KEY',  '|u5n9C`)=&6qx#{-[f&!^)v;qI8;Sax!x 2Gdj.e|nRi4rLu]@I-=hKW@kd5T-Hm');
define('LOGGED_IN_KEY',    'Qiy%Y@(`=BR<,/>V6G~o,H<^QS%+]@A)kCC#nJoO(.l)F+>e;SC&77-&(N,[)wOK');
define('NONCE_KEY',        'h}I)Zqm*HO5A->6/^t-+x?p-!X4-M!US/Fw<#Z$S%:~Bjowany(Uu]7$w|+Xl|f#');
define('AUTH_SALT',        'hI9k;0KEX7I=lR8f{Oe<R[yUDx#,21#mk6%]!z/|5Q!)f4i;L!hA-!;+kF*c@C(!');
define('SECURE_AUTH_SALT', '6#;KyPynMUQh=-3FDK-ZgE+_&*$9(Up)B.S&Xlh?uv-eTLM$$]wBk{-Y j(KZhm=');
define('LOGGED_IN_SALT',   'IT3E.NEKdF8wPbnc:=3.%b@vaCRao7kA_1EP--.P[E50^=AiN<HDW2F~+DGbP%zm');
define('NONCE_SALT',       'h@$MH>;+nb%865ff4. 2h-.TTOY#pxFs:on+PU|=JZui^B8x2+Zr.h~Kx8T@N-Wa');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

// J'indique à WP l'url du nouveau dossier "wp-content"
// define( 'WP_CONTENT_URL', 'http://www.marianne-piquet-nowak.fr/content/' );
define( 'WP_CONTENT_URL', 'http://localhost/projets-perso/website-pro/content/' );

// localhost/projets-perso/website-pro/content
// J'indique à WP le chemin du nouveau dossier "wp-content"
define( 'WP_CONTENT_DIR', dirname(__FILE__) . '/content' );

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
// Si j'active le WP_DEBUG, c'est que je suis en développement
define('WP_DEBUG', true);

// Mémoire allouée à 64Mo pour problème page blanche

define ( 'WP_MEMORY_LIMIT' , '64M' ) ;

// Si le debug est à true, c'est que je suis en développement
if (WP_DEBUG) {

  // Du coup je demande certaines choses à WP...

  // Je demande à WP de me créer un fichier de log d'erreurs
  define( 'WP_DEBUG_LOG', true );

  // Je demande à WP de m'afficher les messages d'erreurs
  define( 'WP_DEBUG_DISPLAY', true );

  // Désactivation totale des versions de contenus
  define( 'WP_POST_REVISIONS', false );

  // Je ne souhaite pas utiliser la corbeille
  define('EMPTY_TRASH_DAYS', 0 );

} else {

  // Sinon c'est que je suis en prod...

  // Je désactive l'installation de thème et de plugins
  define('DISALLOW_FILE_MODS',true);

  // Je limite le nombre de version à 5
  define( 'WP_POST_REVISIONS', 5 );

  // Les contenus restent 15 jours dans la corbeille avant d'être définitivement supprimés
  define('EMPTY_TRASH_DAYS', 15 );
}

// J'ordonne à WordPress d'utiliser la méthode "simple"/"classique" pour
// manipuler les fichiers.
// Pas besoin de FTP ni de SSH, ma machine est bien configurée & sécurisée !
define('FS_METHOD', 'direct');

// Je désactive l'éditeur embarqué.
// 1 - Je n'en ai pas besoin, moi j'ai VSCODE !
// 2 - Mieux vaut pas que Mme Michu touche aux fichiers PHP !
define('DISALLOW_FILE_EDIT',true);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');

// FTP
define('FTP_USER', 'mariannetimarian');
define('FTP_PASS', 'J9yMFykJeuAT');
define('FTP_HOST', 'ftp.cluster020.hosting.ovh.net');
define('FTP_SSL', false);

