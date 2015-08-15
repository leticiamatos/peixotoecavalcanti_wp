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
define('DB_NAME', 'wp_peixotoecavalcanti2015');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '@zolfuB7mK5/2|Bxdb}}/])3n/QL+9v=L,ijGK{#o>NF{G250MvS(O)zOP* a vB');
define('SECURE_AUTH_KEY',  'P~pL7xj$y3f0=TmPMU7I{.K9V>Enc+#TvLvs{8%s7|h~c+|TOO&fFuec]6%fY]5.');
define('LOGGED_IN_KEY',    'OC1&BZLDjS=Jh<:{;I ?$~%p2H?+Fl,9{HAclFe7OqO+SRP`~Kn~@xJYKcu0`fko');
define('NONCE_KEY',        'E3jluD(]GF[$y3f?!Jtvp7Hf=S+Qsy#Emq#c0Lkx;(Wdu{T%KW,eltCTf9%>PRVG');
define('AUTH_SALT',        'js,04Wd/2nI-$gI 0K?Cd.# WRLm.@phCM=$/?dHZvFvGfj@N/W BAX/u@;-(O[A');
define('SECURE_AUTH_SALT', 'gKeI1(fc}f~GPKVo[2B|X#|{vJ2fA_-<>`<YB9 _<RZ#~te-hcJcD*cTSJx9CSp=');
define('LOGGED_IN_SALT',   'zH~n:G|`VYWBVhv[s+RNu,^;>,|+cT%/aTBci2xC_S{,jMoo>NUtwb4b@c7w,[Q*');
define('NONCE_SALT',       'el.x+/UY|+6T%9$|}(v_$=G6Z0I(Mw:N|0OI*p.T8T4J]:/Xv}lT`AX0;w>&(iZB');

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
