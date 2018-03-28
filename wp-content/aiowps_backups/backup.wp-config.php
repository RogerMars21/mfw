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
define('DB_NAME', 'wordpress');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'utilisateur');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'mot de passe');

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
define('AUTH_KEY',         'j8qT/(ls*Ev>9w,VU=U#Wo|#4}{w|}gpx1,D%Y]@ sDL1`SEkR%zSj~AJ0hA>a18');
define('SECURE_AUTH_KEY',  '%dbNN6F3EFyFcytz2?FU~1f*[bDh@Yk3&h`,D@ckpM!%Vf(cOnOcW;qn=3LfWF(4');
define('LOGGED_IN_KEY',    '4=-XbyCrNEgmox42:ro:o~ZSvdr/DwH#R>v|Y^fwOjq!7WPa:qRQWm$#A[GQ(;I{');
define('NONCE_KEY',        'DzicX)ip@KOr<~$]~nl&>I, G*`JV&:;N^]]RAZ,8CHq/+Y}NNp_BMx}|uYTD]d1');
define('AUTH_SALT',        '8:)lb1sOVX~pioDnKC_J!ml,oX;+zt.}4;%I<m~Fy@D8D-HP:d0%&CXg)LS%@k+t');
define('SECURE_AUTH_SALT', 'bppRfVr-`MIi2[CFZnl4O1F;7DL|MQvc%kh|Y2{XB8&ElFRs<G$f8(] X.+YVw9+');
define('LOGGED_IN_SALT',   'gg]MGu9;s?VF,S{2ExunE>U|s#A:i9le*dL&Z3m!wSUMmq:v)0t3;r_Y@{]jlqyX');
define('NONCE_SALT',       'S(Caq]N+#CEe(eh$-ryJNa-xgGXG[f~Sf?XV wRXCl|[/YP22-fiYuhYn0yQ&c2n');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'hb_';

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