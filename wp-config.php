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
define('DB_NAME', 'lik_new');

/** Имя пользователя MySQL */
define('DB_USER', '045352814_new');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'qwerty');

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
define('AUTH_KEY',         ']-A:d>i7<9-D;y6i*?wP_/`z|J^2)hom-4%<lr`Ck;s|B)xv^H-F+gcq}u,&O%u<');
define('SECURE_AUTH_KEY',  'xGcIw%FGrEF;A/h.p,xPz<G{>(p6F:wbV1vibK@+M#415s*U4$%U|6hCAm?Cz%v9');
define('LOGGED_IN_KEY',    '-Sa*Lvr+XLD4ei25YedZI6!V+&},8.h&&GLGL8;AQB8a!*@P:0du1EnFW o$m2yG');
define('NONCE_KEY',        '|UHeKK]FHoD+@HjAdC3B0t=,dVbHXByuAXp0:#=-~Cr%?k,SG PQ!?}H>=Ok6ghf');
define('AUTH_SALT',        'y8ZLewt-+5BPsq1e|`jSB|Vmz+K=/QnmWs$_LQ}wI<ZnZYW~L5r+~H3r|BJtb;QT');
define('SECURE_AUTH_SALT', 'F]t,vh9pzC3BrqFk]nB#;E0&C3:e{}ig*f~BEXN}QL>Iy)-KbY+zEZ3J^re8o0}M');
define('LOGGED_IN_SALT',   '[p{GE+{x5l3F?(>E-b6@@n|,GqPwx+tR(mx1Tduq|rV]uL(izQMiH@A2tS|Of(=e');
define('NONCE_SALT',       'gxO--xRtL(Vdc(~YOb=Z3}X?w7Zc:dGi-vjLGp#|o&X3gz@-)}g@sU+[TFaa!TXc');

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
