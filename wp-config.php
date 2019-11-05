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
define( 'DB_NAME', 'merjenboyag' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '%[5fLW_B:C=Pb;u&v<^6LJ` 4qM{x?4F(D{WTE$u%W*PH:6HWD|a>Yjg&~T4a|$m' );
define( 'SECURE_AUTH_KEY',  'C,@.B(u.n[K8_+o*82~=%XAc+ihW@pnw8@Iu r>*D9wnP4}9H(J2R4^P1ve%OdLQ' );
define( 'LOGGED_IN_KEY',    '8C_^)R7)-dzT@{*)[vY}H(4GWjI3YlD4aH}ew?[)`o6|zs?k.9KG4t(nU(V64awe' );
define( 'NONCE_KEY',        ';We?l)a3*Sv2)E{a2/h@-(/J{&3jC}*?~GL)Zly:?qT$M2mBg/*H!0M`g^50asob' );
define( 'AUTH_SALT',        'th~+>o4CgC92BMK@jo3LA2>p^Y.D7LgwCsM`&a.+xW1l:=>#~=K303Kv$SQ/Hwkz' );
define( 'SECURE_AUTH_SALT', 'ejB]Vs<s6$*zD$T%r6IG7Q]6i=$@in{&`$TfQDXf6_+o*=>,Za*h%q[QU3?l+9bu' );
define( 'LOGGED_IN_SALT',   'yIE y^QAT4Gsuy2zA}]5n<+CG^UyvE-W5k7jzX`z<{G}K#U-&/w).BY;oD8V9PGN' );
define( 'NONCE_SALT',       'RBP4L&+0m0Ba&pMckkDILkh*p8Lg|~v}xj U<>op*uwE21t5[ez0mb>.C_O(_bOw' );

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
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
