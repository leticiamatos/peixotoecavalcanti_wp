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
define('DB_NAME', 'Wp173094');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'Wp173094');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '0I*Jt&e5');

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
define('AUTH_KEY',         'ge!GXPo%W5Y pbx2M.]*-SLfOKKE+#a3)g0fX<%f+z2:>]}KI1-s6<i>-jGSKIsC');
define('SECURE_AUTH_KEY',  '1I-vdE.g4P+deX-(uoMSs;qJ,X:?{$sPx6Zp>^#_^5>Vy-;|4iV|I=[eQBA.^+20');
define('LOGGED_IN_KEY',    '!&}$.3cD}iw@.mNU{4kr;`qiEpTa!0B8V<k|+a?yq+Z`*!kVYqS$0+CkjGC;{OA0');
define('NONCE_KEY',        'R@}R@|hNZxN)}uaBT[j)hLH<CO=z|XFhY?%1_.p:A#86p^|dNHF_i?}v}fY|6m1!');
define('AUTH_SALT',        'hYTN**pCab`VFOWU5p73WOy >].J&~!2U!AqA5.ho+|Xm9->Mo22XFpzC<[+w,t$');
define('SECURE_AUTH_SALT', '5cmft(+ 0et*e9EiH_0:.`6Ux_apdtU3NKXfSIxU|_X|&4ts&|Km3iksZ)Ce=w#.');
define('LOGGED_IN_SALT',   'BId##sDI:<u.XWWvve8RQb.y?sGVDAV*}//cp]hB3^Eb,)SW^Y GJktAEI6lxb}t');
define('NONCE_SALT',       '@,H;{#~0qtpXDs19`7ClYx^?N-C-2iRvdDa=>+-9m8GpF9_s%3p{(](jwvt1~ndj');

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
