<?php
/**
 * Created by PhpStorm.
 * Date: 17.04.2017
 * Time: 11:29
 */

/**
 * Стартуем сесию
 */
session_start();
/**
 * Если в сессии нет массива корзины, создаем его
 */
if (!isset($_SESSION['cart'])){
    $_SESSION['cart'] = array();
}

/**
 * Инициализация настроек
 */
require_once '../config/config.php';
/**
 * Инициализация базы данных
 */
require_once '../config/db.php';
/**
 * Основные функции
 */
require_once '../library/mainFunctions.php';

/**
 * Выбираем контроллер
 */
$controllerName = isset($_GET['controller']) ? ucfirst($_GET['controller']) : 'Index';

/**
 * Выбираем экшн
 */
$actionName = isset($_GET['action']) ? $_GET['action'] : 'index';

/**
 * Инициализируем переменную шаблонизатора количества элементов в корзине
 */
$smarty->assign('cartCntItems', count($_SESSION['cart']));

/**
 * Загружаем необходимую страницу
 */
loadPage($smarty, $controllerName, $actionName);

/**#4.1 Эксперт PHP: Работа с пользователями */