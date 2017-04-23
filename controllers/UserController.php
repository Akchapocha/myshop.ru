<?php
/**
 * Контроллер функций пользователей
 * Created by PhpStorm.
 * Date: 23.04.2017
 * Time: 11:35
 */

/**
 * Подключаем модели
 */
require_once '../models/CategoriesModel.php';
require_once '../models/UsersModel.php';

/**
 * AJAX регистрация пользователя
 * Инициализация сессионной переменной ($_REQUEST['user'])
 * @return json массив данных нового пользователя
 */
function registerAction()
{
    $email = isset($_REQUEST['email']) ? $_REQUEST['email'] : null;
    $email = trim($email);

    $pwd1 = isset($_REQUEST['pwd1']) ? $_REQUEST['pwd1'] : null;
    $pwd2 = isset($_REQUEST['pwd2']) ? $_REQUEST['pwd2'] : null;

    $phone = isset($_REQUEST['phone']) ? $_REQUEST['phone'] : null;
    $adress = isset($_REQUEST['adress']) ? $_REQUEST['adress'] : null;
    $name = isset($_REQUEST['name']) ? $_REQUEST['name'] : null;
    $name = trim($name);

    $resData = null;
    $resData = checkRegisterParams($email, $pwd1, $pwd2);

}
