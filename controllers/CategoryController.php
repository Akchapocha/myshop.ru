<?php
/**
 * Контроллер страницы категорий (/category/*)
 * Created by PhpStorm.
 * Date: 18.04.2017
 * Time: 18:26
 */

/**
 * подключаем модели
 */
require_once '../models/CategoriesModel.php';
require_once '../models/ProductsModel.php';

function indexAction($smarty)
{
    $catId = isset($_GET['id']) ? $_GET['id'] : null;
    if ($catId == null) exit();

    

    $rsProducts = null;
    $rsChildCats = null;
    $rsCategory = getCatById($catId);

    if ($rsCategory['parent_id'] == 0){
        $rsChildCats = getChildrenForCat($catId);
    } else {
        $rsProducts = getProductsByCat($catId);
    }

    $rsCategories = getAllMainCatsWithChildren();

    $smarty->assign('pageTitle', 'Товары категории ' . $rsCategory['name']);

    $smarty->assign('rsCategory', $rsCategory);
    $smarty->assign('rsProducts', $rsProducts);
    $smarty->assign('rsChildCats', $rsChildCats);

    $smarty->assign('rsCategories', $rsCategories);
//    d($rsCategories);
    loadTemplate($smarty, 'header');
    loadTemplate($smarty, 'category');
    loadTemplate($smarty, 'footer');

}