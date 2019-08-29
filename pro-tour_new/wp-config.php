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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'proto165_protourby');

/** Имя пользователя MySQL */
define('DB_USER', 'proto165_admin');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'ZGZQUEv0');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */

define('AUTH_KEY',         'uQv{$U%oXM<c$~FcK.S>oBHiN m]:6:%1,(=Daz[642%<dl`:`Mwfo`9xy,X^7d_');
define('SECURE_AUTH_KEY',  'F7;t|OZ~q[+?ss_*!2Q,+8BSul{9$Y5mqz[GzXL8Lu9+dT)aVMre0ovIQ!&RA1G%');
define('LOGGED_IN_KEY',    'n*6`Jf,xwf XW:9Niv3^A#HY,j}?kSmdRaT?>G);Jb)KEVD/39DGcv40k&m=izTn');
define('NONCE_KEY',        'jyEimyKcR*vOD@c>&+#nwp90xU} i1y1^/xsIPdf,QBuV&ksVK<[qNE3f 6FB?` ');
define('AUTH_SALT',        '/6~tesD7{>vNdtELz5QY|~wO.;V2l, }etu? A@gGLh[pw$WfGGOiQJeL0oej;<d');
define('SECURE_AUTH_SALT', 'Dw!15P@$DFYSQ&dj8&M|>6H$br3&g3xGkPmp+<1Av-[R n>3ra|92D%FO*Gla%O7');
define('LOGGED_IN_SALT',   '-U,) .3_=>a_UYn-&89 :V2+*KC$bRcb#X{;)Q>[9v/zS?)|QOYW-j!~+-!o=mR-');
define('NONCE_SALT',       'R;lms9|w?sHAqRoXrXCo!gG&=eZ U`Frxo,5>[K(*4,AM,_/,,=d#7{[1,z*-lt=');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
