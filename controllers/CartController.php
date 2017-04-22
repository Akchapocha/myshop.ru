<?php
/**
 * Контроллер работы с корзиной (/cart/)
 * Created by PhpStorm.
 * Date: 19.04.2017
 * Time: 12:14
 */

/**
 * Подключаем модели
 */
require_once '../models/CategoriesModel.php';
require_once '../models/ProductsModel.php';

/**
 * Добавление товара в корзину
 * @return bool json информация об операции (успех кол-во элементов)
 */
function addtocartAction()
{
    $itemId = isset($_GET['id']) ? intval($_GET['id']) : null;
    if (!$itemId) return false;
    
    $resData = array();

    if (isset($_SESSION['cart']) && array_search($itemId, $_SESSION['cart']) === false){
        $_SESSION['cart'][] = $itemId;
        $resData['cntItems'] = count($_SESSION['cart']);
        $resData['success'] = 1;
    } else {
        $resData['success'] = 0;
    }
    
    echo json_encode($resData);
}

/**
 * Удаление товара из корзины
 * @return bool json информация об операции (успех кол-во элементов)
 */
function removefromcartAction()
{
    $itemId = isset($_GET['id']) ? intval($_GET['id']) : null;
    if (!$itemId) exit();

    $resData = array();
    $key = array_search($itemId, $_SESSION['cart']);
    if ($key !== false){
        unset($_SESSION['cart'][$key]);
        $resData['success'] = 1;
        $resData['cntItems'] = count($_SESSION['cart']);
    } else {
        $resData['success'] = 0;
    }
    echo json_encode($resData);
}

/**
 * Формирование страницы корзины (/cart/)
 * @param $smarty
 */
function indexAction($smarty)
{
    $itemsIds = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();


    $rsCategories = getAllMainCatsWithChildren();
    if (!empty($itemsIds)) {
        $rsProducts = getProductsFromArray($itemsIds);
    } else $rsProducts = 0;


    $smarty->assign('pageTitle', 'Корзина');
    $smarty->assign('rsCategories', $rsCategories);
    $smarty->assign('rsProducts', $rsProducts);

    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'cart');
    loadTemplate($smarty, 'footer');
}