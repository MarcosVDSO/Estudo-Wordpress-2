<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'sala_db' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '?VC2[=%7X~c<$xnc{6b<(j,Uf@~@5h)8imY6%@o?~[[D4^KXItVF}|`%S<*0+|mp' );
define( 'SECURE_AUTH_KEY',  'k/ON0XY&bC9iCI}NL|WK(b@M8f}a~,Qf/<4O)2]id4SJicn<==@pN~6`j_f*@_^$' );
define( 'LOGGED_IN_KEY',    'EK|*hWQQF]!9Cv$}`F(IH/9xWHBb=$IF-,aT1_>s#Zh>;MTpM)p&z?YO2b?]CfM}' );
define( 'NONCE_KEY',        ';pc(XL#g~.:g#n?zH+t+MX7/_|u]6ta<D1a3NyJ]X[-g1_:OX3]rr+@>i2heYm7C' );
define( 'AUTH_SALT',        'nL/Fe]_S{2=X6i~pOaDU!U>CG^_#^p-]!`^>^6.DOgTOw^DGh/_0JrwXKq*ix-1l' );
define( 'SECURE_AUTH_SALT', 'tzdMah!_ZwP9AYPU c(CPJ`@wCJH;ZLV0uG/^&/#+8Q/znqV6.F#@pxf4NL-)*S(' );
define( 'LOGGED_IN_SALT',   'LU`8xfimlZ/A4vqT;FBa:32Uz#eaI)pG<ut_TTr-t#:[SI%fOl+zm%dHKsm4!ADe' );
define( 'NONCE_SALT',       '%i15/`vDgTlvSn:[X4FL:XfG^7 yh:vX,vP%I09V(Tk=bPlz5trcM$E!?9 p>I+j' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
