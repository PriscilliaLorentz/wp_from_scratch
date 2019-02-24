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
define('DB_NAME', 'wptemplate');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '_m.9F8|VqhXu2yD+y{$]J6g%5IKu2^m2|K0-6O%Y-eZo?#x3cXk43V9(5O>KUkEl');
define('SECURE_AUTH_KEY',  'B:bAa}Uq+:`>S<I 6b|?fwUL|J[>hzCLl,?dBJ85~77NZ6=H G,7AfiyUMJSOgY9');
define('LOGGED_IN_KEY',    'Zc~I<ywUz6_p.c@W=BCUo?[[Ek8}[Ew+@QL-%`0F2iw?2]9**sb_k[K]J;0jE1[8');
define('NONCE_KEY',        'be>8*2[+jJUb]122VmR4>s<{+ O0W_#V}~-tH}{!EwV:jiYKGiX$8_ff<m}=/x#n');
define('AUTH_SALT',        'NV8W `Juu&4A.:L{}H)Cy<oE+c2!&qh!/yvE4#.e50LFp$:v][w0n$KdMw8Xg_yd');
define('SECURE_AUTH_SALT', '&[n6mIl,PYh`hh9oRR.JBh1 rq&yq3|+RRC]+|:1&L-%,I9(iGY]2qN0HLwsbs9}');
define('LOGGED_IN_SALT',   'gYMpsfqG^X<?Mw NC7fFK(ej}L)xgu2W:FoSYblw-0Z*S:A%,kk-d1{7tvN{z%ou');
define('NONCE_SALT',       '!1Y#SN:E-f~hZ!l}8,A(/,jE5e-h}lK8fcLY<yP*MX]cXr]$,f{gI+7y9%/yRD}}');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'skt_';

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