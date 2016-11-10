<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa user o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações
// com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'wp_rcam');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Zh%3Ictpe/j#<ZJ Z]u{6#eLIl 0+:&#QYPYO<V$At4HRXaP~#T.OIFmxT@F*-4 ');
define('SECURE_AUTH_KEY',  '8(n9&u*Yo>?K>UNYAGye5tPR@n0;&VVe7!j_Ly|AjipbOiwQG1$76:ux>nW,w(.-');
define('LOGGED_IN_KEY',    'uoXn7Y&xCKI*1[275^E? i5&[%r>_Cc7$)`^AaCmi~;2aK:1eO2kgGroKvs$Iq (');
define('NONCE_KEY',        '>*@=2!G_KzX@@[B-c7?|B.g`j3W4o=!a<iEF$hp{RqmL8t<f!DcweeYDT!#LBSzl');
define('AUTH_SALT',        '?%~qN)D,mox]S]0p9iKM;_Jva]^Sm65=9NRe0Ojta1{^llETDCO3L$fQ6q)g5FZ(');
define('SECURE_AUTH_SALT', 'KlcF7/Uh8rl6|9=!|}i#(9B&,/0t 9Q5/[x0:dII)e|AlakZQGB_[E[{ejqGe}Qn');
define('LOGGED_IN_SALT',   '2^_U7GF_}CwfSAT+,(Tvs`L@QZ%?*=o6:UBK=3Qk{b3G/8mzM?w8m~K9wGmef[%C');
define('NONCE_SALT',       'Jq( j%-?FQe *I /B)hD*]nr-@Y9k]k$9?_t{4,MoPxXRbw0(2ETPeFvL``u2DuQ');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * para cada um um único prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
