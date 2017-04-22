<?php
/**
 * Модель для таблицы продукции (products)
 * Created by PhpStorm.
 * Date: 18.04.2017
 * Time: 17:09
 */

/**
 * Получаем массив последних добавленных товаров
 * @param integer $limit лимит товаров
 * @return array массив товаров
 */
function getLastProducts($limit = null)
{
    $sql = 'SELECT *
            FROM `products`
            ORDER BY `id` DESC';
    if ($limit){
        $sql .= ' LIMIT ' . $limit . ' ';
    }
    return R::getAll($sql);
}

/**
 * Получаем массив продуктов для категории $itemId
 * @param integer $itemId ID категории
 * @return array массив продуктов
 */
function getProductsByCat($itemId)
{
    $itemId = intval($itemId);
    $sql = 'SELECT *
            FROM `products`
            WHERE `category_id` = ' . $itemId . ' ';
    return R::getAll($sql);
}

/**
 * Получаем строку продукта по ID
 * @param integer $itemId ID продукта
 * @return array массив-строка данных продукта
 */
function getProductById($itemId)
{
    $itemId = intval($itemId);
    $sql = 'SELECT *
            FROM `products`
            WHERE `id` = ' . $itemId . ' ';
    foreach (R::getAll($sql) as $item => $row){
    }
    return $row;
}

/**
 * Получаем список продуктов из массива ID`s
 * @param array $itemsIds массив - строка идентификаторов продуктов
 * @return array массив данных продуктов
 */
function getProductsFromArray($itemsIds)
{
    $strIds = implode($itemsIds, ', ');
    $sql = 'SELECT *
            FROM `products`
            WHERE `id` IN (' . $strIds . ')';
    return (R::getAll($sql));
}