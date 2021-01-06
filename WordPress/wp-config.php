<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wordpress' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'pMPCNz]?CUBJ=nAf6e~:p}t$Vj~BmIvFLtCI26|I&OUoL7iWj~eIwLz[] xKim`,' );
define( 'SECURE_AUTH_KEY',  '/{n3F#Y;q4!UljCbSs8(=C0khB,wR}1Dz&m5/R?Ly2vqcBm4uRx,$]muAQ5!)FxO' );
define( 'LOGGED_IN_KEY',    '*5;m)-S!o=Sj>eiOL%}J!$#thi)6BY$^gH$)s`m#bZ!d09)|5Y9[h^:>fWN`*`;:' );
define( 'NONCE_KEY',        'U(=G*8k/vb1$k$nc9amhZA9A@[C:B*T]Q]Nw93?v9}vPb6MBIOj0(EKd&N`on(mG' );
define( 'AUTH_SALT',        ',kkCT#AlI`+Q{24MDT+M<t>YmVbE%0iD71)P3T3^;lH2A{;5BIdBMG40yKnOG&-S' );
define( 'SECURE_AUTH_SALT', 'Lgd`TzkFsyzJL>5V$/=3ad I-w+!_C,Db[{K))g+azXWbXSn=`[F9wjV!-5#ZSjT' );
define( 'LOGGED_IN_SALT',   'hfCXLQ3zDV6a4%?2&h$H6sn)aM<$+%4n faP_E&zZ}wx6Zm8-^}!cUqP.f)`zde7' );
define( 'NONCE_SALT',       'e-_CQv*hAG>5ie3&=j71UNoBT6>oo 3tLGXF[U?JK0/lH8A2FcPH[W<,M?J^Q~5/' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
