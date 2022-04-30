<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'ashifa' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'nmLmxO[Vm@v7hb70zR[C<5QG]L:=;oZd`0|g&pZjvv)JQit,4vOe.TRaTvaLh{&s' );
define( 'SECURE_AUTH_KEY',  'L%;|q5fZDw@=_r!PSPdyBTlxTs%UtK>3,a|N_RY&f70CE]4JCn+#7vrib!m8*)GG' );
define( 'LOGGED_IN_KEY',    'Nps?^KV%Xq&N~;8Zk}N1&1V3Ep+|]ZRM`N6rsb=E:;zupsLSW-Wx(!OS:V7qkV}p' );
define( 'NONCE_KEY',        'z*#v0=t-]}Xe)q2%qTG7VkhL>^Y)7?6jXR_tl@i]yg|7zCz)t7%htrT}LbA.]BHS' );
define( 'AUTH_SALT',        'w{_w]HY=o*t4/%~C{}lA}cNRdE`{CJisv0:yq(8j{C;.FNdcMhdAq(amGe6~ E.J' );
define( 'SECURE_AUTH_SALT', '@f%CD7&qI)Rq#|-Ww8}4;=%XiF:NU|`/*ZgCr-) ^{Ii<C*~NWPXdT[~C*pp <)n' );
define( 'LOGGED_IN_SALT',   'o/;8<~B9yTKXF|~<Z03yxB]jo;ztyOuiRF9KEp7[bV-jz.:tONG:*/!o;3Hh B{s' );
define( 'NONCE_SALT',       'i9v I0{S(DORA4JCw;?<R?XlzH*+zW:^E:`EQg >mUak=.-GB@9<S>VmA}%c#tOX' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'ersqd_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
