<?php
/**
 * @package type_razmecheniya
 */
/*
Plugin Name: Типы размещения в отелях
Plugin URI: http://dervishtravel.az
Description: Плагин создает типы размещения для отелей, формирует цену для номеров, добавляет в поиск необходимые сведения, создает доп таблицу в БД.
Version: 1.0
Author: Автор решил не назваться
Author URI: http://dervishtravel.az
License: GPLv2 or later
Text Domain: http://dervishtravel.az
*/

/*
Данный плагин специально разработан для сайта http://dervishtravel.az.

Эта программа является свободным программным обеспечением; Вы можете 
изменить его в соответствии с условиями GNU General Public License.

Смотрите GNU General Public License для более подробной информации.
*/


/*Активация, деактивация, удаление плагина*/
register_activation_hook(__FILE__, 'type_razmecheniya_install');
register_deactivation_hook(__FILE__, 'type_razmecheniya_uninstall');
register_uninstall_hook(__FILE__, 'type_razmecheniya_delete');



/*Подключение файлов*/
require __DIR__ . '/type_razmecheniya_functions.php';


/*Добавление скриптов, стилей, ajax*/
add_action('admin_enqueue_scripts', 'type_razmecheniya_scripts_style');
add_action('wp_enqueue_scripts', 'type_razmecheniya_scripts_style');

/*Работа с ajax*/
add_action('wp_ajax_type_razmecheniya', 'wp_ajax_type_razmecheniya');
add_action('wp_ajax_update_type_razmecheniya', 'wp_ajax_update_type_razmecheniya');
add_action('wp_ajax_vibor_otel', 'wp_ajax_vibor_otel');
add_action('wp_ajax_btn_submit_add', 'wp_ajax_btn_submit_add');
add_action('wp_ajax_btn_delnomer', 'wp_ajax_btn_delnomer');
add_action('wp_ajax_start_poisk', 'wp_ajax_start_poisk');

/*Добавление меню в админке*/
add_action('admin_menu', 'type_razmecheniya_add_menu');








?>