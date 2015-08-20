<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'wp_2015');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'peixotoecavalcan');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'P&Cmysql2015');

/** nome do host do MySQL */
define('DB_HOST', 'mysql11.redehost.com.br');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'fIa|{9NI+r4}PaV eBE1O,aFy*^K-B0Pgy4=+[!&6p[dt)>O|&[6Lq_CHP6]#Y_z');
define('SECURE_AUTH_KEY',  'K~2*o[DcN1@JNo_8=oz(JKM:v=Zzl,8|;;Q Vf|jlazd<k1EF7F|C:2rs<8Kms=f');
define('LOGGED_IN_KEY',    'Sz)k[2a{<9ksYFyX+rBrvys8&[Q>~3[hl{i]DEkhNv*VZEyRS|>.K$:x&K}?)X]_');
define('NONCE_KEY',        'k!@m9:jUrOarwc@|cq>j  m,eech-61,myYk{3Z=Dz`|WqpFcSD[PkTpwy2dxO!G');
define('AUTH_SALT',        '}Nnt&%Ftp)K+[+$=f|55;i&cAPHsE2|z9$1.*=o^bas_jD,Zg7ytarww(/8mm@#t');
define('SECURE_AUTH_SALT', '8Q /uy5#`;Aa(!LPnZS|[ g3`CFzReI=y$yxmlvbB]Fw#<[H2lO=(<uYGh]~VIc$');
define('LOGGED_IN_SALT',   'w81b m#j|v;FUMMLq_@<21lP65)=-~4dMfL4UuODr}r0G_Ml&>)I&]BWKJg&bQuk');
define('NONCE_SALT',       ')4>kR;TwV<^{*T7mb5:HYu|EIpW -|C?O4={/gCDyM,A98!6(GL#n.Y@F0wgwo|-');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
