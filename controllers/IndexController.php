<?php
/**
 * Контроллер главной страницы
 * Created by PhpStorm.
 * Date: 17.04.2017
 * Time: 11:40
 */

/**
 * Подключаем модели
 */
require_once '../models/CategoriesModel.php';
require_once '../models/ProductsModel.php';

/**
 * Формирование главной страницы сайта
 * @param object $smarty объект шаблонизатора
 */
function indexAction ($smarty)
{
    $rsCategories = getAllMainCatsWithChildren();
    $rsProducts = getLastProducts(16);

    $smarty->assign('pageTitle', 'Главная страница');
    $smarty->assign('rsCategories', $rsCategories);
    $smarty->assign('rsProducts', $rsProducts);

    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'index');
    loadTemplate($smarty, 'footer');
}