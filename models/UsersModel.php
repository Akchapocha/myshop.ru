<?php
/**
 * Модель для таблицы пользователей (users)
 * Created by PhpStorm.
 * Date: 23.04.2017
 * Time: 11:37
 */

/**
 * Регистрация нового пользователя
 *
 * @param string $email почта
 * @param string $pwdMD5 пароль зашифрованный в MD5
 * @param string $name имя пользователя
 * @param string $phone телефон
 * @param string $adress адресс пользователя
 */
function registerNewUser($email, $pwdMD5, $name, $phone, $adress)
{
    $users = R::dispense('users');
    $users->email = $email;
    $users->pwd = $pwdMD5;
    $users->name = $name;
    $users->phone = $phone;
    $users->adress = $adress;
    R::store($users);

    $sql = 'SELECT *
            FROM `users`
            WHERE (`email` = "' . $email . '" and `pwd` = "' . $pwdMD5 . '")
            LIMIT 1';
    $rs = R::getAll($sql);
    $rs['success'] = 1;
    $rs['message'] = 1;
    return $rs;
}

/**
 * Проверка параметров для регистрации пользователя
 *
 * @param string $email
 * @param string $pwd1
 * @param string $pwd2
 * @return array результат
 */
function checkRegisterParams($email, $pwd1, $pwd2)
{
    $res = null;

    if (!$email){
        $res['success'] = false;
        $res['message'] = 'Введите email';
    }
    if (!$pwd1){
        $res['success'] = false;
        $res['message'] = 'Введите пароль';
    }
    if (!$pwd2){
        $res['success'] = false;
        $res['message'] = 'Введите повторный пароль';
    }
    if ($pwd1 != $pwd2){
        $res['success'] = false;
        $res['message'] = 'Пароли не совпадают';
    }
    return $res;
}

function checkUserEmail($email)
{
    $sql = 'SELECT *
            FROM `users`';
    foreach (R::getAll($sql) as $item => $row){

        if ($row['email'] == $email){
            return R::getAll($sql);
        }
    }
    return array();
}