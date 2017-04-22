<?php
/**
 * Модель для таблицы категорий (categories)
 * Created by PhpStorm.
 * Date: 18.04.2017
 * Time: 13:07
 */

/**
 * Получаем массив дочерних категорий для категории $catId
 * @param integer $catId ID категории
 * @return array массив дочерних категорий
 */
function getChildrenForCat($catId)
{
    $sql = 'SELECT *
            FROM `categories`
            WHERE `parent_id` = ' . $catId . ' ';
    return R::getAll($sql);
}

/**
 * Получаем массив главных категорий с привязками дочерних
 * @return array $smartyRs массив категорий
 */
function getAllMainCatsWithChildren()
{
    $sql = 'SELECT * 
            FROM `categories`
            WHERE `parent_id` = 0';

    foreach (R::getAll($sql) as $item => $row){
        $rsChildren = getChildrenForCat($row['id']);
        if ($rsChildren){
            $row['children'] = $rsChildren;
        }
        $smartyRs[]=$row;
    }
    return $smartyRs;
}

/**
 * Получаем строку данных категории по id
 * @param integer $catId ID категории
 * @return array массив - строка категории
 */
function getCatById($catId)
{
    $catId = intval($catId);
    $sql = 'SELECT *
            FROM `categories`
            WHERE `id` = ' . $catId . ' ';
    foreach (R::getAll($sql) as $item => $row){
    }
    return $row;
}