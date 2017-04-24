<?php
/**
 * Основные функции
 * Created by PhpStorm.
 * Date: 17.04.2017
 * Time: 12:45
 */

/**
 * Подключаем соответсвующую функцию (экшн)
 * @param object $smarty объект шаблонизатора
 * @param string $controllerName название контроллера
 * @param string $actionName название экшена
 */
function loadPage ($smarty, $controllerName, $actionName = 'index')
{
//    echo PathPrefix . $controllerName . PathPostfix;
    require_once PathPrefix . $controllerName . PathPostfix;

    $function = $actionName . 'Action';
    $function($smarty);
}

/**
 * Загрузка шаблона
 * @param object $smarty объект шаблонизатора
 * @param string $templateName название файла шаблона
 */
function loadTemplate ($smarty, $templateName)
{
    $smarty->display($templateName . TemplatePostfix);
}

/**
 * Функция отладки. Останавливает работу программы выводя значение переменной $var
 * @param variant $var переменная для вывода ее на страницу
 * @param int $die 1 - останавливает скрипт, 0 - не останавливает скрипт
 */
function d ($var = null, $die = 1)
{
    echo 'Debug: <br><pre>';
    print_r($var);
    echo '</pre>';

    if ($die) die;
}

function redirect($url)
{
    if (!$url) $url = '/';
    header("Location: $url");
    exit();
}