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

if (isset($_SESSION['user'])){
    $smarty->assign('arUser', $_SESSION['user']);
}

/**
 * Инициализируем переменную шаблонизатора количества элементов в корзине
 */
$smarty->assign('cartCntItems', count($_SESSION['cart']));

/**
 * Загружаем необходимую страницу
 */
loadPage($smarty, $controllerName, $actionName);

#4.9 Эксперт PHP: Изменение данных пользователя №2 10.35
